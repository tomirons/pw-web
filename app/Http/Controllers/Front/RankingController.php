<?php

namespace App\Http\Controllers\Front;

use App\Faction;
use App\Player;
use App\Territory;
use App\User;
use Huludini\PerfectWorldAPI\API;
use Huludini\PerfectWorldAPI\Gamed;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RankingController extends Controller
{

    public function getIndex()
    {
        /*
         * We want to automatically redirect the user to the player/level page
         * so we don't have to retrieve the variables twice.
         */
        return redirect( 'ranking/player/level' );
    }

    public function getPlayer( Request $request )
    {
        pagetitle( [ trans( 'ranking.player' ) . ' ' . trans( 'main.apps.ranking' ), settings( 'server_name' ) ] );
        $ranks = Player::subtype( $request->segment( 3 ) )->paginate();
        return view( 'front.ranking.player', compact( 'ranks' ) );
    }

    public function getFaction( Request $request )
    {
        pagetitle( [ trans( 'ranking.faction' ) . ' ' . trans( 'main.apps.ranking' ), settings( 'server_name' ) ] );
        $ranks = Faction::subtype( $request->segment( 3 ) )->paginate();
        return view( 'front.ranking.faction', compact( 'ranks' ) );
    }

    /*
     * NOT WORKING
     *
    public function getTerritory()
    {
        $zones = [];

        $colors = ['1' => '255, 0, 0', '2' => '0, 255, 0', '3' => '255, 127, 0', '4' => '0, 255, 255', '5' => '255, 255, 0', '6' => '212, 127, 255', '7' => '212, 127, 225', '8' => '245, 152, 157', '9' => '253, 198, 137', '10' => '0, 174, 239', '11' => '170, 223, 0', '12' => '255, 191, 0', '13' => '42, 255, 170', '14' => '255, 255, 170', '15' => '127, 31, 255', '16' => '212, 255, 255', '17' => '42, 127, 255', '18' => '145, 135, 255', '19' => '172, 211, 115', '20' => '0, 191 170', '21' => '255, 204, 255', '22' => '242, 109, 125', '23' => '170, 255, 170', '24' => '170, 191, 255', '25' => '212, 223, 255', '26' => '85, 159, 0', '27' => '152, 134, 117', '28' => '212, 31, 85', '29' => '170, 127, 0', '30' => '212, 191, 85', '31' => '192, 128, 128', '32' => '0, 127, 0', '33' => '255, 191, 170', '34' => '127, 159, 170', '35' => '212, 63, 170', '36' => '168, 99, 168', '37' => '212, 191, 170', '38' => '171, 160, 0', '39' => '117, 76, 35', '40' => '157, 0, 56', '41' => '102, 44, 145', '42' => '85, 116, 185', '43' => '0, 0, 255', '44' => '85, 95, 0'];
        $key = 1;
        foreach ( Territory::all() as $zone )
        {
            $zones[$key]['id'] = $zone->id;
            $zones[$key]['level'] = $zone->level;
            $zones[$key]['owner'] = $zone->owner;
            $zones[$key]['owner_name'] = $zone->owner_name;
            $zones[$key]['challenger'] = $zone->challenget;
            $zones[$key]['challenger_name'] = $zone->challenger_name;
            $zones[$key]['challenge_time'] = ( $zone->challenge_time > 0 ) ? date( 'm/d/Y h:i:s A', $zone->challenge_time ) : '-';
            $zones[$key]['color'] = $colors[ $zone->color ];
            $key++;
        }
        $zones = json_encode( $zones );
        return view( 'front.ranking.territory', compact( 'zones' ) );
    }*/
}
