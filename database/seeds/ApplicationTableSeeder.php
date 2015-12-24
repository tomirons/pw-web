<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pweb_apps')->insert([
            'key' => 'news',
            'position' => 1,
            'enabled' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('pweb_apps')->insert([
            'key' => 'shop',
            'position' => 2,
            'enabled' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('pweb_apps')->insert([
            'key' => 'donate',
            'position' => 3,
            'enabled' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('pweb_apps')->insert([
            'key' => 'vote',
            'position' => 4,
            'enabled' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('pweb_apps')->insert([
            'key' => 'voucher',
            'position' => 5,
            'enabled' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('pweb_apps')->insert([
            'key' => 'services',
            'position' => 6,
            'enabled' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('pweb_apps')->insert([
            'key' => 'ranking',
            'position' => 7,
            'enabled' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
