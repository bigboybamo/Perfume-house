<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perfume Place</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
    <style>
body {
  background-image: url("public/img/pexels-elly-fairytale-3865680.jpg");
}
</style>
</head>

<body>
<h1 class="title m-b-md">Perfume Place</h1>
    @yield('content')


    
    <footer>
        Copyright 2020 Perfume place
    </footer>
</body>

</html>