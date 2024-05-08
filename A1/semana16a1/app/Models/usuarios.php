<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class usuarios extends Model
{

    protected $fillable =[
        'nombre',
        'dui',
        'direccion'
    ];

    use HasFactory;

    public function telefonos():HasOne{
        return $this->hasOne(telefonos::class,'id');
    }
}
