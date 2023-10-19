<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                    <i class="fa fa-dashboard fa-fw"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="{{ route('users.index') }}" class="waves-effect">--}}
{{--                    <i class="ti-user fa-fw"></i>--}}
{{--                    <span class="hide-menu">Manage Users</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="index.html" class="waves-effect">--}}
{{--                    <i class="ti-user fa-fw"></i>--}}
{{--                    <span class="hide-menu"> Menu<span class="fa arrow"></span></span>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li> <a href="index.html"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard 1</span></a> </li>--}}
{{--                    <li> <a href="index2.html"><i class=" fa-fw">2</i><span class="hide-menu">Dashboard 2</span></a> </li>--}}
{{--                    <li> <a href="index3.html"><i class=" fa-fw">3</i><span class="hide-menu">Dashboard 3</span></a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li>
                <a href="index.html" class="waves-effect">
                    <i class="ti-desktop fa-fw"></i>
                    <span class="hide-menu"> Pages<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    @php $sections = \App\Section::all(); @endphp
                    @foreach($sections as $section)
                        <li> <a href="{{ route('sections.edit',$section->id) }}"><span class="hide-menu">{{ $section->name }}</span></a> </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('services.index') }}" class="waves-effect">
                    <i class="ti-star fa-fw"></i>
                    <span class="hide-menu">Services</span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect">
                    <i class="ti-file fa-fw"></i>
                    <span class="hide-menu"> Blog<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('categories.index')}}"><i class=" fa-fw">1</i><span class="hide-menu">Categories</span></a> </li>
                    <li> <a href="{{ route('tags.index')}}"><i class=" fa-fw">2</i><span class="hide-menu">Tags</span></a> </li>
                    <li> <a href="{{ route('posts.index')}}"><i class=" fa-fw">3</i><span class="hide-menu">Posts</span></a> </li>
                </ul>
            </li>
<li>
                <a href="{{ route('career.index') }}" class="waves-effect">
                    <i class="ti-star fa-fw"></i>
                    <span class="hide-menu">Career</span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect">
                    <i class="ti-image fa-fw"></i>
                    <span class="hide-menu"> Portfolios<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('categories.index')}}"><i class=" fa-fw">1</i><span class="hide-menu">Categories</span></a> </li>
                    <li> <a href="{{ route('works.index')}}"><i class=" fa-fw">2</i><span class="hide-menu">Works</span></a> </li>
					<li> <a href="{{ route('projects_admin')}}"><i class=" fa-fw">3</i><span class="hide-menu">Project</span></a> </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('testimonials.index') }}" class="waves-effect">
                    <i class="ti-user fa-fw"></i>
                    <span class="hide-menu">Testimonials</span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect">
                    <i class="ti-image fa-fw"></i>
                    <span class="hide-menu"> Product<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('product-categories.index')}}"><i class=" fa-fw">1</i><span class="hide-menu">Categories</span></a> </li>

                    <li> <a href="{{ route('products.index')}}"><i class=" fa-fw">1</i><span class="hide-menu">Products</span></a> </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('areas.index') }}" class="waves-effect">
                    <i class="ti-map fa-fw"></i>
                    <span class="hide-menu">Areas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('setting.index') }}" class="waves-effect">
                    <i class="ti-settings fa-fw"></i>
                    <span class="hide-menu">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>
