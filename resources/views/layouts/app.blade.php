<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Jaya Karya Konstruksi</title>
</head>

<body>
    @include('layouts.nav-public')
    @yield('content')
</body>

</html>
