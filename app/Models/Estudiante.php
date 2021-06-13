<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table='estudiante';
    public $timestamps=false;
    protected $fillable=[
        'id_estudiante', 'nombre_estudiante', 'apellido_estudiante', 'fecha_nacimiento_estudiante','edad_estudiante','grado_estudiante','seccion_estudiante','ciclo_escolar_estudiante', 'id_genero'

    ];

    protected $primaryKey='id_estudiante';
}
