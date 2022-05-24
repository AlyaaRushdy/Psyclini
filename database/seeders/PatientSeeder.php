<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Patient::create([
            'id'=>'1',
            'name'=>'Amal Mohammad',
            'birth_date'=>'1980-06-17',
            'phone'=>'011133333',
            'password'=>Hash::make('1980176AM'),
            'email'=>'amalmohammad80@gmail.com',
              ]);
        \App\Models\Patient::create([
            'id'=>'2',
            'name'=>'Fatma Ali',
            'birth_date'=>'1980-07-16',
            'phone'=>'011144444',
            'password'=>Hash::make('1980167FA'),
            'email'=>'fatmaali80@gmail.com',
              ]);
        \App\Models\Patient::create([
            'id'=>'3',
            'name'=>'Samir Said',
            'birth_date'=>'1980-06-15',
            'phone'=>'011155555',
            'password'=>Hash::make('1980156SS'),
            'email'=>'samirsaid80@gmail.com',
            ]);
    }
}
