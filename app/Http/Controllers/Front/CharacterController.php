<?php

namespace App\Http\Controllers\Front;

use Huludini\PerfectWorldAPI\API;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CharacterController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );

        $this->middleware( 'server.online' );
    }

    public function getSelect( $role_id )
    {
        //TODO Check to see if the role belongs to the user.
        $api = new API();
        if ( settings( 'server_version' ) == '07' )
        {
            $role_name = NULL;
            $roles = $api->getRoles( Auth::user()->ID );
            foreach ( $roles['roles'] as $role )
            {
                if ( $role_id == $role['id'] )
                {
                    $role_name = $role['name'];
                }
            }
            session()->put( 'character_id', $role_id );
            session()->put( 'character_name', $role_name );
            flash()->success( trans( 'character.success' ) );
        }
        else
        {
            $role_data = $api->getRole( $role_id );
            if ( isset( $role_data ) )
            {
                // Doens't work yet
                /*if($roleData['base']['userid'])
                {
                    //$_SESSION['selectedRoleId'] = $role;
                    //$_SESSION['selectedRoleName'] = $roleData['base']['name'];
                    Session::set($action, time());
                    Session::set('selectedRoleId', $role);
                    Session::set('selectedRoleName', $roleData['base']['name']);
                    echo 'selected';
                }
                else
                {
                    echo 'Character does not belong to your Account.';
                }*/
                session()->put( 'character_id', $role_data['base']['id'] );
                session()->put( 'character_name', $role_data['base']['name'] );
                flash()->success( trans( 'character.success' ) );
            }
            else
            {
                flash()->error( trans( 'character.error.role' ) );
            }
        }
        return redirect()->back();
    }
}
