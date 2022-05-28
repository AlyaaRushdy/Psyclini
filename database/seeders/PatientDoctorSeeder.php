<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\patientDoctor::create([
            'appointment' => '2022-07-06 17:30',
            'doctor_id' => '1',
            'patient_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\patientDoctor::create([
            'appointment' => '2022-05-09 4:00',
            'doctor_id' => '2',
            'patient_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
