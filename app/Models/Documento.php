<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{

    use HasFactory;
    protected $table = 'documento';

    static $rules = [
		'nombre' => 'required',
        'descripcion' => 'required',
    ];

    protected $perPage = 20;

    
    protected $fillable = [
      'nombre',
      'descripcion',
    ];
}
