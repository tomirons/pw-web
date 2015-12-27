<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );
    }

    public function getSettings()
    {
        pagetitle( [ trans( 'main.settings' ), settings( 'server_name' ) ] );
        return view( 'front.account.index' );
    }

    public function postEmail( Request $request )
    {
        $validator = Validator::make( $request->all(), [
            'email_address' => 'required|unique:users,email|max:255'
        ]);

        if ( $validator->fails() )
        {
            return redirect( 'account/settings#email' )
                ->withErrors( $validator )
                ->withInput();
        }

        $user = Auth::user();
        $user->email = $request->new_email;
        $user->save();
        flash()->success( trans( 'main.settings_saved' ) );
        return redirect( 'account/settings#email' );
    }

    public function postPassword( Request $request )
    {
        $validator = Validator::make( $request->all(), [
            'current_password' => 'required|current_pass|max:255',
            'new_password' => 'required|confirmed|min:6'
        ]);


        if ( $validator->fails() )
        {
            return redirect( 'account/settings#password' )
                ->withErrors( $validator )
                ->withInput();
        }

        $user = Auth::user();
        $user->passwd = Hash::make( $user->name . $request->new_password );
        $user->save();
        flash()->success( trans( 'main.settings_saved' ) );
        return redirect( 'account/settings#password' );
    }
}
