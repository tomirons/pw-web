<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ( !DB::table('pweb_settings')->where('key', 'server_name' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'server_name',
                'value' => serialize('Perfect World')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'server_ip' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'server_ip',
                'value' => serialize('127.0.0.1')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'server_version' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'server_version',
                'value' => serialize('101')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'currency_name' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'currency_name',
                'value' => serialize('Coins')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'encryption_type' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'encryption_type',
                'value' => serialize('md5')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paypal_per' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paypal_per',
                'value' => serialize(2)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paypal_min' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paypal_min',
                'value' => serialize(5)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paypal_double' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paypal_double',
                'value' => serialize(FALSE)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paypal_email' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paypal_email',
                'value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paypal_currency' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paypal_currency',
                'value' => serialize('USD')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paymentwall_double' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paymentwall_double',
                'value' => serialize(FALSE)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paymentwall_link' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paymentwall_link',
                'value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'paymentwall_key' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'paymentwall_key',
                'value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'news_items_per_page' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'news_items_per_page',
                'value' => serialize(12)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'shop_items_per_page' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'shop_items_per_page',
                'value' => serialize(12)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'level_up_cap' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'level_up_cap',
                'value' => serialize(105)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'teleport_x' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'teleport_x',
                'value' => serialize('1280.6788')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'teleport_y' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'teleport_y',
                'value' => serialize('219.61784')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'teleport_z' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'teleport_z',
                'value' => serialize('1021.2097')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'teleport_world_tag' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'teleport_world_tag',
                'value' => serialize('1')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'ranking_ignore_roles' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'ranking_ignore_roles',
                'value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'ranking_ignore_factions' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'ranking_ignore_factions',
                'value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('key', 'chat_log_path' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'key' => 'chat_log_path',
                'value' => serialize('/home/logs/')
            ]);
        }
    }
}
