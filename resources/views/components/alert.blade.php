@props(['type' => 'danger'])

@php
    switch ($type) {
      case 'info':

        $class = 'text-blue-800 bg-blue-200 dark:bg-gray-800 dark:text-blue-400';

        break;
        
        case 'danger':
        
        $class = 'text-green-800 bg-green-200 dark:bg-gray-800 dark:text-green-400';

        break;
        
        case 'dark':
        
        $class ='text-gray-800 bg-gray-200 dark:bg-gray-800 dark:text-gray-300';

        break;

        
      
      default:

         $class ='text-gray-800 bg-gray-200 dark:bg-gray-800 dark:text-gray-300';

        break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }}  role="alert">
  <span class="font-medium"> {{$muni?? 'Titulo' }} </span> {{$slot}}


</div> 

