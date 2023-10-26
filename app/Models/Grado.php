<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $table = 'grado';
    protected $perPage = 20;
    protected $fillable = [
        'grado',
        'descripcion',
        'fechaInicio',
        'fechaFin'
    ];

    static $rules = [
        'grado' => 'required',
        'descripcion' => 'required',
        'fechaInicio' =>'required',
        'fechaFin' =>'required'
    ];
}
