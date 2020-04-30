
@extends('layouts.app')

@section('title', 'Empleado')

@section('content')

<div class="container">
  <div class="row">
  <div class="col-md-6 offset-md-3"> 
  <div>
    <form>
      <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="apellido" class="form-control float-right" 
        placeholder="Buscar por Apellido"
        value="{{ request()->get('apellido') }}"> 
        <div class="input-group-append">
          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
    <a  class="btn btn-primary float-right" href="{{ route('empleado.create') }}">Cargar</a>
  </div>
 
	<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">edad</th>
        <th scope="col">Empresa</th>
        <th scope="col">Puesto</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
     @foreach ($empleados as $empleado)
     <tr>
       <th scope="row">{{ $empleado->id }}</th>
       <td>{{ $empleado->nombre }}</td>
       <td>{{ $empleado->apellido }}</td>
       <td>{{ $empleado->edad }}</td>
       <td>{{ $empleado->empresa->nombre }}</td>
       <td>{{ $empleado->puesto }}</td>
       <td>{{ $empleado->herramienta }}</td>       
     </tr>
     @endforeach
   </tbody>
 </table>
</div>

</div>
</div>

@endsection