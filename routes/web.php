<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Vaccine_recordController;
use App\Http\Controllers\VaccineYearChartController;
use App\Http\Controllers\VaccineController;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function(){
    return "<h1 class='text-center text-red-600 font-bold'>ไม่พบหน้าเว็บ</h1>";
});
/* faculties*/
Route::resource('/faculties',FacultyController::class);
/*program*/
Route::resource('/programs',ProgramController::class);
Route::resource('/students',StudentController::class);
Route::resource('/vaccines',VaccineController::class);
Route::resource('/vaccine_records',Vaccine_recordController::class);

Route::get('/vaccine-year-chart',[VaccineYearChartController::class,'index']);