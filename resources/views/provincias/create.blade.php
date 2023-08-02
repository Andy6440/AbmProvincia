@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Provincia</h2>

    <form action="{{ route('provincias.store') }}" method="POST">
        @csrf

        @include('forms.provincia', ['buttonText' => 'Crear'])

    </form>
</div>
@endsection
