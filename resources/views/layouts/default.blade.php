<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Meu Título')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
    <h1>Meu Layout</h1>

    {{-- @yield('sidebar', 'sidebar') --}}
    @section('sidebar')
        <div>
            <nav>
                sidebar
            </nav>
        </div>
    @show

    @yield('content')
    <script src="{{ '/js/script.js' }}"></script>
    @stack('scripts')
</body>
</html>