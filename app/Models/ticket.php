<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table = 'tickets';

    protected $fillable = [
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
