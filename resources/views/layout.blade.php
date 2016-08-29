<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <script src="{{ elixir('js/all.js') }}"></script>
    @yield('header')

</head>
<body>
<div class="container">
    @yield('content')
</div>


@yield('footer')
</body>
</html>
