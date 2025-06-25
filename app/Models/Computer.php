<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    /** @use HasFactory<\Database\Factories\ComputerFactory> */
    use HasFactory;
    protected $fillable = ['number' , 'brand' ];
    protected $allowIncluded = ['serial', 'modelo'];
    protected $allowFilter = ['id', 'number'];
    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }
}
