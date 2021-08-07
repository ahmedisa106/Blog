<?php

namespace Modules\ConfigModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\ConfigModule\Entities\Language;

class LanguageSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'title' => 'العربيه',
            'locale' => 'ar',
            'country' => 'Egypt',
            'country_code' => 'eg',
            'active' => 1,
        ]);
        Language::create([
            'title' => 'English',
            'locale' => 'en',
            'country' => 'Us',
            'country_code' => 'us',
            'active' => 1,
        ]);
    }
}
