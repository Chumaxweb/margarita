@extends('layouts.app')


@section('title')

Margarita

@endsection

@push('fond')
    <style>
        body {
            background-color: rgb(39, 199, 199)
        }
    </style>
@endpush


<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      {{-- <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"> --}}
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">¡Vamos, conoce Margarita!</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Dirección de correo electrónico</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Olvidaste tu contraseña?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciar sesión</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        No eres un miembro?
        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Registrarse</a>
      </p>
    </div>
  </div>





{{-- @push('fond')
     <style>
        body {
            color: rgb(74, 95, 134)
        }
     </style>

@endpush --}}

{{-- @section('content') --}}

{{-- <div class="max-w-2xl mx-auto pc-4"> --}}
    {{-- <h1>Hola, conoce Margarita</h1> --}}

    {{-- <x-alert2 type="danger" class="mb-4">
        <x-slot name="muni">
           Municipio

        </x-slot>
           Lugar
    </x-alert2> --}}

    {{-- <p> Capital </p> --}}

{{-- </div>

@endsection --}}


