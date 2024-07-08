<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine_record extends Model
{
    use HasFactory;

    protected $table = 'vaccine_records';
    protected $fillable = 
    [
        'std_id',
        'vac_id',
        'vaccined_date'
    ];

    public function vaccines()
    {
        return $this->belongsTo(Vaccine::class, 'vac_id');
    }
    public function students()
    {
        return $this->belongsTo(Student::class, 'std_id');
    }
}
