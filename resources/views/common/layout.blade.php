<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TravelCar car-renting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="lx dhb" />
    <meta name="keywords" content="lx dhb" />
    <meta name="author" content="lx dhb" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    @include('common.requireCSS')

</head>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <!-- <div class="page-inner"> -->
    @include('common.header')

    @yield('body')


    @include('common.footer')

</div>

@include('common.requireJs')
@yield('script')
</body>
</html>


