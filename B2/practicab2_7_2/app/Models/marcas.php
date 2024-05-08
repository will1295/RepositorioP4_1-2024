<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
    protected $table = "marcas";

    protected $fillable=[
        'nombre',
        'sede'
    ];

    public function carro(){
        return $this->hasMany(carro::class,'idmarca');
    }

    use HasFactory;
}
