@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <h1 class="my-4">Provincias</h1>
            
                <a href="{{ route('provincias.create') }}" class="btn btn-primary mb-3">Crear Provincia</a>
            
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th >ID</th>
                                <th >Nombre</th>
                                <th >Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($provincias as $provincia)
                            <tr class="text-center">
                                <td>{{ $provincia->id_provincia }}</td>
                                <td>{{ $provincia->descripcion_provincia }}</td>
                                <td>
                                    <a href="{{ route('provincias.edit', $provincia) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('provincias.destroy', $provincia) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
                {{ $provincias->links() }}
            </div>
        </div>
    </div>
</div>
@endsection