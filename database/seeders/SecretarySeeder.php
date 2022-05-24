<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SecretarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Secretary::create([
            'ssn'=>'88812017',
            'name'=>'Marwa Mohammad',
            'birth_date'=>'1988-8-17',
            'phone'=>'011999999',
            'password'=>Hash::make('1988812MM'),
            'email'=>'marwamohammad88@gmail.com',
            ]);
        \App\Models\Secretary::create([
            'ssn'=>'91128018',
            'name'=>'Aliaa Ahmed',
            'birth_date'=>'1991-1-29',
            'phone'=>'011122222',
            'password'=>Hash::make('1991128AA'),
            'email'=>'aliaaahmed91@gmail.com',
            ]);
    }
}
