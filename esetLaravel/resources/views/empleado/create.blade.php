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
          <label for="empresa">Empresas</label>
          <select class="form-control" id="empresa" name="empresa_id">

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
            <option value="">Elejir</option>
            <option value="programador">Programador</option>
            <option value="disenador">Diseñador</option>
          </select>
        </div>

<div id="programador">
        <div class="form-group">
          <label for="programador">Progamador</label>
          <select class="form-control" name="programador">
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value="NET">NET</option>
          </select>
        </div>
</div>        

<div id="disenador">
        <div class="form-group">
          <label for="disenador">Diseñador</label>
          <select class="form-control" name="disenador">
            <option value="web">Web</option>
            <option value="diseño">Diseño</option>
          </select>
        </div>        
</div>        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>

@endsection