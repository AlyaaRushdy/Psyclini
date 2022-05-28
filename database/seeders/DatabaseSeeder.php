<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Secretary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            DoctorSeeder::class,
            SecretarySeeder::class,
            PatientSeeder::class, 
            PostSeeder::class,      
            CommentSeeder::class,
            AdminSeeder::class,
            AppointmentSeeder::class,
            AppointmenDoctorSeeder::class,
            PatientDoctorSeeder::class,
            ReviewSeeder::class,
        ]);

        // $this->call(PostSeeder::class);
        // $this->call(ArticleSeeder::class);
        // $this->call(TestSeeder::class);
    }
}
