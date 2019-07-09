<nav class="navbar navbar-default navbar-dark megamenu">
    <div class="container">

        <!-- START - Navbar Right -->
        <div class="navlink-right">
            <button type="button" class="btn-navlink show-form"><i class="fa fa-search"></i></button>
            <button type="button" class="btn-navlink close-form"><i class="fa fa-remove"></i></button>
        </div>
        <!-- END - Navbar Right -->

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand logo" href="{{ route('resources.home') }}">
                <img src="{{asset('ui/frontend/img/themes/logo-orange.png')}}" alt="Logo" />
            </a>
        </div>

        <!-- START - Form Search -->

        {!! Form::open(['route' => 'resources.search']) !!}
        <div class="search-wrapper animated">
            <input type="text" name="search" class="form-search" placeholder="Type something and hit enter...">
            <button type="submit">Submit</button>
        </div>
    {!! Form::close() !!}
        <!-- END - Form Search -->

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('resources.home') }}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                </li>
                <li>
                    <a href="{{url('resources/shop_left_sidebar2')}}" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                </li>
                {{--<li>--}}
                    {{--<a href="{{url('resources/shop_left_sidebar2')}}" class="dropdown-toggle" data-toggle="dropdown">Women,s</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="{{url('resources/shop_left_sidebar2')}}" class="dropdown-toggle" data-toggle="dropdown">Baby,s</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="{{url('resources/shop_left_sidebar2')}}" class="dropdown-toggle" data-toggle="dropdown">Electronics</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="{{url('resources/shop_left_sidebar2')}}" class="dropdown-toggle" data-toggle="dropdown">Others</a>--}}
                {{--</li>--}}
                <li><a href="{{url('resources/contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>