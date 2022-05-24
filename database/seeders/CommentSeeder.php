<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '2',
            'patient_id'=>'1'
            ]);
        \App\Models\Comment::create([
            'body'=>'i need a psychatry',
            'post_id' => '2',
             'patient_id'=>'2',
            ]);
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '3',
             'patient_id'=>'3',
            ]);
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '4',
             'patient_id'=>'3',
            ]);
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '3',
             'patient_id'=>'2',
            ]);
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '2',
            'patient_id'=>'1'
            ]);
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '5',
             'patient_id'=>'2',
            ]);
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '7',
             'patient_id'=>'2',
            ]);
        \App\Models\Comment::create([
            'body'=>'This is first Post',
            'post_id' => '7',
             'patient_id'=>'3',
            ]);
        \App\Models\Comment::create([
            'body'=>'a new post',
            'post_id' => '1',
            'patient_id'=> '3'
            ]);
    }
}
