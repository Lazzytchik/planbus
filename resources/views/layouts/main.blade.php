<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="mt-5 mb-4 text-center">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>
