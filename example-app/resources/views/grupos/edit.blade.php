@extends('layouts.app')

@section('content')
<h1>Editar grupo</h1>
<form method="POST" action="{{ route('grupos.update', $grupo->id) }}">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $grupo->nombre }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $grupo->descripcion }}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Modificar</button>
            <a href="{{ route('grupos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</form>
@endSection