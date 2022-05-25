<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'password'=>'1988812MM',
            'email'=>'marwamohammad88@gmail.com',
            ]);
        \App\Models\Secretary::create([
            'ssn'=>'91128018',
            'name'=>'Aliaa Ahmed',
            'birth_date'=>'1991-1-29',
            'phone'=>'011122222',
            'password'=>'1991128AA',
            'email'=>'aliaaahmed91@gmail.com',
            ]);
    }
}
