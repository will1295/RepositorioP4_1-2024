<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $table = "carro";
    
    protected $fillable=[
        'modelo',
        'color',
        'km',
        'tipoc',
        'idmarca'
    ];

    public function marcas(){
        return $this->belongsTo(marcas::class,'idmarca');
    }

    
    use HasFactory;
}
