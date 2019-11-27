<!doctype html>
<html lang="es">
    <head>
        @include('layouts.header')
        @include('layouts.styles')
    </head>
<body>
    @include('layouts.navbar')

    {{-- Contenido Dinamico --}}
    @yield('content')

    @include('layouts.footer')
    @include('layouts.scripts')
  </body>
</html>