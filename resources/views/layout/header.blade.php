<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col text-center"><a href="{{ route('orders') }}" class="text-secondary">Заказы</a></div>
        <div class="col text-center"><a href="{{ route('offers') }}" class="text-secondary">Товары</a></div>
    </div>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>