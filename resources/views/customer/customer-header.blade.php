<link href="{{asset('Bus')}}/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('Bus')}}/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('Bus')}}/css/animate.css">
<link rel="stylesheet" href="{{asset('Bus')}}/css/overwrite.css">
<link href="{{asset('Bus')}}/css/animate.min.css" rel="stylesheet"> 
<link href="{{asset('Bus')}}/css/style.css" rel="stylesheet" />
<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{ url('/customer-welcome') }}" class="navbar-brand">Online Bus</a>
            <ul class="nav navbar-nav navbar-right">
        	@if ( auth()->check() )
                <li><a href="{{ url('/customer-profile') }}"><span class="glyphicon glyphicon-user"></span> {{ auth()->user()->fname }}</a></li>
                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
                @else  
                <li><a href="{{ url('/registration') }}"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
                <li><a href="{{ url('/login-form') }}"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>