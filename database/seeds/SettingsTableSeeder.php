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
        DB::table('settings')->insert([
            'key' => 'server_name',
            'value' => serialize('Perfect World')
        ]);

        DB::table('settings')->insert([
            'key' => 'currency_name',
            'value' => serialize('Coins')
        ]);

        DB::table('settings')->insert([
            'key' => 'encrypt_type',
            'value' => serialize('md5')
        ]);

        DB::table('settings')->insert([
            'key' => 'paypal_per',
            'value' => serialize(2)
        ]);

        DB::table('settings')->insert([
            'key' => 'paypal_min',
            'value' => serialize(5)
        ]);

        DB::table('settings')->insert([
            'key' => 'paypal_double',
            'value' => serialize(FALSE)
        ]);

        DB::table('settings')->insert([
            'key' => 'paypal_email',
            'value' => serialize(NULL)
        ]);

        DB::table('settings')->insert([
            'key' => 'paypal_currency',
            'value' => serialize('USD')
        ]);

        DB::table('settings')->insert([
            'key' => 'paymentwall_double',
            'value' => serialize(FALSE)
        ]);

        DB::table('settings')->insert([
            'key' => 'paymentwall_link',
            'value' => serialize(NULL)
        ]);

        DB::table('settings')->insert([
            'key' => 'paymentwall_key',
            'value' => serialize(NULL)
        ]);

        DB::table('settings')->insert([
            'key' => 'news_items_per_page',
            'value' => serialize(12)
        ]);

        DB::table('settings')->insert([
            'key' => 'shop_items_per_page',
            'value' => serialize(12)
        ]);

        DB::table('settings')->insert([
            'key' => 'teleport_x',
            'value' => serialize(1280.6788)
        ]);

        DB::table('settings')->insert([
            'key' => 'teleport_y',
            'value' => serialize(219.61784)
        ]);

        DB::table('settings')->insert([
            'key' => 'teleport_z',
            'value' => serialize(1021.2097)
        ]);

        DB::table('settings')->insert([
            'key' => 'teleport_world_tag',
            'value' => serialize(1280.6788)
        ]);

        DB::table('settings')->insert([
            'key' => 'ranking_player_column_type',
            'value' => serialize(1)
        ]);

        DB::table('settings')->insert([
            'key' => 'ranking_faction_column_type',
            'value' => serialize(1)
        ]);

        DB::table('settings')->insert([
            'key' => 'ranking_ignore_roles',
            'value' => serialize(NULL)
        ]);

        DB::table('settings')->insert([
            'key' => 'ranking_ignore_factions',
            'value' => serialize(NULL)
        ]);

        DB::table('settings')->insert([
            'key' => 'chat_log_path',
            'value' => serialize('/home/logs/')
        ]);
    }
}
