<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::create([
            'body'=>'This is first Post',
            'speciality'=>'life coach',
             'image' => '1649750261.png',
             'patient_id'=>'1',

            ]);
        \App\Models\Post::create([
            'body'=>'i need a psychatry',
            'speciality'=>'Child and Adolescence Disorders',
             'image' => '1649750261.png',
             'patient_id'=>'2',

            ]);
        \App\Models\Post::create([
            'body'=>'This is third Post',
            'speciality'=>'General Psychiatry',
             'image' => 'banner.png',
             'patient_id'=>'3',

            ]);
        \App\Models\Post::create([
            'body'=>'This is first Post',
            'speciality'=>'Geriatric Psychiatry',
             'image' => 'banner.png',
             'patient_id'=>'3',

            ]);
        \App\Models\Post::create([
            'body'=>'This is first Post',
            'speciality'=>'Psychiatry of Intellectual Disability (PID)',
             'image' => 'banner.png',
             'patient_id'=>'2',

            ]);
        \App\Models\Post::create([
            'body'=>'This is first Post',
            'speciality'=>'Marital and Family Relations',
             'image' => 'banner.png',
             'patient_id'=>'1',

            ]);
        \App\Models\Post::create([
            'body'=>'This is first Post',
            'speciality'=>'life coach',
             'image' => 'banner.png',
             'patient_id'=>'2',

            ]);
        \App\Models\Post::create([
            'body'=>'This is first Post',
            'speciality'=>'Addiction',
             'image' => 'banner.png',
             'patient_id'=>'2',

            ]);
        \App\Models\Post::create([
            'body'=>'This is first Post',
            'speciality'=>'Forensic Psychiatry',
             'image' => 'banner.png',
             'patient_id'=>'3',

            ]);
        \App\Models\Post::create([
            'body'=>'a new post',
            'speciality'=>'Forensic Psychiatry',
            'patient_id'=>'3',
            ]);
        }
}
