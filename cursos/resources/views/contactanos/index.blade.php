@extends('layouts.plantilla')

@section('title','Contactanos')

@section('content')
    <h1>Bienvenido a Contáctanos</h1>

    <form action="" method="post">
        <div class="formInput">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div class="formInput">
            <label for="email">Correo:</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="formInput">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5"></textarea>
        </div>
        <div class="formInput">
            <button type="submit">Enviar Correo</button>
        </div>

    </form>
    
@endsection