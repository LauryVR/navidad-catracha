<!doctype html>
<html lang="es">
    <head>
        @include('layouts.header')
        @include('layouts.styles')
    </head>
<body>
    {{-- Tag de Google Analitycs --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150262918-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-150262918-2');
        </script>
    {{-- /Tag de Google Analitycs --}}

    @include('layouts.navbar')

    {{-- Contenido Dinamico --}}
    @yield('content')

    @include('layouts.footer')
    @include('layouts.scripts')
  </body>
</html>