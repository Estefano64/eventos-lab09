@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">
                    <h1 class="text-center">Eventos</h1>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <a href="{{ route('events.create') }}" class="btn btn-danger">Crear evento</a>
                    </div>
                    @foreach($events as $event)
                    <div class="card bg-dark text-white mb-3">
                        <div class="card-body">
                            <h2 class="card-title">{{ $event->name }}</h2>
                            <p class="card-text">Ubicación: {{ $event->location }}</p>
                            <p class="card-text">Fecha: {{ $event->date }}</p>
                            <div class="d-flex justify-content-end">
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este evento?')">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection