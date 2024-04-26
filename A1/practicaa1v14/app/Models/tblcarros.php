<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblcarros extends Model
{
    protected $fillable=[
        'marca',
        'modelo',
        'placa'
    ];
    use HasFactory;
}
