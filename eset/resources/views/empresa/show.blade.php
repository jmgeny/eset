
@extends('layouts.app')

@section('title', 'Empresa')

@section('content')

 <div class="container">   
<div class="row">
  <div class="col-md-6 offset-md-3"> 
    <h4>La edad promedio de la empresa {{ $empresa->nombre }} es de {{ $promedioEdad }}</h4>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Pusto</th>
            <th scope="col">Herramienta</th>

          </tr>
        </thead>
        <tbody>

         @foreach ($empresa->empleados as $empleado)
         <tr>
           <th scope="row">{{ $empleado->id }}</th>
           <td>{{ $empleado->nombre }}</td>
           <td>{{ $empleado->apellido }}</td>
           <td>{{ $empleado->edad }}</td>
           <td>{{ $empleado->puesto }}</td>
           <td>{{ $empleado->herramienta }}</td>

         </tr>
         @endforeach

       </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('agregar', $empresa->id) }}">Agregar Empleado</a>
  </div>
</div>
</div>

@endsection