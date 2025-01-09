<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/vendor/tabler/webfont/tabler-icons.css')
    <title>@yield('title')</title>
</head>
<body>
  
    @yield('layout')
    
    @vite('resources/js/app.js')
</body>
</html>