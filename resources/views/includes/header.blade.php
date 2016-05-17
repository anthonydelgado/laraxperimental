<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
        <span class="logo-mini"><b>L</b>AP</span>
        <span class="logo-lg"><b>Laravel</b>APP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->

        @if (Auth::guest())
        @else
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        @endif
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @if (Auth::user()->can_post())
                                <li>
                                    <a href="{{ url('/new-post') }}">Add new post</a>
                                </li>
                                <li>
                                    <a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @include('includes.dropdowns._messages')
                    {{--@include('includes.dropdowns._notifications')--}}
                    {{--@include('includes.dropdowns._tasks')--}}
                    @include('includes.dropdowns._users')
                @endif
            </ul>
        </div>
    </nav>
</header>
