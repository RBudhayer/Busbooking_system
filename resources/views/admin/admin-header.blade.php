<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ url('/admin/dashboard')}}" class="navbar-brand">Online Bus | Admin</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        	@if ( auth()->check() )
            <li><a href="{{ url('/admin/bus-list') }}"><span class="glyphicon glyphicon-list"></span> Bus list</a></li>
            <li><a href="{{ url('/admin-status') }}"><span class="glyphicon glyphicon-calendar"></span> Booking now</a></li>
        	<li><a href="{{ url('/admin-profile') }}"><span class="glyphicon glyphicon-user"></span> {{ auth()->user()->fname }}</a></li>
            <li><a href="{{ url('/admin-logout') }}"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
        	@else  
            <li><a href="{{ url('/admin/login') }}"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
        	@endif
        </ul>
    </div>
</nav>