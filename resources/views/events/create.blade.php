@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-black my-4">Crear Evento</h1>
    <form action="{{ route('events.store') }}" method="POST" class="bg-dark p-4 rounded shadow">
        @csrf
        <div class="form-group">
            <label for="name" class="text-white">Nombre del Evento</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="location" class="text-white">Ubicación</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="date" class="text-white">Fecha y Hora</label>
            <input type="datetime-local" class="form-control" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-danger">Crear</button>
    </form>
</div>
@endsection