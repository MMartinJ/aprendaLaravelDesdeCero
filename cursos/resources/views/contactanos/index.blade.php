@extends('layouts.plantilla')

@section('title','Contactanos')

@section('content')

@if (session('MsgContacto'))
    <script>alert("{{ session('MsgContacto') }}")</script>
@endif
    <h1>Bienvenido a Contáctanos</h1>

    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf
        <div class="formInput">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
            <br>
            @error('nombre')
                <p><b>{{ $message }}</b></p>
            @enderror
        </div>

        <div class="formInput">
            <label for="email">Correo:</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            <br>
            @error('email')
                <p><b>{{ $message }}</b></p>
            @enderror
        </div>
        <div class="formInput">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5">{{ old('mensaje') }}</textarea>
            <br>
            @error('mensaje')
                <p><b>{{ $message }}</b></p>
            @enderror
        </div>
        <div class="formInput">
            <button type="submit">Enviar Correo</button>
        </div>

    </form>
    
@endsection

<style>
    .formInput{
        width: : 400px;
        margin: 20px 0;
    }
    .formInput label{
        display: block;
        margin-bottom: 10px;
        width: 100%;
    }
    .formInput input,
    .formInput textarea{
        width: 100%;
    }
</style>