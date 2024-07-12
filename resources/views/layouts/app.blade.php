<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perla del Caribe')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    {{-- fonteawesome --}}
    {{-- tipografia --}}

    @stack('fond')

</head>
<body>

    <header></header>

    @yield('content')
    
    <footer></footer>

</body>
</html>