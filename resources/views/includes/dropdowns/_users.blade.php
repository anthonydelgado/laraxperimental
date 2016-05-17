<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{  Gravatar::get(Auth::user()->email) }}" class="user-image" alt="User Image"/>
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
    </a>

    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{  Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image" />

            <p>
                {{ Auth::user()->name }}
                <small>{{ Carbon\Carbon::now()->format('l F jS Y') }}</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>