@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Provincia</h2>

    <form action="{{ route('provincias.update', $provincia) }}" method="POST">
        @csrf
        @method('PUT')

        @include('forms.provincia', ['buttonText' => 'Guardar cambios'])

    </form>
</div>
@endsection
