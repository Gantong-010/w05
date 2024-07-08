<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            ['prg_fac_id' => 1, 'program_th' => 'วิศวกรรมศาสตร์', 'program_en' => 'Engineering', 'grad_year' => 4],
            ['prg_fac_id' => 2, 'program_th' => 'เภสัชศาสตร์', 'program_en' => 'Pharmacy', 'grad_year' => 5],
            ['prg_fac_id' => 3, 'program_th' => 'ศิลปกรรม', 'program_en' => 'Fine Arts', 'grad_year' => 4],
            ['prg_fac_id' => 4, 'program_th' => 'การสื่อสารมวลชน', 'program_en' => 'Mass Communication', 'grad_year' => 4],
            ['prg_fac_id' => 5, 'program_th' => 'ทันตแพทยศาสตร์', 'program_en' => 'Dentistry', 'grad_year' => 6],
            ['prg_fac_id' => 6, 'program_th' => 'แพทยศาสตร์', 'program_en' => 'Medicine', 'grad_year' => 6],
            ['prg_fac_id' => 7, 'program_th' => 'วิทยาศาสตร์', 'program_en' => 'Science', 'grad_year' => 4],
            ['prg_fac_id' => 8, 'program_th' => 'ครุศาสตร์', 'program_en' => 'Education', 'grad_year' => 4],
            ['prg_fac_id' => 9, 'program_th' => 'บริหารธุรกิจ', 'program_en' => 'Business Administration', 'grad_year' => 4],
            ['prg_fac_id' => 10, 'program_th' => 'นิติศาสตร์', 'program_en' => 'Law', 'grad_year' => 4],
        ]);
    }
}
