<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gluon Ticketing System</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/loading.css">
</head>

<body>
    <div class="d-flex justify-content-center">
        <img src="assets/img/gluonLogo.png" style="width: 30%;">

    </div>
    <div class="loader-line"></div>
    <div class="container">
        <div class="d-flex justify-content-center">
            @if (Route::has('login'))
            <div class="col-xs-3">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                <a href="{{ route('login') }}"><button type="button" class="btn-block btn btn-outline-success">LOGIN</button></a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"><button type="button" class="btn-block btn btn-outline-danger">REGISTER</button></a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>