<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Progetto') }}</title>

        <!--  includeo tutte le risorse che mi serviranno in tutte le pagine-->
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Scripts -->
        <script src="/js/app.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- includiamo il layout della barra di navigazione -->
            @include('layouts.navigation')

            <!-- al posto di slot metteremo tutto quello racciuso tra x-app-layout -->
            <main>
                {{ $slot }}
            </main>
            <x-footer></x-footer>
        </div>
    </body>
</html>
