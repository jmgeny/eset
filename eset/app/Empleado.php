<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'edad','puesto','herramienta','empresa_id',
    ];

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class);
    }
}
