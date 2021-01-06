<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos  -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- header  -->
    @include('layouts.partials.header')
    <!-- contenido principal  -->
    @yield('content')
    <!-- footer  -->
    @include('layouts.partials.footer')
    <!-- script  -->
</body>
</html>