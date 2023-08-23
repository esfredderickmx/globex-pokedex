<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', $title ?? 'Título') | Globex Pokédex</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
</head>
<body id="site">
@if(\Illuminate\Support\Facades\Route::currentRouteName()!=='index' && \Illuminate\Support\Facades\Route::currentRouteName()!=='home')
  @include('components.partials.navbar')
@endif
@include('components.partials.navbar-attached')
<main id="site-content">
  @yield('content', $slot ?? '')
</main>
@include('components.partials.footer')
</body>
</html>