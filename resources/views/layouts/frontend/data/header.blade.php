<!doctype html>
    <html class="no-js" lang="zxx">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Watch shop | eCommers</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="manifest" href="site.webmanifest">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/assets/frontend/img/favicon.ico">

            <!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/slicknav.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/themify-icons.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/slick.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/nice-select.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
            <!-- Css Styles -->
            <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/components.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        </head>
    <html>
    <body>
    
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets') }}/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="about.html">about</a></li>
                                        <ul class="submenu">
                                            <li><a href="shop.html"> Product list</a></li>
                                            <li><a href="product_details.html"> Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <!-- <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                @auth
                                <li class="{{ request()->is('category*') ? 'active' : '' }}"><a href="#"><span class="flaticon-user"></span> {{ auth()->user()->name }}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('transaction.index') }}">Riwayat Belanja</a></li>
                                        <li><a href="{{ route('account.index') }}">Pengaturan Akun</a></li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li>
                                                <a href="{{ route('logout')  }}" onclick="event.preventDefault();
                                                this.closest('form').submit();" > Logout
                                            </a>
                                            </li>
                                        </form>
                                    </ul>
                                </li>
                                    @else
                                    <li> <a href="#"><span class="flaticon-user"></span></a></li>
                                @endauth
                                <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div> -->
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>