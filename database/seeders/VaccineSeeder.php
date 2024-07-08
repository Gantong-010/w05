<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccines')->insert([
            ["vaccine" => "Pfizer-BioNTech"],
            ["vaccine" => "Moderna"],
            ["vaccine" => "Johnson & Johnson"],
            ["vaccine" => "AstraZeneca"],
            ["vaccine" => "Sinopharm"],
            ["vaccine" => "Sinovac"],
            ["vaccine" => "Sputnik V"],
            ["vaccine" => "Novavax"],
            ["vaccine" => "Covaxin"],
            ["vaccine" => "EpiVacCorona"],
        ]);
    }
}
