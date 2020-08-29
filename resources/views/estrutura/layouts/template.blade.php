<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Todos arquivos CSS expecificos podem serem colocados aqui --}}
    @stack('styles')
</head>
<body>

    @yield('content')

    {{-- Todos arquivos JS expecificos podem serem colocados aqui --}}
    @stack('scripts')
</body>
</html>