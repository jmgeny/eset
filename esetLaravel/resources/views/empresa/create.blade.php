
@extends('layouts.app')

@section('title', 'Empresa Crear')

@section('content')
<div class="container">   

       <form action="{{ route('empresa.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
      </form> 





</div>
@endsection