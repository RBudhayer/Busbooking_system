@extends('front-layout')
@section('welcome-content')
    {{-- <div class="flex-center position-ref full-height"> --}}
        {{-- @if ( Route::has('login') )
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/login') }}">View Bus</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif --}}
        <br><br><br>
        @if(auth()->check())
                    {{ 'Welcome' }} {{ auth()->user()->fname }}
                    
                @endif

        <div class="content">
            <div class="title m-b-md">
                @if ( session('Status') ) 
                <br><br><br>
                    <strong></strong><p style="text-align:center">{{ session('Status') }}</p></strong>
                    <br><br><br> <br><br><br><br><br><br> <br><br>
                @else
                    @include('pageOne')
                @endif
            </div>
        </div>
@endsection