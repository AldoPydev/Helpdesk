<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//  Modelo de la clase ticket
class ticket extends Model
{
    // Indicar la tabla con cual se relaciona 
    protected $table = 'tickets';

    protected $fillable = [
        // Campos de la tabla requeridos en orden
        'created_at',
        'empleado',
        'alumno',
        'medio',
        'seccion',
        'solicitud',
        'categoria',
        'area',
        'responsable',
        'atendido',
        'descripcion',
        'solicitud',
        'evidencia',
        'ipdated_at',
    ];
}
