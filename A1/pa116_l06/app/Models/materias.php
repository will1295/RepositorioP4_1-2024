<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    protected $fillable=[
        'codigo',
        'nombre',
        'cupos'
    ];

    public function estudiantes(){
        return $this->hasMany(estudiantes::class,'idmateria');

    }

    use HasFactory;
}
