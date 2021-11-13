<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=6c6ea9bc-90c7-4296-b72c-b90182922a00&lang=ru_RU" type="text/javascript"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="mt-5 mb-4 text-center">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>
