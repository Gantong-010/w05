<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';
    protected $fillable = 
    [
        'program_th', 
        'program_en', 
        'grad_year' ,
        'prg_fac_id' 
    ];

    public function faculties()
    {
        return $this->belongsTo(Faculties::class, 'prg_fac_id');
    }
}
