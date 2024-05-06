<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    protected $fillable=[
        'nombre',
        'codigo',
        'carrera',
        'idmateria'
    ];

    public function materias(){
        return $this->belongsTo(materias::class,'id');
    }

    use HasFactory;
}
