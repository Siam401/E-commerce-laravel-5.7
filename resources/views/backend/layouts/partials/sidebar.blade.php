<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{ asset('uploads/users/'.Auth::user()->profile->picture) }}" alt="image"/>
                    <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                   <a href="{{ route('admin.profile',Auth::user()->id )}}">{{ Auth::user()->name }}</a>
                    <p class="designation">
                        Role: Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="icon-home  menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">
                <i class="icon-symbol-male menu-icon"></i>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sub_categories.index') }}">
                <i class="icon-shield menu-icon"></i>
                <span class="menu-title">Sub Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('suppliers.index') }}">
                <i class="icon-loop menu-icon"></i>
                <span class="menu-title">Supplier</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('brands.index') }}">
                <i class="icon-bulb menu-icon"></i>
                <span class="menu-title">Brand</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('manage.order') }}">
                <i class="icon-refresh menu-icon"></i>
                <span class="menu-title">Manage Order</span>
            </a>
        </li>

    </ul>
</nav>