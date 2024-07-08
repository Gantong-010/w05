<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = 
    [  
        'sid', 
        'fname', 
        'lname' ,
        'std_prg_id' 
    ];
    public function program()
    {
        return $this->belongsTo(Program::class, 'std_prg_id');
    }
}
