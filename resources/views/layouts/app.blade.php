<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Livewire</title>

  <!-- styles -->
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  @livewireStyles
</head>

<body>

  <x-header></x-header>
  @yield('content')

  <!-- scripts -->
  @livewireScripts
  <script src="{{mix('js/app.js')}}" data-turbolinks-suppress-warning></script>
</body>

</html>