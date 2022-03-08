<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cv_job;

class cv_jobsTableSeeder extends Seeder
{
    public function run()
    {
        cv_job::create([
            'position' =>'.NET Software Developer',
            'company' =>'Rosenberger Hungary Ltd.',
            'location' =>'Jaszarokszallas, Hungary',
            'date_period' =>'2019 - 2021'
        ]);

        cv_job::create([
            'position' =>'Production Support intern',
            'company' =>'Robert Bosch Elektronika Ltd.',
            'location' =>'Hatvan, Hungary',
            'date_period' =>'2018 - 2019'
        ]);

        cv_job::create([
            'position' =>'Software Developer intern',
            'company' =>'Qnszt Ltd.',
            'location' =>'Eger, Hungary',
            'date_period' =>'2018'
        ]);

        cv_job::create([
            'position' =>'Maintenance Operative',
            'company' =>'Grange St. Paul`s Hotel',
            'location' =>'London, U.K.',
            'date_period' =>'2015 - 2016'
        ]);

        cv_job::create([
            'position' =>'Computer Technician',
            'company' =>'Home Computer Store',
            'location' =>'Heves, Hungary',
            'date_period' =>'2006 - 2008'
        ]);
    }
}
