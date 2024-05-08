<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{

    protected $fillable=[
        'nombre',
        'telcont'
    ];

    use HasFactory;

    public function productos(){
        return $this->hasMany(productos::class,'idproveedor');
    }
}
