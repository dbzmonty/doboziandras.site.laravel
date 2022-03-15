<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CvCategory;

class cv_categoriesTableSeeder extends Seeder
{
    public function run()
    {
        CvCategory::create([
            'title' => 'Qualification'
        ]);

        CvCategory::create([
            'title' => 'Work experience'
        ]);

        CvCategory::create([
            'title' => 'Course'
        ]);
    }
}
