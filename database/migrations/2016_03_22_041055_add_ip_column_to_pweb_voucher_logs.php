<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIpColumnToPwebVoucherLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pweb_voucher_logs', function (Blueprint $table) {
            $table->string('ip_address', 45)->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pweb_voucher_logs', function (Blueprint $table) {
            $table->dropColumn('ip_address');
        });
    }
}
