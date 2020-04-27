<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Empleado;

class OtroControlador extends Controller
{
    public function agregar($id)
    {

    	$empresa = Empresa::findOrFail($id); 

    	$empresas[0] = $empresa;

    	return view('empleado.create',compact('empresas'));
    }
}
