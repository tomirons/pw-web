<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pweb_services')->insert([
            'key' => 'broadcast',
            'icon' => 'bullhorn',
            'currency_type' => 'virtual',
            'price' => 50,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'virtual_to_cubi',
            'icon' => 'exchange',
            'currency_type' => 'virtual',
            'price' => 10,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'cultivation_change',
            'icon' => 'retweet',
            'currency_type' => 'virtual',
            'price' => 100,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'gold_to_virtual',
            'icon' => 'exchange',
            'currency_type' => 'gold',
            'price' => 1000000,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'level_up',
            'icon' => 'plus-circle',
            'currency_type' => 'virtual',
            'price' => 10,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'max_meridian',
            'icon' => 'unlock',
            'currency_type' => 'virtual',
            'price' => 500,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'reset_exp',
            'icon' => 'refresh',
            'currency_type' => 'virtual',
            'price' => 0,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'reset_sp',
            'icon' => 'refresh',
            'currency_type' => 'virtual',
            'price' => 0,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'reset_stash_password',
            'icon' => 'unlock',
            'currency_type' => 'virtual',
            'price' => 150,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('pweb_services')->insert([
            'key' => 'teleport',
            'icon' => 'globe',
            'currency_type' => 'virtual',
            'price' => 0,
            'enabled' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
