<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';

    protected $fillable = [
        "identificacion",
        "nombre1",
        "nombre2",
        "apellido1",
        "apellido2",
        "fechaNac",
        "idCiudadNac",
        "idCiudad",
        "direccion",
        "email",
        "idTipoIdentificacion",
        "telefonoFijo",
        "celular",
        "perfil",
        "sexo",
        "rh",
        "rutaFoto",
    ];
    
    public function usuario(){
        return $this->belongsTo(User::class, 'idPersona');
    }
}
