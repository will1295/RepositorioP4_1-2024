<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblmaterias extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre'
    ];

    public function docente(){
        return $this->belongsTo(tbldocentes::class);
    }
}
