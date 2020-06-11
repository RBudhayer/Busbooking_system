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
            <a class="navbar-brand" href="{{asset('/')}}">ONLINE BUS</a>
        </div>				
        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#feature">Feature</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#pricing">Price & Plan</a></li>
                {{-- <li><a href="{{ route('login') }}">Sign In</a></li> 
                <li><a href="{{ route('login') }}">Admin Login</a></li> --}}
                <li><a href="{{ url('/registration') }}"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
            <li><a href="{{ url('/login-form') }}"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
            <li><a href="{{ url('/admin/login') }}"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>                        
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->		
</header><!--/header-->	