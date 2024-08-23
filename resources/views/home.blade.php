@extends('Layouts.app')
@section('content')
@section('title')
    Laravel 12
@endsection
<div class="max-w-4xl mx-auto px-4">
    <x-alert2 type="info" class="mb-4">
        <x-slot name="title">
            Titulo de la alerta
        </x-slot>
             Contenido de la alerta
        </x-alert2>
   </div>
   <p>Hola Mundo</p>
@endsection
   

