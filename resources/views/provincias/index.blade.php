@extends('layout')

@section('content')
    <h1>Lista de Provincias</h1>
    <form action="{{ route('provincias.index') }}" method="GET">
        <div class="form-group">
            <input type="text" class="form-control" name="search" placeholder="Buscar Provincia">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    <ul class="list-group mt-3">
        @foreach ($provincias as $provincia)
            <li class="list-group-item">{{ $provincia->nombre }}</li>
        @endforeach
    </ul>
    <a href="{{ route('provincias.create') }}" class="btn btn-success mt-3">Agregar Provincia</a>
@endsection
