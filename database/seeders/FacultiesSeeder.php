<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faculties')->insert([
            ['faculty_th' => 'คณะวิศวกรรมศาสตร์', 'faculty_en' => 'Faculty of Engineering'],
            ['faculty_th' => 'คณะเภสัชศาสตร์', 'faculty_en' => 'Faculty of Pharmacy'],
            ['faculty_th' => 'คณะศิลปกรรมศาสตร์', 'faculty_en' => 'Faculty of Fine Arts'],
            ['faculty_th' => 'คณะการสื่อสารมวลชน', 'faculty_en' => 'Faculty of Mass Communication'],
            ['faculty_th' => 'คณะทันตแพทยศาสตร์', 'faculty_en' => 'Faculty of Dentistry'],
            ['faculty_th' => 'คณะแพทยศาสตร์', 'faculty_en' => 'Faculty of Medicine'],
            ['faculty_th' => 'คณะวิทยาศาสตร์', 'faculty_en' => 'Faculty of Science'],
            ['faculty_th' => 'คณะครุศาสตร์', 'faculty_en' => 'Faculty of Education'],
            ['faculty_th' => 'คณะบริหารธุรกิจ', 'faculty_en' => 'Faculty of Business Administration'],
            ['faculty_th' => 'คณะนิติศาสตร์', 'faculty_en' => 'Faculty of Law'],
        ]);
    }
}
