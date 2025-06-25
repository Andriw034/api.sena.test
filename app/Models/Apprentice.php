<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    /** @use HasFactory<\Database\Factories\AprenticeFactory> */
    use HasFactory;
    protected $fillable =['name','email','call_number', 'course_id', 'computer_id'];

    public function computers(){
        return $this->belongsTo(Computer::class);
    }
}

