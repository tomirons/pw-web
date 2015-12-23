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
        DB::table('pweb_settings')->insert([
            'setting_key' => 'server_name',
            'setting_value' => serialize('Perfect World')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'server_version',
            'setting_value' => serialize('101')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'currency_name',
            'setting_value' => serialize('Coins')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'encryption_type',
            'setting_value' => serialize('md5')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paypal_per',
            'setting_value' => serialize(2)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paypal_min',
            'setting_value' => serialize(5)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paypal_double',
            'setting_value' => serialize(FALSE)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paypal_email',
            'setting_value' => serialize(NULL)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paypal_currency',
            'setting_value' => serialize('USD')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paymentwall_double',
            'setting_value' => serialize(FALSE)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paymentwall_link',
            'setting_value' => serialize(NULL)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'paymentwall_setting_key',
            'setting_value' => serialize(NULL)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'news_items_per_page',
            'setting_value' => serialize(12)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'shop_items_per_page',
            'setting_value' => serialize(12)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'teleport_x',
            'setting_value' => serialize('1280.6788')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'teleport_y',
            'setting_value' => serialize('219.61784')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'teleport_z',
            'setting_value' => serialize('1021.2097')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'teleport_world_tag',
            'setting_value' => serialize('1')
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'ranking_ignore_roles',
            'setting_value' => serialize(NULL)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'ranking_ignore_factions',
            'setting_value' => serialize(NULL)
        ]);

        DB::table('pweb_settings')->insert([
            'setting_key' => 'chat_log_path',
            'setting_value' => serialize('/home/logs/')
        ]);
    }
}
