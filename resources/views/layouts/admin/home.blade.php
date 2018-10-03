<!doctype html>
<html class="no-js h-100" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administração de academia - Basic Sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/fonts/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/styles/shards-dashboards.1.0.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/styles/extras.1.0.0.min.css') }}">

    <style>
        @yield('style')
    </style>

</head>
<body class="h-100">
<div class="color-switcher animated">
    <h5>Mude a cor</h5>
    <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary">
            <i class="material-icons">check</i>
        </li>
        <li class="accent-secondary" data-color="secondary">
            <i class="material-icons">check</i>
        </li>
        <li class="accent-success" data-color="success">
            <i class="material-icons">check</i>
        </li>
        <li class="accent-info" data-color="info">
            <i class="material-icons">check</i>
        </li>
        <li class="accent-warning" data-color="warning">
            <i class="material-icons">check</i>
        </li>
        <li class="accent-danger" data-color="danger">
            <i class="material-icons">check</i>
        </li>
    </ul>
    <div class="actions mb-4">
        <a class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action" href="http://www.google.com.br">
            <i class="material-icons">grade</i> Curta nossa página</a>
    </div>

    <div class="close">
        <i class="material-icons">close</i>
    </div>
</div>
<div class="color-switcher-toggle animated pulse infinite">
    <i class="material-icons">settings</i>
</div>
<div class="container-fluid">
    <div class="row">


        <!-- Main Sidebar -->
        @include('layouts.admin.menu')
        <!-- End Main Sidebar -->


        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
                <!-- Main Navbar -->
                <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                    <div class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">

                    </div>
                    <ul class="navbar-nav border-left flex-row ">

                        {{--
                        <li class="nav-item border-right dropdown notifications">
                            <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="nav-link-icon__wrapper">
                                    <i class="material-icons">&#xE7F4;</i>
                                    <span class="badge badge-pill badge-danger">2</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">&#xE6E1;</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Analytics</span>
                                        <p>Your website’s active users count increased by
                                            <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">&#xE8D1;</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Sales</span>
                                        <p>Last week your store’s sales count decreased by
                                            <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                            </div>
                        </li>
                        --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle mr-2" src="https://image.flaticon.com/icons/png/128/149/149070.png" alt="User Avatar">
                                <span class="d-none d-md-inline-block">
                                    {{ Auth::user()->name }}
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small">
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="material-icons text-danger">&#xE879;</i> Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <nav class="nav">
                        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                            <i class="material-icons">&#xE5D2;</i>
                        </a>
                    </nav>
                </nav>
            </div>
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">

                @include('layouts.components.alerts')

                @yield('content')
            </div>
            <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
                <span class="copyright ml-auto my-auto mr-2">
              <a href="http://www.basicistemas.com.br" rel="nofollow">Basic Sistemas - Desenvolvimento de Software</a>
            </span>
            </footer>
        </main>
    </div>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/shards.min.js') }}"></script>
<script src="{{ asset('js/jquery.sharrre.min.js') }}"></script>
<script src="{{ asset('admin/scripts/extras.1.0.0.min.js') }}"></script>
<script src="{{ asset('admin/scripts/shards-dashboards.1.0.0.min.js') }}"></script>
<script src="{{ asset('admin/scripts/app/app-blog-overview.1.0.0.js') }}"></script>

</body>
</html>