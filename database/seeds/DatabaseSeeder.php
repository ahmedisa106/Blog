<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\Modules\AdminModule\Database\Seeders\AdminModuleDatabaseSeeder::class);
        $this->call(\Modules\ConfigModule\Database\Seeders\ConfigModuleDatabaseSeeder::class);
    }
}
