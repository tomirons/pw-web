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
        if ( !\App\Service::find( 'broadcast' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'broadcast',
                'icon' => 'microphone',
                'currency_type' => 'virtual',
                'price' => 50,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'virtual_to_cubi' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'virtual_to_cubi',
                'icon' => 'shuffle',
                'currency_type' => 'virtual',
                'price' => 10,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'cultivation_change' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'cultivation_change',
                'icon' => 'refresh',
                'currency_type' => 'virtual',
                'price' => 100,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'gold_to_virtual' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'gold_to_virtual',
                'icon' => 'shuffle',
                'currency_type' => 'gold',
                'price' => 1000000,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'level_up' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'level_up',
                'icon' => 'plus',
                'currency_type' => 'virtual',
                'price' => 10,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'max_meridian' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'max_meridian',
                'icon' => 'lock-open',
                'currency_type' => 'virtual',
                'price' => 500,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'reset_exp' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'reset_exp',
                'icon' => 'reload',
                'currency_type' => 'virtual',
                'price' => 0,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'reset_sp' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'reset_sp',
                'icon' => 'reload',
                'currency_type' => 'virtual',
                'price' => 0,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'reset_stash_password' ) )
        {
            DB::table('pweb_services')->insert([
                'key' => 'reset_stash_password',
                'icon' => 'lock-open',
                'currency_type' => 'virtual',
                'price' => 150,
                'enabled' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        if ( !\App\Service::find( 'teleport' ) )
        {
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
}
