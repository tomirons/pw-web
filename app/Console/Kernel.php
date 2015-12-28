<?php

namespace App\Console;

use App\Faction;
use App\Player;
use App\Territory;
use App\Transfer;
use App\User;
use Carbon\Carbon;
use Huludini\PerfectWorldAPI\API;
use Huludini\PerfectWorldAPI\Gamed;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        /*
         * Cubi Transferring
         */
        $schedule->call(function () {
            $transfers = Transfer::all();
            foreach ( $transfers as $transfer )
            {
                if ( !DB::table( 'usecashnow' )->where( 'userid', $transfer->user_id )->where( 'zoneid', $transfer->zone_id )->take( 1 )->exists() )
                {
                    DB::table( 'usecashnow' )->insert([
                        'userid' => $transfer->user_id,
                        'zoneid' => $transfer->zone_id,
                        'sn' => 0,
                        'aid' => 1,
                        'point' => 0,
                        'cash' => $transfer->cash,
                        'status' => 1,
                        'creatime' => Carbon::now()
                    ]);
                    DB::table( 'pweb_transfer' )->where( 'user_id', $transfer->user_id )->where( 'zone_id', $transfer->zone_id )->where( 'cash', $transfer->cash )->take( 1 )->delete();
                }
            }
        })->everyMinute();

        /*
         * Update Players
         */
        $schedule->call(function () {
            $api = new API();
            if ( $api->online )
            {
                set_time_limit( 0 );
                $users = User::all();
                foreach ( $users as $user )
                {
                    $roles = $api->getRoles( $user->ID ) ? $api->getRoles( $user->ID )['roles'] : [];
                    foreach ( $roles as $role )
                    {
                        $role_data = $api->getRole( $role['id'] );
                        $var_data = $api->parseOctet( $role_data['status']['var_data'], 'var_data' );
                        if ( !empty( $role_data['status']['faction_contrib'] ) )
                        {
                            $faction_contrib = $api->parseOctet( $role_data['status']['faction_contrib'], 'faction_contrib' );
                        }
                        if ( !empty( $role_data['status']['force_data'] ) )
                        {
                            $force_data = $api->parseOctet( $role_data['status']['force_data'], 'force_data' );
                        }
                        if ( !empty( $role_data['status']['title_data'] ) )
                        {
                            $title_data = $api->parseOctet( $role_data['status']['title_data'], 'title_data' );
                        }
                        $user_faction = $api->getUserFaction( $role['id'] );
                        if ( !empty( $user_faction['fid'] ) )
                        {
                            $faction_info = $api->getFactionInfo( $user_faction['fid'] );
                        }
                        $role_info = [
                            'id' => $role_data['base']['id'],
                            'name' => $role_data['base']['name'],
                            'cls' => $role_data['base']['cls'],
                            'gender' => $role_data['base']['gender'],
                            'spouse' => $role_data['base']['spouse'],
                            'level' => $role_data['status']['level'],
                            'level2' => $role_data['status']['level2'],
                            'hp' => $role_data['status']['hp'],
                            'mp' => $role_data['status']['mp'],
                            'pariah_time' => $role_data['status']['pariah_time'],
                            'reputation' => $role_data['status']['reputation'],
                            'time_used' => $role_data['status']['time_used'],
                            'pk_count' => $var_data['pk_count'],
                            'dead_flag' => $var_data['dead_flag'],
                            'force_id' => !empty( $force_data['cur_force_id'] ) ? $force_data['cur_force_id'] : 0,
                            'title_id' => !empty( $title_data['cur_title_id'] ) ? $title_data['cur_title_id'] : 0,
                            'faction_id' => !empty( $user_faction['fid'] ) ? $user_faction['fid'] : '',
                            'faction_name' => !empty( $faction_info['name'] ) ? $faction_info['name'] : '',
                            'faction_role' => !empty ($user_faction['role'] ) ? $user_faction['role'] : '',
                            'faction_contrib' => !empty( $faction_contrib['consume_contrib'] ) ? $faction_contrib['consume_contrib'] : 0,
                            'faction_feat' => !empty( $faction_contrib['cumulate_contrib'] ) ? $faction_contrib['cumulate_contrib'] : 0,
                            'equipment' => json_encode( $role_data['equipment'] ),
                        ];

                        if ( $player = Player::find( $role_info['id'] ) )
                        {
                            $player->update( $role_info );
                        }
                        else
                        {
                            Player::create( $role_info );
                        }
                    }
                }
            }
        })->everyTenMinutes();

        /*
         * Update Factions
         */
        $schedule->call(function () {
            $api = new API();
            $handler = NULL;
            if ( $api->online )
            {
                set_time_limit( 0 );
                do{
                    $raw_info = $api->getRaw( 'factioninfo', $handler );
                    if ( count( $raw_info['Raw'] ) < 1 || !isset( $raw_info['Raw'] ) ) return true;
                    for ( $i=0; $i < count( $raw_info['Raw'] ); $i++ )
                    {
                        if ( empty( $raw_info['Raw'][$i]['key'] ) || empty( $raw_info['Raw'][$i]['value'] ) )
                        {
                            unset( $raw_info['Raw'][$i] );
                            continue;
                        }
                        $id = Gamed::getArrayValue( unpack( "N", pack( "H*", $raw_info['Raw'][$i]['key'] ) ), 1 );
                        $pack = pack( "H*", $raw_info['Raw'][$i]['value'] );
                        $faction = Gamed::unmarshal( $pack, $api->data['FactionInfo'] );
                        if ( !empty( $faction['master']['roleid'] ) && $faction['master']['roleid'] > 0 )
                        {
                            $user_faction = $api->getUserFaction( $faction['master']['roleid'] );
                            $faction_info = [
                                'id' => $faction['fid'],
                                'name' => $faction['name'],
                                'level' => $faction['level']+1,
                                'master' => $faction['master']['roleid'],
                                'master_name' => $user_faction['name'],
                                'members' => count( $faction['member'] ),
                                'reputation' => ( $this->getFactionStat( $faction['fid'], 'reputation' ) > 0 ) ? $this->getFactionStat( $faction['fid'], 'reputation' ) : 0,
                                'time_used' => ( $this->getFactionStat( $faction['fid'], 'time_used' ) > 0 ) ? $this->getFactionStat( $faction['fid'], 'time_used' ) : 0,
                                'pk_count' => ( $this->getFactionStat( $faction['fid'], 'pk_count' ) > 0 ) ? $this->getFactionStat( $faction['fid'], 'pk_count' ) : 0,
                                'announce' => $faction['announce'],
                                'territories' => Territory::where( 'owner', $faction['fid'] )->count(),
                            ];

                            if ( $faction = Faction::find( $faction_info['id'] ) )
                            {
                                $faction->update( $faction_info );
                            }
                            else
                            {
                                Faction::create( $faction_info );
                            }
                        }
                    }
                    $rawcount = count( $raw_info['Raw'] ) - 1;
                    $lastraw = $raw_info['Raw'][$rawcount];
                    $lastkey = $lastraw['key'];
                    $newkey = hexdec( $lastkey ) + 1;
                    $handler = bin2hex( pack( "N*", $newkey ) );
                }while( TRUE );
            }
        })->everyTenMinutes();

        /*
         * Update Territories
         */
        $schedule->call(function() {
            $api = new API();
            if ( $api->online )
            {
                $territories = $api->getTerritories() ? $api->getTerritories()['Territory'] : [];
                foreach( $territories as $territory )
                {
                    if ( $territory['owner'] > 0 )
                    {
                        $owner = $api->getFactionInfo( $territory['owner'] );
                    }
                    if ( $territory['challenger'] > 0 )
                    {
                        $challenger = $api->getFactionInfo( $territory['challenger'] );
                    }
                    $territory_info = [
                        'id' => $territory['id'],
                        'level' => $territory['level'],
                        'owner' => $territory['owner'],
                        'owner_name' => !empty( $owner['name'] ) ? $owner['name'] : '',
                        'occupy_time' => $territory['occupy_time'],
                        'challenger' => $territory['challenger'],
                        'challenger_name' => !empty( $challenger['name'] ) ? $challenger['name'] : '',
                        'deposit' => $territory['deposit'],
                        'cutoff_time' => $territory['cutoff_time'],
                        'battle_time' => $territory['battle_time'],
                        'bonus_time' => $territory['bonus_time'],
                        'color' => $territory['color'],
                        'status' => $territory['status'],
                        'timeout' => $territory['timeout'],
                        'maxbonus' => $territory['maxbonus'],
                        'challenge_time' => $territory['challenge_time'],
                        'challengerdetails' => $territory['challengerdetails'],
                    ];
                    if ( $territory = Territory::find( $territory_info['id'] ) )
                    {
                        $territory->update( $territory_info );
                    }
                    else
                    {
                        Territory::create( $territory_info );
                    }
                }
            }
        })->everyTenMinutes();
    }

    protected function getFactionStat( $fid, $stat, $total = 0 )
    {
        $players = Player::where( 'faction_id', $fid )->get();
        foreach ( $players as $k => $v )
        {
            if ( $v[ $stat ] > 0 )
            {
                $total += $v[ $stat ];
            }
        }
        return $total;
    }
}
