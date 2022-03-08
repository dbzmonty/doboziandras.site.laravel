<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cv_education;

class cv_educationsTableSeeder extends Seeder
{
    public function run()
    {
        cv_education::create([
            'qualification' =>'Software Information Technology',
            'institude' =>'Eszterházy Károly University',
            'location' =>'Eger, Hungary',
            'date_period' =>'2016 - 2019'
        ]);

        cv_education::create([
            'qualification' =>'Cisco CCNA certificate',
            'institude' =>'Eszterházy Károly University',
            'location' =>'Eger, Hungary',
            'date_period' =>'2018'
        ]);

        cv_education::create([
            'qualification' =>'English intermediate level B2 language exam',
            'institude' =>'Langwest',
            'location' =>'Eger, Hungary',
            'date_period' =>'2014 - 2015'
        ]);

        cv_education::create([
            'qualification' =>'Graduation certificate',
            'institude' =>'Balassi Bálint Secondary School',
            'location' =>'Kal, Hungary',
            'date_period' =>'2012 - 2014'
        ]);

        cv_education::create([
            'qualification' =>'Electrician certificate',
            'institude' =>'Wigner Jenő Secondary School',
            'location' =>'Eger, Hungary',
            'date_period' =>'2002 - 2003'
        ]);
    }
}
