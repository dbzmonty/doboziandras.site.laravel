<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CvEntry;

class cv_entriesTableSeeder extends Seeder
{
    public function run()
    {
        CvEntry::create([
            'category_id' => 1,
            'title' =>'Software Information Technology',
            'company' =>'Eszterházy Károly University',
            'location' =>'Eger, Hungary',
            'year_from' => 2016,
            'year_to' => 2019
        ]);

        CvEntry::create([
            'category_id' => 1,
            'title' =>'Cisco CCNA certificate',
            'company' =>'Eszterházy Károly University',
            'location' =>'Eger, Hungary',
            'year_from' => 2018,
            'year_to' => 2018
        ]);

        CvEntry::create([
            'category_id' => 1,
            'title' =>'English intermediate level B2 language exam',
            'company' =>'Langwest',
            'location' =>'Eger, Hungary',
            'year_from' => 2014,
            'year_to' => 2015
        ]);

        CvEntry::create([
            'category_id' => 1,
            'title' =>'Graduation certificate',
            'company' =>'Balassi Bálint Secondary School',
            'location' =>'Kal, Hungary',
            'year_from' => 2012,
            'year_to' => 2014
        ]);

        CvEntry::create([
            'category_id' => 1,
            'title' =>'Electrician certificate',
            'company' =>'Wigner Jenő Secondary School',
            'location' =>'Eger, Hungary',
            'year_from' => 2002,
            'year_to' => 2003
        ]);

        CvEntry::create([
            'category_id' => 2,
            'title' =>'.NET Software Developer',
            'company' =>'Rosenberger Hungary Ltd.',
            'location' =>'Jaszarokszallas, Hungary',
            'year_from' => 2019,
            'year_to' => 2021
        ]);

        CvEntry::create([
            'category_id' => 2,
            'title' =>'Production Support intern',
            'company' =>'Robert Bosch Elektronika Ltd.',
            'location' =>'Hatvan, Hungary',
            'year_from' => 2018,
            'year_to' => 2019
        ]);

        CvEntry::create([
            'category_id' => 2,
            'title' =>'Software Developer intern',
            'company' =>'Qnszt Ltd.',
            'location' =>'Eger, Hungary',
            'year_from' => 2018,
            'year_to' => 2018
        ]);

        CvEntry::create([
            'category_id' => 2,
            'title' =>'Maintenance Operative',
            'company' =>'Grange St. Paul`s Hotel',
            'location' =>'London, U.K.',
            'year_from' => 2015,
            'year_to' => 2016
        ]);

        CvEntry::create([
            'category_id' => 2,
            'title' =>'Computer Technician',
            'company' =>'Home Computer Store',
            'location' =>'Heves, Hungary',
            'year_from' => 2006,
            'year_to' => 2008
        ]);

        CvEntry::create([
            'category_id' => 3,
            'title' =>'Angular 10 Course: Build Angular Apps',
            'company' =>'Udemy'
        ]);

        CvEntry::create([
            'category_id' => 3,
            'title' =>'React JS Course: The Beginners Guide',
            'company' =>'Udemy'
        ]);

        CvEntry::create([
            'category_id' => 3,
            'title' =>'HTML, JavaScript, & Bootstrap - Certification Course',
            'company' =>'Udemy'
        ]);

        CvEntry::create([
            'category_id' => 3,
            'title' =>'Network and Operating System Ethical Hacking Course',
            'company' =>'Udemy'
        ]);

        CvEntry::create([
            'category_id' => 3,
            'title' =>'Scanning Cyber Security Hacking Course',
            'company' =>'Udemy'
        ]);

        CvEntry::create([
            'category_id' => 3,
            'title' =>'Create a Members Only Blog using PHP, MySQL & AJAX',
            'company' =>'Udemy'
        ]);

        CvEntry::create([
            'category_id' => 3,
            'title' =>'PIC Microcontroller meets LabVIEW',
            'company' =>'Udemy'
        ]);
    }
}
