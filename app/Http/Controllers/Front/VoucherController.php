<?php

namespace App\Http\Controllers\Front;

use App\Voucher;
use App\VoucherLog;
use Huludini\PerfectWorldAPI\API;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{

    public function __construct()
    {
        $this->middleware( 'auth' );

        $this->middleware( 'selected.character', ['only' => ['postRedeem'] ] );

        $this->middleware( 'server.online', ['only' => 'postRedeem'] );
    }

    public function getIndex()
    {
        pagetitle( [ trans( 'main.apps.voucher' ), settings( 'server_name' ) ] );
        $voucher_logs = Auth::user()->voucher_logs;
        return view( 'front.voucher.index', compact( 'voucher_logs' ) );
    }

    public function postRedeem( Request $request )
    {
        $api = new API();
        $voucher = Voucher::findOrFail( $request->code );

        if ( !VoucherLog::redeemed( $voucher->id, $request )->exists() )
        {
            $mail = [
                'title' => trans( 'voucher.mail.title', ['code' => $request->code] ),
                'message' => trans( 'voucher.mail.message', ['name' => $voucher->item_name, 'count' => $voucher->item_count] ),
                'money' => 0,
                'item' => [
                    'id' => $voucher->item_id,
                    'pos' => 0,
                    'count' => $voucher->item_count,
                    'max_count' => $voucher->item_count,
                    'data' => $voucher->item_octets,
                    'proctype' => $voucher->item_proc_type,
                    'expire_date' => 0,
                    'guid1' => 0,
                    'guid2' => 0,
                    'mask' => $voucher->item_mask,
                ],
            ];
            $api->sendMail( Auth::user()->characterId(), $mail['title'], $mail['message'], $mail['item'], $mail['money'] );
            VoucherLog::create([
                'voucher_id' => $voucher->id,
                'user_id' => Auth::user()->ID,
                'ip_address' => $request->ip()
            ]);
            $voucher->times_redeemed = $voucher->times_redeemed + 1;
            $voucher->save();
            flash()->success( trans( 'voucher.successfully_redeemed' ) );
        }
        else
        {
            flash()->error( trans( 'voucher.already_redeemed' ) );
        }
        return redirect()->back();
    }
}
