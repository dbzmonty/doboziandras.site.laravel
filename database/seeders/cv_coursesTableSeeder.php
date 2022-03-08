<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cv_course;

class cv_coursesTableSeeder extends Seeder
{
    public function run()
    {
        cv_course::create([
            'course' =>'Angular 10 Course: Build Angular Apps',
            'platform' =>'Udemy'
        ]);

        cv_course::create([
            'course' =>'React JS Course: The Beginners Guide',
            'platform' =>'Udemy'
        ]);

        cv_course::create([
            'course' =>'HTML, JavaScript, & Bootstrap - Certification Course',
            'platform' =>'Udemy'
        ]);

        cv_course::create([
            'course' =>'Network and Operating System Ethical Hacking Course',
            'platform' =>'Udemy'
        ]);

        cv_course::create([
            'course' =>'Scanning Cyber Security Hacking Course',
            'platform' =>'Udemy'
        ]);

        cv_course::create([
            'course' =>'Create a Members Only Blog using PHP, MySQL & AJAX',
            'platform' =>'Udemy'
        ]);

        cv_course::create([
            'course' =>'PIC Microcontroller meets LabVIEW',
            'platform' =>'Udemy'
        ]);
    }
}
