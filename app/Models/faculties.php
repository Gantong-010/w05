<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    use HasFactory;
    /*ตรงนี้ต้องใส่เหมือนกับ ชื่อตารางในฐานข้อมูล */
    protected $table = 'faculties';
    protected $fillable = 
    [
        'faculty_th',
        'faculty_en'
    ];
}
