<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>{{ $kampus }}</h1>
    @yield('content')

    <hr>
&copy; {{ date('y') }} Universitas Multi Data Palembang   
</body>
</html>