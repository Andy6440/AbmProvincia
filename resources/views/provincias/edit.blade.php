@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Provincia</h2>

        <form action="{{ route('provincias.update', $provincia) }}" class="row g-3" method="POST">
            @csrf
            @method('PUT')
            @include('forms.provincia', ['buttonText' => 'Editar'])

        </form>        
    </div>
@endsection
