@extends('layouts.app')

@section('title')

Videos de Margarita
    
@endsection

@push('fond')
    <style>
        body {
            background-color: rgb(45, 214, 214)
        }
    </style>
@endpush

@push('fond')
     <style>
        body {
            color: rgb(74, 95, 134)
        }
     </style>
    
@endpush

@section('content')

<div class="max-w-2xl mx-auto pc-4">
    {{-- <h1>Hola, conoce Margarita</h1> --}}

    <x-alert2 type="danger" class="mb-4">
        <x-slot name="muni">
           Municipio

        </x-slot>
           Lugar
    </x-alert2>

    <p> Capital </p>
    
</div>
    
@endsection