
@extends('layouts.app')

@section('title', 'Crear empleado')

@section('content')

<div class="container">   
  <div class="row">
    <div class="col-md-6 offset-md-3"> 

      <h3>Guardar Empleado</h3>
      <form action="{{ route('empleado.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
          <label for="puesto">Empresas</label>
          <select class="form-control" id="puesto" name="empresa_id">

            @foreach ($empresas as $empresa)
            <option value="{{ $empresa->id }}" selected>{{ $empresa->nombre }}</option>
            @endforeach

          </select>
        </div>
        

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido">
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="text" class="form-control" name="edad" id="edad">
        </div>
        <div class="form-group">
          <label for="puesto">Puesto</label>
          <select class="form-control" id="puesto" name="puesto">
            <option value="programador" selected>Programador</option>
            <option value="diseñador">Diseñador</option>
          </select>
        </div>

        <div class="form-group">
          <label for="herramienta">Herramienta/Tipo</label>

          <select class="form-control" id="herramienta" name="herramienta">
            <option value="web">Web</option>
            <option value="diseño">Diseño</option>
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value="NET">NET</option>
          </select>

        </div>



        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>

@endsection