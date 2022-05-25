<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    \App\Models\Article::create([
            'doctor_ssn'=>'8524001',
            'path'=>'Mohammad Adel',
            'speciality'=>'child and Adolescence Disorders',
            'body'=>'4.7',
            'img' => 'people pic 2.jpg',
            'title'=>'1985-02-04',
            ]);
			    \App\Models\Article::create([
            'doctor_ssn'=>'8524001',
            'path'=>'Mohammad Adel',
            'speciality'=>'child and Adolescence Disorders',
            'body'=>'4.7',
            'img' => 'people pic 2.jpg',
            'title'=>'1985-02-04',
            ]);
			    \App\Models\Article::create([
            'doctor_ssn'=>'8524001',
            'path'=>'Mohammad Adel',
            'speciality'=>'child and Adolescence Disorders',
            'body'=>'4.7',
            'img' => 'people pic 2.jpg',
            'title'=>'1985-02-04',
            ]);
			    \App\Models\Article::create([
            'doctor_ssn'=>'8524001',
            'path'=>'Mohammad Adel',
            'speciality'=>'child and Adolescence Disorders',
            'body'=>'4.7',
            'img' => 'people pic 2.jpg',
            'title'=>'1985-02-04',
            ]);
	}
}
