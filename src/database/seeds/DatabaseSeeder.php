<?php

namespace Droplister\EduCore\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PrivateSchoolSurveysTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
    }
}