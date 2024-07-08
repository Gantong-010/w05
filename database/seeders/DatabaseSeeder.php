<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FacultiesSeeder::class,
            ProgramSeeder::class,
            StudentSeeder::class,
            VaccineSeeder::class,
            Vaccine_recordSeeder::class
        ]);
    }
}
