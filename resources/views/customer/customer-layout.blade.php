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
        {{-- <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}
    </head>
    <body>
        @include('customer.customer-header')
            @yield('customer-welcome-content')
            @yield('customer-profile')
            @yield('edit-profile-form')
            @yield('bus-list')
            @yield('booking-form')
        @include('customer.customer-footer')
    </body>
</html>