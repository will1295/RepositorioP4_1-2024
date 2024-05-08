<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefonos extends Model
{

    protected $fillable =[
        'numero',
        'tipo',
        'idusuario'
    ];

    public function usuarios(){
        return $this->belongsTo(usuarios::class,'idusuario');
    }

    use HasFactory;
}
