<?php

namespace Modules\AdminModule\Database\Seeders;

use Illuminate\Database\Seeder;

class AdminModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeederTableSeeder::class);
    }
}
