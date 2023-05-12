
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS -Ujuzikilimo">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Ujuzikilimo">
    <meta name="robots" content="noindex, nofollow">
    <title>Ujuzikilimo</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://ujuzikilimo.com/images/ujuzi-kilimo-white-logo.png">

    <link rel="stylesheet" href="{{asset('css/ujuzi-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/ujuzi-animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/ujuzi-select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/font/ujuzi-datables.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/font/fontawesome.min.css')}}">
    {{--    <link rel="stylesheet" href="https://ujuzikilimo.com/fontawesome/css/all.min.css">--}}

    <link rel="stylesheet" href="{{asset('css/ujuzi-style.css')}}">
</head>
<body>
{{--<div id="global-loader">--}}
{{--    <div class="whirly-loader"> </div>--}}
{{--</div>--}}

<div class="main-wrapper">
    @include('layouts.header')
    @yield('content')
</div>


<script src="{{asset('js/jquery-360.min.js')}}"></script>

<script src="{{asset('js/feather.min.js')}}"></script>

<script src="{{asset('js/ujuzi-slimscroll.js')}}"></script>

<script src="{{asset('js/ujuzi-datables.min.js')}}"></script>
<script src="{{asset('js/ujuzi-datable.bootstrap4.min.js')}}"></script>

<script src="{{asset('js/ujuzi.boostrap.min.js')}}"></script>

<script src="{{asset('js/ujuzi.select2.min.js')}}"></script>

<script src="{{asset('js/ujuzi-sweetalert2.all.min.js')}}"></script>
<script src="{{asset('js/ujuzi.sweetalert.min.js')}}"></script>

<script src="{{asset('js/ujuzi-script.js')}}"></script>
</body>

</html>
