<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/frequently-questions.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FloSun - Flower Shop HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/font.awesome.min.css')}}">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/linearicons.min.css')}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/swiper-bundle.min.css')}}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/animate.min.css')}}">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/jquery-ui.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/nice-select.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/magnific-popup.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

</head>

<body>
    <!-- Header Area Start Here -->
    <header class="main-header-area">
        <!-- Main Header Area Start -->
        <div class="main-header header-transparent header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="index.html">
                                <img class="img-full" src="frontend/assets/images/logo/logo.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a class="active" href="/">
                                        <span class="menu-text"> Home</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a class="active" href="/">Home </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="menu-text">Shop</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="mega-menu dropdown-hover">
                                        <div class="menu-colum">
                                            <ul>
                                                <li><span class="mega-menu-text">Shop</span></li>
                                                <li><a href="{{route('product-list')}}">Shop List</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-colum">
                                            <ul>
                                                <li><span class="mega-menu-text">Product</span></li>
                                                <li><a href="{{route('wishlist')}}">Wishlist Product</a></li>
                                                <li><a href="{{route('compare')}}">Compare Product</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-colum">
                                            <ul>
                                                <li><span class="mega-menu-text">Others</span></li>
                                                <li><a href="{{route('cart')}}">Cart Page</a></li>
                                                <li><a href="{{route('checkout')}}">Checkout Page</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                               {{--<li>
                                    <a href="blog-details-fullwidth.html">
                                        <span class="menu-text"> Blog</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                   {{-- <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="blog.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                        <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                        <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth</a></li>
                                    </ul>
                                </li>--}}
                                <li>
                                    <a href="#">
                                        <span class="menu-text"> Pages</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('faq')}}">FAQ</a></li>
                                        @auth
                                        @if(Auth::user()->role=='admin')
                                            <li><a href="{{route('admin')}}">Dashboard admin</a></li>
                                        @elseif(Auth::user()->role=='user')
                                            <li><a href="{{route('user')}}">Dashboard user</a></li>
                                        @else
                                            <li><a href="{{route('shipper.index')}}">Dashboard shipper</a></li>
                                        @endif
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    @else
                                    <li><a href="{{route('user.register')}}">login &amp; register</a></li>
                                   @endauth
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('about.us')}}">
                                        <span class="menu-text"> About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">
                                        <span class="menu-text">Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="minicart-wrap">
                                    @php 
                                        $total_prod=0;
                                        $total_amount=0;
                                    @endphp
                                    <a href="#" class="minicart-btn toolbar-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="cart-item_count">{{Helper::cartCount()}}</span>
                                    </a>
                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                        @auth
                                            
                                        @foreach (Helper::getAllProductFromCart() as $item)
                                        <div class="single-cart-item">
                                            
                                            @php
                                                $photo=explode(',',$item->product['photo']);
                                            @endphp
                                            
                                            <div class="cart-img">
                                                <a href="{{route('cart')}}"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="{{route('product-detail',$item->product['slug'])}}">{{$item->product['title']}}</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>{{$item->quantity}}×</span>
                                                        <span class="cart-price">Rp.{{number_format($item->price,2)}}</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                        <div class="cart-price-total d-flex justify-content-between">
                                            <h5>Total :</h5>
                                            <h5>Rp{{number_format(Helper::totalCartPrice(),2)}}</h5>
                                        </div>
                                        <div class="cart-links d-flex justify-content-between">
                                            <a class="btn product-cart button-icon flosun-button dark-btn" href="{{route('cart')}}">View cart</a>
                                            <a class="btn flosun-button secondary-btn rounded-0" href="{{route('checkout')}}">Checkout</a>
                                        </div>
                                        @endauth
                                    </div>
                                </li>
                                <li class="sidemenu-wrap">
                                    <a href="#"><i class="fa fa-search"></i> </a>
                                    <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                                        <li>
                                            <form method="POST" action="{{route('product.search')}}">
                                                @csrf
                                                <input name="search" id="search" placeholder="Search" type="search">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="account-menu-wrap d-none d-lg-flex">
                                    <a href="#" class="off-canvas-menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <li class="mobile-menu-btn d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <form method="POST" action="{{route('product.search')}}">
                            @csrf
                            <input name="search" type="search" placeholder="Search product...">
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="#">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="/">Home </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Shop</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('product-list')}}">Shop List</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children"><a href="#">Product Details</a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('wishlist')}}">Wishlist Product</a></li>
                                                <li><a href="{{route('compare')}}">Compare Product</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children"><a href="#">Others</a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('compare')}}">Compare Page</a></li>
                                                <li><a href="{{route('cart')}}">Cart Page</a></li>
                                                <li><a href="{{route('checkout')}}">Checkout Page</a></li>
                                                <li><a href="{{route('wishlist')}}">Wish List Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{--<li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                        <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                                        <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth Page</a></li>
                                    </ul>
                                </li>--}}
                                <li class="menu-item-has-children "><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('faq')}}">FAQ</a></li>
                                        @auth
                                        @if(Auth::user()->role=='admin')
                                            <li><a href="{{route('admin')}}">Dashboard admin</a></li>
                                        @elseif(Auth::user()->role=='user')
                                            <li><a href="{{route('user')}}">Dashboard user</a></li>
                                        @else
                                            <li><a href="{{route('shipper.index')}}">Dashboard shipper</a></li>
                                        @endif
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    @else
                                    <li><a href="{{route('user.register')}}">login &amp; register</a></li>
                                   @endauth
                                    </ul>
                                </li>
                                <li><a href="{{route('about.us')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <div class="offcanvas-widget-area">
                        <div class="switcher">
                            <div class="language">
                                <span class="switcher-title">Language: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">English</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">German</a></li>
                                                <li><a href="#">French</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                @php
                                    $settings=DB::table('settings')->get();
                                @endphp
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="info%40yourdomain.html">@foreach($settings as $data) {{$data->phone}} @endforeach</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="info%40yourdomain.html">@foreach($settings as $data) {{$data->email}} @endforeach</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <ul class="menu-top-menu">
                            <li><a href="{{route('about.us')}}">About Us</a></li>
                        </ul>
                        @php
                            $settings=DB::table('settings')->get();
                        @endphp
                        <p class="desc-content">@foreach($settings as $data) {{$data->short_des}} @endforeach</p>
                        <div class="switcher">
                            <div class="language">
                                <span class="switcher-title">Bahasa: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">English</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">Indonesia</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                @php
                                    $settings=DB::table('settings')->get();
                                @endphp
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="info%40yourdomain.html">@foreach($settings as $data) {{$data->phone}} @endforeach</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="info%40yourdomain.html">@foreach($settings as $data) {{$data->email}} @endforeach</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
    <!-- Header Area End Here -->
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Kebijakan</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Kebijakan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!--faq area start-->
    <div class="faq-area">
        <!-- Faq Content Start  -->
        <div class="faq_content_area mt-text-6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="faq_content_wrapper">
                            <h4>Below are frequently asked questions, you may find the answer for yourself</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Content End -->
        <!--Accordion area-->
        <div class="accordion_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="accordion" class="card__accordion">
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingOne">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Mauris congue euismod purus at semper. Morbi et vulputate massa?<i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingTwo">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Donec mattis finibus elit ut tristique?
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingThree">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Aenean elit orci, efficitur quis nisl at, accumsan?
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingfour">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                        Pellentesque habitant morbi tristique senectus et netus?
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingfive">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                        Nam pellentesque aliquam metus?
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapseseven" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingsix">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        Aenean elit orci, efficitur quis nisl at?
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingseven">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        Morbi gravida, nisi id fringilla ultricies, elit lorem?
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="headingeight">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        Aenean elit orci, efficitur quis nisl at, accumsan?
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Accordion area end-->
    </div>
    <!--faq area End-->
    <!--Footer Area Start-->
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                        @php
							$settings=DB::table('settings')->get();
						@endphp
                        <div class="single-footer-widget m-0">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo-footer.png" alt="Logo Image">
                                </a>
                            </div>
                            <p class="desc-content">@foreach($settings as $data) {{$data->short_des}} @endforeach</p>
                            <div class="social-links">
                                <ul class="d-flex">
                                    <li>
                                        <a class="rounded-circle" href="#" title="Facebook">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Vimeo">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="{{route('about.us')}}">Our Company</a></li>
                                <li><a  href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                <li><a href="about-us.html">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Quicklink</h2>
                            <ul class="widget-list">
                                <li><a href="{{route('about.us')}}">About</a></li>
                                <li><a href="{{route('product-list')}}">Shop</a></li>
                                <li><a href="{{route('cart')}}">Cart</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Support</h2>
                            <ul class="widget-list">
                                <li><a href="contact-us.html">Online Support</a></li>
                                <li><a href="{{route('policy')}}">Kebijakan E-Money</a></li>
                                <li><a href="{{route('policy')}}">Kebijakan Ongkir</a></li>
                                <li><a href="{{route('policy')}}">Kebijakan Return</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">See Information</h2>
                            <div class="widget-body">
                                <address>@foreach($settings as $data) {{$data->address}} @endforeach<br>Phone: @foreach($settings as $data) {{$data->phone}} @endforeach<br>@foreach($settings as $data) {{$data->email}} @endforeach</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container custom-area">
                <div class="row">
                    <div class="col-12 text-center col-custom">
                        <div class="copyright-content">
                            <p>Copyright © 2021 <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a> | Built with&nbsp;<strong>FloSun</strong>&nbsp;by <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Area End-->

 <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- jQuery Migrate JS -->
    <script src="{{asset('frontend/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <!-- Modernizer JS -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    
    <!-- Swiper Slider JS -->
    <script src="{{asset('frontend/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <!-- nice select JS -->
    <script src="{{asset('frontend/assets/js/plugins/nice-select.min.js')}}"></script>
    <!-- Ajaxchimpt js -->
    <script src="{{asset('frontend/assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Jquery Ui js -->
    <script src="{{asset('frontend/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <!-- Jquery Countdown js -->
    <script src="{{asset('frontend/assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <!-- jquery magnific popup js -->
    <script src="{{asset('frontend/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    
    <!-- Main JS -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>


</body>


<!-- Mirrored from htmldemo.net/flosun/flosun/frequently-questions.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:27 GMT -->
</html>