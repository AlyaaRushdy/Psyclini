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
            'body'=>' Do not give up',
            'speciality'=>'life coach',
            'image' => '1649750261.png',
            'patient_id'=>'1',

            ]);
        \App\Models\Post::create([
            'body'=>'i finally got better and i wanted to share that with all of you',
            'speciality'=>'life coach',
            'image' => '1649750261.png',
            'patient_id'=>'3',
    
            ]);
        \App\Models\Post::create([
            'body'=>'i need a psychatry',
            'speciality'=>'Child and Adolescence Disorders',
            'image' => '1649750261.png',
            'patient_id'=>'2',

            ]);
        \App\Models\Post::create([
            'body'=>'Is the therapy really working ?',
            'speciality'=>'General Psychiatry',
            'image' => 'banner.png',
            'patient_id'=>'3',

            ]);
        \App\Models\Post::create([
            'body'=>'any one want to share thier story ?',
            'speciality'=>'Geriatric Psychiatry',
            'image' => 'doctors.png',
            'patient_id'=>'1',

            ]);
        \App\Models\Post::create([
            'body'=>'Are patients treated with care ?',
            'speciality'=>'Psychiatry of Intellectual Disability (PID)',
            'image' => 'banner.png',
            'patient_id'=>'2',

            ]);
        \App\Models\Post::create([
            'body'=>'I recommend those books for you (book1,book2,...)',
            'speciality'=>'Marital and Family Relations',
            'image' => 'test4.jpg',
            'patient_id'=>'3',
            ]);
        \App\Models\Post::create([
            'body'=>'It is easy to give up but you have to fight ',
            'speciality'=>'Addiction',
            'image' => 'doctors.png',
            'patient_id'=>'2',

            ]);
        \App\Models\Post::create([
            'body'=>'Many crimes are related to the mental health ',
            'speciality'=>'Forensic Psychiatry',
            'image' => 'banner.png',
            'patient_id'=>'3',

            ]);
        }
}