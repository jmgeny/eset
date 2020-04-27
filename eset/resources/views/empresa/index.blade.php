
@extends('layouts.app')

@section('title', 'Empresa')

@section('content')

 <div class="container">  
 <div class="row">
  <div class="col-md-6 offset-md-3"> 

	<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Empresa</th>
      <th scope="col">Agregar Empleado</th>
      <th scope="col">Listar Empleados</th>
    </tr>
  </thead>
  <tbody>

  	@foreach ($empresas as $empresa)
	    <tr>
	      <th scope="row">{{ $empresa->id }}</th>
	      <td>{{ $empresa->nombre }}</td>
        <td><a class="btn btn-success" href="{{ route('agregar', $empresa->id) }}">Agregar</a></td>
        <td><a class="btn btn-success" href="{{ route('empresa.show', $empresa->id) }}">Listar</a></td>
        </td>
	    </tr>
  	@endforeach

  </tbody>
</table>
</div>
</div>

</div>

@endsection