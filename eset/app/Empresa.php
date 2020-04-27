<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
        protected $fillable = [
        'nombre',
    ];

    public function empleados()
    {
    	return $this->hasMany(Empleado::class);
    }
}
