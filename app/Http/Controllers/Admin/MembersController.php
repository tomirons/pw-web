<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function getManage()
    {
        pagetitle( [ trans( 'members.manage' ), trans( 'main.apps.members' ), settings( 'server_name' ) ] );
        $users = User::paginate();
        return view( 'admin.members.manage', compact( 'users' ) );
    }

    public function postBalance( Request $request, User $user )
    {
        $this->validate($request, [
            'amount' => 'required|numeric'
        ]);

        $user->money = $user->money + $request->amount;
        $user->save();

        flash()->success( trans( 'members.success', ['user' => $user->name, 'count' => $request->amount, 'currency' => strtolower( settings( 'currency_name' ) )] ) );
        return redirect()->back();
    }

    public function postSearch( Request $request )
    {
        return User::where( 'name', 'LIKE', '%' . $request->search_query . '%' )->get();
    }
}
