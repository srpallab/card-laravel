<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Card') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
    href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
      <main class="md:flex flex-col md:flex-row">
        {{ $slot }}
      </main>
    </div>
  </body>
</html>
