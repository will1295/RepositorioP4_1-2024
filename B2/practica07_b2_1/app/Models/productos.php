<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{

    protected $fillable=[
        'nombre',
        'stock',
        'precio',
        'idproveedor'
    ];

    public function proveedores(){
        return $this->belongsTo(proveedores::class,'id');
    }

    use HasFactory;
}
