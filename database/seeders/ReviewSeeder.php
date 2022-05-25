<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Review::create([
            'review'=>'He is a great person',
            'star'=>'1',
            'patient_id'=>'1',
			'doctor_ssn'=>'88811013',
            ]);
\App\Models\Review::create([
            'review'=>'He is a great person',
            'star'=>'2',
            'patient_id'=>'1',
			'doctor_ssn'=>'8524001',
            ]);
\App\Models\Review::create([
            'review'=>'Thanks Doctor for your time and for listening to me. Best regards.',
            'star'=>'3',
            'patient_id'=>'1',
			'doctor_ssn'=>'8542002',
            ]);
\App\Models\Review::create([
            'review'=>'He is a great person',
            'star'=>'4',
            'patient_id'=>'2',
			'doctor_ssn'=>'8542002',
            ]);
\App\Models\Review::create([
            'review'=>'Thanks ,Best regards.',
            'star'=>'5',
            'patient_id'=>'2',
			'doctor_ssn'=>'8524001',
            ]);
\App\Models\Review::create([
            'review'=>'Thank you',
            'star'=>'1',
            'patient_id'=>'2',
			'doctor_ssn'=>'8256004',
            ]);
\App\Models\Review::create([
            'review'=>'he is not bad',
            'star'=>'3',
            'patient_id'=>'3',
			'doctor_ssn'=>'8524001',
            ]);
\App\Models\Review::create([
            'review'=>'i feel much better thanks to you',
            'star'=>'4',
            'patient_id'=>'3',
			'doctor_ssn'=>'8256004',
            ]);
\App\Models\Review::create([
            'review'=>'i feel much better thanks to you',
            'star'=>'2',
            'patient_id'=>'3',
			'doctor_ssn'=>'8179005',
            ]);
\App\Models\Review::create([
            'review'=>'مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق',
            'star'=>'5',
            'patient_id'=>'3',
			'doctor_ssn'=>'8197006',
            ]);
\App\Models\Review::create([
            'review'=>'مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق',
            'star'=>'5',
            'patient_id'=>'3',
			'doctor_ssn'=>'8197007',
            ]);
\App\Models\Review::create([
            'review'=>'He is a great person',
            'star'=>'5',
            'patient_id'=>'1',
			'doctor_ssn'=>'75890011',
            ]);
\App\Models\Review::create([
            'review'=>'مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق',
            'star'=>'5',
            'patient_id'=>'2',
			'doctor_ssn'=>'75890011',
            ]);
    }
}
