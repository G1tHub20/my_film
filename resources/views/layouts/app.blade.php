<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
  <!-- ファビコン -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" type="image/png" href="./images/apple-touch-icon.png" sizes="192x192">
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="bg-white shadow">
    </header>

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
</body>

</html>
