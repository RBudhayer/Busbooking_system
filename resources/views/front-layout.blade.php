<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Bus Ticketing System</title>

        <link href="{{asset('Bus')}}/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('Bus')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('Bus')}}/css/animate.css">
        <link rel="stylesheet" href="{{asset('Bus')}}/css/overwrite.css">
        <link href="{{asset('Bus')}}/css/animate.min.css" rel="stylesheet"> 
        <link href="{{asset('Bus')}}/css/style.css" rel="stylesheet" />
  </head>
    <body>
        @include('front-header')
            @yield('welcome-content')
            @yield('registration-form')
            @yield('login-form')
        @include('front-footer')
    </body>
</html>