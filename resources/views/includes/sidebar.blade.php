<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{  Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name  }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-files-o"></i>--}}
                    {{--<span>Layout Options</span>--}}
                    {{--<span class="label label-primary pull-right">4</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>--}}
                    {{--<li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>--}}
                    {{--<li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>--}}
                    {{--<li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="pages/widgets.html">--}}
                    {{--<i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-pie-chart"></i>--}}
                    {{--<span>Charts</span>--}}
                    {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>--}}
                    {{--<li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>--}}
                    {{--<li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-laptop"></i>--}}
                    {{--<span>UI Elements</span>--}}
                    {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>--}}
                    {{--<li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>--}}
                    {{--<li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>--}}
                    {{--<li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>--}}
                    {{--<li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>--}}
                    {{--<li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-edit"></i> <span>Forms</span>--}}
                    {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>--}}
                    {{--<li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>--}}
                    {{--<li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-table"></i> <span>Tables</span>--}}
                    {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    {{--<li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="pages/calendar.html">--}}
                    {{--<i class="fa fa-calendar"></i> <span>Calendar</span>--}}
                    {{--<small class="label pull-right bg-red">3</small>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="pages/mailbox/mailbox.html">--}}
                    {{--<i class="fa fa-envelope"></i> <span>Mailbox</span>--}}
                    {{--<small class="label pull-right bg-yellow">12</small>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Inbox</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::to('messages/create')}}"><i class="fa fa-circle-o"></i>
                            New Message</a></li>
                    <li><a href="{{URL::to('messages/')}}"><i class="fa fa-circle-o"></i>
                            Messages</a></li>
                </ul>
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-share"></i> <span>Multilevel</span>--}}
                    {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>--}}
                        {{--<ul class="treeview-menu">--}}
                            {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>--}}
                            {{--<li>--}}
                                {{--<a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>--}}
                                {{--<ul class="treeview-menu">--}}
                                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="documentation/index.html"><i class="fa fa-book"></i> Documentation</a></li>--}}
            {{--<li class="header">LABELS</li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>