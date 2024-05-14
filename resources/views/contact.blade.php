@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Contactanos</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf <!-- CSRF token is necessary for security -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection