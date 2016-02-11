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
        if ( !DB::table('pweb_settings')->where('setting_key', 'server_name' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'server_name',
                'setting_value' => serialize('Perfect World')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'server_ip' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'server_ip',
                'setting_value' => serialize('127.0.0.1')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'server_version' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'server_version',
                'setting_value' => serialize('101')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'currency_name' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'currency_name',
                'setting_value' => serialize('Coins')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'encryption_type' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'encryption_type',
                'setting_value' => serialize('md5')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paypal_per' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paypal_per',
                'setting_value' => serialize(2)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paypal_min' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paypal_min',
                'setting_value' => serialize(5)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paypal_double' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paypal_double',
                'setting_value' => serialize(FALSE)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paypal_client_id' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paypal_client_id',
                'setting_value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paypal_secret' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paypal_secret',
                'setting_value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paypal_currency' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paypal_currency',
                'setting_value' => serialize('USD')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paymentwall_double' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paymentwall_double',
                'setting_value' => serialize(FALSE)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paymentwall_link' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paymentwall_link',
                'setting_value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'paymentwall_key' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'paymentwall_key',
                'setting_value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'news_items_per_page' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'news_items_per_page',
                'setting_value' => serialize(12)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'shop_items_per_page' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'shop_items_per_page',
                'setting_value' => serialize(12)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'level_up_cap' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'level_up_cap',
                'setting_value' => serialize(105)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'teleport_x' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'teleport_x',
                'setting_value' => serialize('1280.6788')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'teleport_y' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'teleport_y',
                'setting_value' => serialize('219.61784')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'teleport_z' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'teleport_z',
                'setting_value' => serialize('1021.2097')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'teleport_world_tag' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'teleport_world_tag',
                'setting_value' => serialize('1')
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'ranking_ignore_roles' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'ranking_ignore_roles',
                'setting_value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'ranking_ignore_factions' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'ranking_ignore_factions',
                'setting_value' => serialize(NULL)
            ]);
        }

        if ( !DB::table('pweb_settings')->where('setting_key', 'chat_log_path' )->exists() )
        {
            DB::table('pweb_settings')->insert([
                'setting_key' => 'chat_log_path',
                'setting_value' => serialize('/home/logs/')
            ]);
        }
    }
}
