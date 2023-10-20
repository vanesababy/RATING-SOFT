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
  'enlace' => 'required',
  'idPersona' => 'required',
  'idTipoDocumento' => 'required',
  ];

  protected $perPage = 20;

  
  protected $fillable = [
    'nombre',
    'enlace',
    'idPersona',
    'idTipoDocumento'
  ];
}
