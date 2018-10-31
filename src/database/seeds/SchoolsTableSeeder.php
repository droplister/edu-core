<?php

namespace Droplister\EduCore\Database\Seeds;

use Droplister\EduCore\App\School;
use Droplister\EduCore\App\Location;
use Droplister\EduCore\App\PrivateSchoolSurvey;
use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source Data
        $survey_data = PrivateSchoolSurvey::get();

        // Import Data
        foreach($survey_data as $data) {
            // State
            $state = Location::firstOrCreateState($data);
            // City
            $city = Location::firstOrCreateCity($state, $data);
            // School
            $school = School::firstOrCreateSchool($city, $data);
        }
    }
}