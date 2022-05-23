<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('home')}}">
            <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img src="{{asset('assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
            <img src="{{asset('assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
            <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a><!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>Main</h3></li>
        <li class="slide">
            <a class="side-menu__item nav-link" href="{{route('home')}}">
                <i class="side-menu__icon fa fa-tv fa-lg" ></i>
                <span class="side-menu__label">Dashboard</span>
            </a>

        </li>
        <li class="slide">
            <a class="side-menu__item nav-link" href="{{ route('users.index') }}">
                <i class="side-menu__icon fa fa-users fa-lg" ></i>
                <span class="side-menu__label">Manage Users</span>
            </a>

        </li>
        <li class="slide">
            <a class="side-menu__item nav-link" href="{{ route('roles.index') }}">
                <i class="side-menu__icon fa fa-sliders fa-lg" ></i>
                <span class="side-menu__label">Manage Roles</span>
            </a>

        </li>

        <li class="slide">
            <a class="side-menu__item nav-link" href="{{ route('products.index') }}">
                <i class="side-menu__icon fa fa-product-hunt fa-lg" ></i>
                <span class="side-menu__label">Manage Products</span>
            </a>

        </li>

    </ul>
</aside>
<!--/APP-SIDEBAR-->

<!-- App-Header -->
<div class="app-header header">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand d-md-none" href="{{route('home')}}">
                <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img mobile-icon" alt="logo">
                <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo mobile-logo" alt="logo">
            </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v2H5v-2h14m2-10H3v2h18V5zm0 4H3v2h18V9zm0 4H3v6h18v-6z"/><path d="M5 15h14v2H5z" opacity=".3"/></svg>
            </a><!-- sidebar-toggle-->
            <div class="d-flex ml-auto header-right-icons header-search-icon">
                <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="navbar-toggler-icon"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                </button>
                <div class="dropdown d-none d-lg-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fullscreen-button"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="12" cy="12" opacity=".3" r="3"/><path d="M7 12c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5zm8 0c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3 3 1.35 3 3zM3 19c0 1.1.9 2 2 2h4v-2H5v-4H3v4zM3 5v4h2V5h4V3H5c-1.1 0-2 .9-2 2zm18 0c0-1.1-.9-2-2-2h-4v2h4v4h2V5zm-2 14h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4z"/></svg>
                    </a>
                </div><!-- FULL-SCREEN -->

                <div class="dropdown profile-1">
                    <a href="#" data-toggle="dropdown" class="nav-link pl-2 pr-2  leading-none d-flex">
										<span>
											<img src="{{asset('assets/images/users/10.jpg')}}" alt="profile-user" class="avatar  mr-xl-3 profile-user brround cover-image">
										</span>
                        <div class="text-center mt-2 d-none d-xl-block">
                            <h6 class="text-dark mb-0 fs-13 font-weight-semibold">{{ Auth::user()->name }}</h6>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="{{route('logout')}}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- responsive-navbar -->
<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <div class="d-flex order-lg-2 ml-auto">
            <div class="dropdown d-md-flex">
                <a class="nav-link icon full-screen-link nav-link-bg">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fullscreen-button"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="12" cy="12" opacity=".3" r="3"/><path d="M7 12c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5zm8 0c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3 3 1.35 3 3zM3 19c0 1.1.9 2 2 2h4v-2H5v-4H3v4zM3 5v4h2V5h4V3H5c-1.1 0-2 .9-2 2zm18 0c0-1.1-.9-2-2-2h-4v2h4v4h2V5zm-2 14h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4z"/></svg>
                </a>
            </div><!-- FULL-SCREEN -->
        </div>
    </div>
</div><!-- End responsive-navbar -->
<!-- App-Header -->
