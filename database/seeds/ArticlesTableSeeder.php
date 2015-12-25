<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pweb_articles')->insert([
            'title' => 'Welcome',
            'content' => '<p>Congratulations on successfully installing your PW Web! Browse around and get a feel for everything! If you have any questions or issues please don\'t hesitate to post them on <a href="https://github.com/huludini/pw-web/issues">github!</a></p>',
            'category' => 'other',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
