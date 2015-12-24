<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(ApplicationTableSeeder::class);

         $this->call(SettingsTableSeeder::class);

         $this->call(ArticlesTableSeeder::class);

         $this->call(ServicesTableSeeder::class);

        Model::reguard();
    }
}
