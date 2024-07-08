<?php

namespace App\Http\Controllers;
use App\Models\VaccineRecord;
use App\Models\Vaccine;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;


class VaccineYearChartController extends Controller
{
    public function index(){
        $vaccineCounts = DB::table('vaccine_records')
            ->select(DB::raw('count(*) as vaccine_count'),
                DB::raw('monthname(vaccined_date) as monthen'))
                ->join('vaccines', 'vaccine_records.vac_id', '=', 'vaccines.id') 
                ->whereYear('vaccined_date', 2023) 
                ->groupBy(DB::raw('monthname(vaccined_date)')) 
                ->orderBy(DB::raw('month(vaccined_date)')) 
                ->pluck('vaccine_count','monthen');
        $labels = $vaccineCounts->keys();
        $data = $vaccineCounts->values();
        return view('vaccine.vaccine_year_chart',compact('labels','data'));
    }
}
