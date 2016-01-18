<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Efriandika\LaravelSettings\Facades\Settings;
use Huludini\PerfectWorldAPI\API;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'server.online', ['only' => ['postBroadcast', 'postMailer', 'postForbid']] );
    }
    public function getBroadcast()
    {
        pagetitle( [ trans( 'management.broadcast' ), settings( 'server_name' ) ] );
        return view( 'admin.management.broadcast' );
    }

    public function postBroadcast( Request $request )
    {
        $this->validate($request, [
            'user' => 'numeric|min:32',
            'channel' => 'required|channel_available',
            'message' => 'required',
        ]);

        $api = new API();

        $api->WorldChat( $request->user, $request->message, $request->channel );
        flash()->success( trans( 'management.complete.broadcast' ) );

        return redirect()->back();
    }

    public function getMailer()
    {
        pagetitle( [ trans( 'management.mailer' ), settings( 'server_name' ) ] );
        return view( 'admin.management.mailer' );
    }

    public function postMailer( Request $request )
    {
        $this->validate($request, [
            'item_id' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
            'protection_type' => 'required|numeric|min:0',
            'time_limit' => 'numeric',
            'gold' => 'numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $api = new API();

        $mail = array(
            'title' => $request->subject,
            'message' => $request->message,
            'money' => $request->gold,
            'item' => [
                'id' => $request->item_id,
                'pos' => 0,
                'count' => $request->quantity,
                'max_count' => $request->quantity,
                'data' => ( $request->octet ) ? $request->octet : NULL,
                'proctype' => ( $request->protection_type ) ? $request->protection_type : 0,
                'expire_date' => ( $request->time_limit ) ? time() + $request->time_limit : 0,
                'guid1' => 0,
                'guid2' => 0,
                'mask' => $request->mask,
            ]
        );

        switch ( $request->type )
        {
            //TODO Add a parameter to the success message that tells the user how many players the item was sent to or their names

            case 'list':
                $roles = explode( ',', str_replace( ' ', '', $request->roles ) );
                foreach ( $roles as $index => $id )
                {
                    $api->sendMail( $id, $mail['title'], $mail['message'], $mail['item'], $mail['money'] );
                    flash()->success( trans( 'management.complete.mailer.list' ) );
                }
                break;

            case 'all':
                $users = User::all();
                foreach ( $users as $user )
                {
                    $roles = $api->getRoles( $user->ID ) ? $api->getRoles( $user->ID )['roles'] : [];
                    foreach ( $roles as $role )
                    {
                        $api->sendMail( $role['id'], $mail['title'], $mail['message'], $mail['item'], $mail['money'] );
                    }
                }
                flash()->success( trans( 'management.complete.mailer.all' ) );
                break;

            case 'online':
                foreach ( $api->getOnlineList() as $index => $role )
                {
                    $api->sendMail( $role['roleid'], $mail['title'], $mail['message'], $mail['item'], $mail['money'] );
                }
                flash()->success( trans( 'management.complete.mailer.online' ) );
                break;
        }
        return redirect()->back();
    }

    public function getForbid()
    {
        pagetitle( [ trans( 'management.forbid' ), settings( 'server_name' ) ] );
        return view( 'admin.management.forbid' );
    }

    public function postForbid( Request $request )
    {
        $this->validate($request, [
            'user_id' => 'required|numeric|min:1',
            'length' => 'required|numeric|min:1',
            'reason' => 'required'
        ]);

        $api = new API();
        switch ( $request->type )
        {
            case 'ban_acc':
                $api->forbidAcc( $request->user_id, $request->length, $request->reason );
                flash()->success( trans( 'management.complete.forbid.ban.account' ), ['user' => $request->user_id, 'seconds' => $request->length] );
                break;

            case 'ban_char':
                $api->forbidRole( $request->user_id, $request->length, $request->reason );
                flash()->success( trans( 'management.complete.forbid.ban.character', ['user' => $request->user_id, 'seconds' => $request->length] ) );
                break;

            case 'mute_acc':
                $api->muteAcc( $request->user_id, $request->length, $request->reason );
                flash()->success( trans( 'management.complete.forbid.mute.account', ['user' => $request->user_id, 'seconds' => $request->length] ) );
                break;

            case 'mute_char':
                $api->muteRole( $request->user_id, $request->length, $request->reason );
                flash()->success( trans( 'management.complete.forbid.mute.character', ['user' => $request->user_id, 'seconds' => $request->length] ) );
                break;
        }
        return redirect()->back();
    }

    public function getGM()
    {
        pagetitle( [ trans( 'management.gm' ), settings( 'server_name' ) ] );
        $gms = DB::table( 'auth' )->select( 'userid' )->distinct()->get();
        return view( 'admin.management.gm.view', compact( 'gms' ) );
    }

    public function postGM( Request $request )
    {
        $this->validate($request, [
            'account_id' => 'required|numeric|min:1'
        ]);

        if ( $user = User::find( $request->account_id ) )
        {
            if ( DB::table( 'auth' )->where( 'userid', $request->account_id )->count() == 0 )
            {
                DB::statement( "call addGM({$request->account_id}, 1)" );
                flash()->success( trans( 'management.complete.gm.add', ['acc' => $user->name] ) );
            }
            else
            {
                flash()->error( trans( 'management.error.gm.already_gm', ['acc' => $user->name] ) );
            }
        }
        else
        {
            flash()->error( trans( 'management.error.gm.no_user', ['acc' => $request->account_id] ) );
        }
        return redirect()->back();
    }

    public function getGMEdit( User $user )
    {
        pagetitle( [ trans( 'management.edit_gm', ['user' => $user->name] ), settings( 'server_name' ) ] );
        $permissions = DB::table( 'auth' )->where( 'userid', $user->ID )->get();

        foreach ( $permissions as $permission )
        {
            foreach ( $permission as $k => $v )
            {
                if ( $k == 'rid' )
                {
                    $user_rights[ $v ] = $v;
                }
            }
        }

        return view( 'admin.management.gm.edit', compact( 'user_rights' ) );
    }

    public function postGMEdit( Request $request, User $user )
    {
        foreach ( $request->gm_rights as $k => $v )
        {
            if ( $v )
            {
                if ( DB::table( 'auth' )->where( 'userid', $user->ID )->where( 'rid', $k )->count() == 0 )
                {
                    DB::table( 'auth' )->insert([
                        'userid' => $user->ID,
                        'zoneid' => 1,
                        'rid' => $k
                    ]);
                }
            }
            else
            {
                DB::table( 'auth' )->where( 'userid', $user->ID )->where( 'rid', $k )->delete();
            }
        }
        flash()->success( trans( 'management.complete.gm.edit', ['acc' => $user->name] ) );
        return redirect( 'admin/management/gm' );
    }

    public function getGMRemove( User $user )
    {
        DB::table( 'auth' )->where( 'userid', $user->ID )->delete();
        flash()->success( trans( 'management.complete.gm.remove', ['acc' => $user->name] ) );
        return redirect()->back();
    }

    public function getChatWatch()
    {
        pagetitle( [ trans( 'management.watch' ), settings( 'server_name' ) ] );
        return view( 'admin.management.chat.watch' );
    }

    public function postChatLogs()
    {
        $chat = [];

        $colors = [
            0 => 'font-dark',
            1 => 'font-yellow-crusta',
            2 => 'font-green-jungle',
            7 => 'font-yellow-gold',
            9 => 'font-red-thunderbird'
        ];

        $type = trans( 'management.channels' );

        $handle = fopen( settings( 'chat_log_path' ) . 'world2.chat', "r" );
        if ( $handle )
        {
            $lines = [];
            while ( ( $line = fgets( $handle ) ) !== false )
            {
                $lines[] = explode( " ", $line );
            }
            foreach ( $lines as $o )
            {
                $chat[] = array(
                    'row_color' => ( !array_key_exists( substr( $o[8], 4 ), $colors ) ) ? ( substr( $o[8], 4 ) <= 1024 ) ? 'font-blue' : 'font-purple': $colors[ substr( $o[8], 4 ) ],
                    'date' => $o[0]." ".$o[1],
                    'type' => str_replace( ":", "", $o[6] ),
                    'uid' => substr( $o[7], 4 ),
                    'channel' => ( !array_key_exists( substr( $o[8], 4 ), $type ) ) ? ( substr( $o[8], 4 ) <= 1024 ) ? $type[3] : $type[4]: $type[ substr( $o[8], 4 ) ],
                    'dest' => ( strpos( $o[8], 'fid' ) !== false ) ? trans( 'management.faction_id' ) . substr( $o[8], 4 ) : substr( $o[8], 4 ),
                    'msg' => base64_decode( base64_encode( iconv( "UCS-2LE", "UTF-8", base64_decode( substr( $o[9], 4 ) ) ) ) )
                );
            }
            fclose( $handle );
        }
        return $chat;
    }

    public function getChatSettings()
    {
        pagetitle( [ trans( 'main.settings' ), trans( 'management.chat' ), settings( 'server_name' ) ] );
        return view( 'admin.management.chat.settings' );
    }

    public function postChatSettings( Request $request )
    {
        Settings::set( 'chat_log_path', $request->log_path );

        flash()->success( trans( 'main.settings_saved' ) );

        return redirect( 'admin/management/chat/watch' );
    }
}
