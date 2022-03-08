<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(cv_jobsTableSeeder::class);
        $this->call(cv_educationsTableSeeder::class);
        $this->call(cv_coursesTableSeeder::class);
    }
}
