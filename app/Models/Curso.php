<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Curso extends Model
{
    
    static $rules = [
		'idCurso' => 'required',
        'nombreCurso' => 'required',
		'grado' => 'required',
		'descripcion' => 'required',
		'profesorEncargado' => 'required',
		'cupo' => 'required',
		'fechaInicio' => 'required',
        'fechaFin' => 'required',
    ];

    protected $perPage = 20;

    
    protected $fillable = [
        'nombreCurso',
        'idCurso',
        'grado',
        'descripcion',
        'profesorEncargado',
        'cupo',
        'fechaInicio',
        'fechaInicio',
        'fechaFin'
    ];


    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function lugars()
    // {
    //     return $this->hasMany('App\Models\Lugar', 'evento_id', 'id');
    // }
    
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasOne
    //  */
    // public function tipoevento()
    // {
    //     return $this->hasOne('App\Models\Tipoevento', 'id', 'tipoeventos_id');
    // }
    

}
