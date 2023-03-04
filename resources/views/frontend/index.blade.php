<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FloSun - Flower Shop HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/assets/images/favicon.ico">

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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success alert-dismissable fade show text-center">
            <button class="close"  data-bs-dismiss="alert" aria-label="Close">×</button>
        {{session('success')}}
        </div>
    @endif


@if(session('error'))
    <div class="alert alert-danger alert-dismissable fade show text-center">
        <button class="close"  data-bs-dismiss="alert" aria-label="Close">×</button>
        {{session('error')}}
    </div>
@endif

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
    <!-- Slider/Intro Section Start -->
    @foreach ($banner as $banners)
    <div class="intro11-slider-wrap section">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                @php
                    $photo=explode(',',$banners->photo);
                @endphp
                <div class="intro11-section swiper-slide slide-1 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left">
                        <h3 class="title-slider text-uppercase">Top Trend</h3>
                        <h2 class="title">{!! html_entity_decode($banners->title) !!}</h2>
                        <p class="desc-content">{!! html_entity_decode($banners->description) !!} </p>
                        <a href="product-details.html" class="btn flosun-button secondary-btn theme-color  rounded-0">Shop Now</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
            <!-- Slider Navigation -->
            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
            <!-- Slider pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    @endforeach
    <!-- Slider/Intro Section End -->
    <!--Categories Area Start-->
    {{--<div class="categories-area pt-40">
        <div class="container-fluid">
            <div class="row">
                <div class="cat-1 col-md-4 col-sm-12 col-custom">
                    <div class="categories-img mb-30">
                        <a href="#"><img src="assets/images/category/home1-category-1.jpg" alt=""></a>
                        <div class="categories-content">
                            <h3>Potted Plant</h3>
                            <h4>18 items</h4>
                        </div>
                    </div>
                </div>
                <div class="cat-2 col-md-8 col-sm-12 col-custom">
                    <div class="row">
                        <div class="cat-3 col-md-7 col-custom">
                            <div class="categories-img mb-30">
                                <a href="#"><img src="assets/images/category/home1-category-2.jpg" alt=""></a>
                                <div class="categories-content">
                                    <h3>Potted Plant</h3>
                                    <h4>18 items</h4>
                                </div>
                            </div>
                        </div>
                        <div class="cat-4 col-md-5 col-custom">
                            <div class="categories-img mb-30">
                                <a href="#"><img src="assets/images/category/home1-category-3.jpg" alt=""></a>
                                <div class="categories-content">
                                    <h3>Potted Plant</h3>
                                    <h4>18 items</h4>
                                </div>
                            </div>
                        </div>
                        <div class="cat-5 col-md-4 col-custom">
                            <div class="categories-img mb-30">
                                <a href="#"><img src="assets/images/category/home1-category-4.jpg" alt=""></a>
                                <div class="categories-content">
                                    <h3>Potted Plant</h3>
                                    <h4>18 items</h4>
                                </div>
                            </div>
                        </div>
                        <div class="cat-6 col-md-8 col-custom">
                            <div class="categories-img mb-30">
                                <a href="#"><img src="assets/images/category/home1-category-5.jpg" alt=""></a>
                                <div class="categories-content">
                                    <h3>Potted Plant</h3>
                                    <h4>18 items</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--Categories Area End-->
    <!--Product Area Start-->
    <div class="product-area mt-text-2">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">Wonderful gift</span>
                        <h3 class="section-title-3">Featured Products</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="product-slider swiper-container anime-element-multi">
                        <div class="swiper-wrapper">
                            @foreach ($featured as $item)
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="{{route('product-detail',$item->slug)}}">
                                            <img src="{{$item->photo}}" alt="" class="product-image-1 w-100">
                                            <img src="" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        @if($item->stock<=0)
                                        <span class="onsale">Sale out!</span>
                                        @elseif($item->condition=='new')
                                        <span class="new">new!</span>
                                        @elseif($item->condition=='hot')
                                        <span class="hot">hot!</span>
                                        @else
                                        <span class="hot"></span>
                                        @endif
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="{{route('add-to-compare',$item->slug)}}" title="Compare">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                            </a>
                                            <a href="{{route('add-to-wishlist',$item->slug)}}" title="Add To Wishlist">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                            <a href="#{{$item->title}}" title="Quick View" data-bs-toggle="modal" data-bs-target="#{{$item->title}}">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="{{route('product-detail',$item->slug)}}">{{$item->title}}</a></h4>
                                        </div>
                                        @php
                                            $rate=DB::table('product_reviews')->where('product_id',$item->id)->avg('rate');
                                            $rate_count=DB::table('product_reviews')->where('product_id',$item->id)->count();
                                        @endphp
                                        <div class="product-rating">
                                        @for($i=1; $i<=5; $i++)
                                            @if($rate>=$i)
                                            <i class="fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                        </div>
                                    @php
                                        $after_discount=($item->price-($item->price*$item->discount)/100);
                                    @endphp
                                        <div class="price-box">
                                            @if($item->discount >0)
                                            <span class="regular-price ">Rp.{{number_format($after_discount,2)}}</span>
                                            <span class="old-price"><del>Rp.{{number_format($item->price,2)}}</del></span>
                                            @else
                                            <span class="regular-price ">Rp.{{number_format($item->price,2)}}</span>
                                            @endif
                                        </div>
                                        <a href="{{route('add-to-cart',$item->slug)}}" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <!--Single Product End-->
                                
                            </div>
                            @endforeach
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Product Area End-->
    <!-- Product Countdown Area Start Here -->

    
    <!-- Product Countdown Area End Here -->
    <!-- Testimonial Area Start Here -->
    <div class="testimonial-area mt-text-2">
        <div class="container custom-area">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center">
                        <span class="section-title-1">We Love Our Clients</span>
                        <h3 class="section-title-3">What They’re Saying</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row">
                <div class="testimonial-carousel swiper-container intro11-carousel-wrap col-12 col-custom">
                    <div class="swiper-wrapper">
                        <div class="single-item swiper-slide">
                            <!--Single Testimonial Start-->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-img">
                                    <img src="Erlangga.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>These guys have been absolutely outstanding.the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                                    <div class="testimonial-author">
                                        <h6>Erlangga<span>Founder</span></h6>
                                    </div>
                                </div>
                            </div>
                            <!--Single Testimonial End-->
                        </div>
                    </div>
                    <!-- Slider Navigation -->
                    <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
                    <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End Here -->
    <!-- Newsletter Area Start Here -->
    <div class="news-letter-area gray-bg pt-no-text pb-no-text mt-text-3">
        <div class="container custom-area">
            <div class="row align-items-center">
                <!--Section Title Start-->
                <div class="col-md-6 col-custom">
                    <div class="section-title text-left mb-35">
                        <h3 class="section-title-3">Send Newsletter</h3>
                        <p class="desc-content mb-0">Enter Your Email Address For Our Mailing List To Keep Your Self Update</p>
                    </div>
                </div>
                <!--Section Title End-->
                <div class="col-md-6 col-custom">
                    <div class="news-latter-box">
                        <div class="newsletter-form-wrap text-center">
                            <form id="mc-form" class="mc-form" action="{{route('subscribe')}}" method="post">
                                @csrf
                                <input type="email" id="mc-email" name="email" class="form-control email-box" placeholder="email@example.com" name="EMAIL">
                                <button id="mc-submit" class="btn rounded-0" type="submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Area End Here -->
    <!-- Blog Area Start Here -->
    {{--<div class="blog-post-area mt-text-3">
        <div class="container custom-area">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">From The Blogs</span>
                        <h3 class="section-title-3">Our Latest Posts</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 col-custom mb-30">
                    <div class="blog-lst">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="d-block" href="blog-details-fullwidth.html">
                                    <img src="assets/images/blog/blog1.jpg" alt="Blog Image" class="w-100">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-text">
                                    <h4><a href="blog-details-fullwidth.html">Standard blog post One</a></h4>
                                    <div class="blog-post-info">
                                        <span><a href="#">By admin</a></span>
                                        <span>December 18, 2022</span>
                                    </div>
                                    <p>Lorem ipsu dolor sit amet cons elits cumque adipisicing, sed do incid eiusmod tempor ut labore et dolore eveniet .</p>
                                    <a href="blog-details-fullwidth.html" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-custom mb-30">
                    <div class="blog-lst">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="d-block" href="blog-details-fullwidth.html">
                                    <img src="assets/images/blog/blog3.jpg" alt="Blog Image" class="w-100">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-text">
                                    <h4><a href="blog-details-fullwidth.html">New Collection Two</a></h4>
                                    <div class="blog-post-info">
                                        <span><a href="#">By admin</a></span>
                                        <span>December 18, 2022</span>
                                    </div>
                                    <p>Lorem ipsu dolor sit amet cons elits cumque adipisicing, sed do incid eiusmod tempor ut labore et dolore eveniet .</p>
                                    <a href="blog-details-fullwidth.html" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-custom mb-30">
                    <div class="blog-lst">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="d-block" href="blog-details-fullwidth.html">
                                    <img src="assets/images/blog/blog2.jpg" alt="Blog Image" class="w-100">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-text">
                                    <h4><a href="blog-details-fullwidth.html">Standard blog post three</a></h4>
                                    <div class="blog-post-info">
                                        <span><a href="#">By admin</a></span>
                                        <span>December 18, 2022</span>
                                    </div>
                                    <p>Lorem ipsu dolor sit amet cons elits cumque adipisicing, sed do incid eiusmod tempor ut labore et dolore eveniet .</p>
                                    <a href="blog-details-fullwidth.html" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- Blog Area End Here -->
    <!-- Brand Logo Area Start Here -->
    <div class="brand-logo-area gray-bg pt-no-text pb-no-text mt-text-5">
        <div class="container custom-area">
            <div class="row">
                <div class="col-12 col-custom">
                    <div class="brand-logo-carousel swiper-container intro11-carousel-wrap arrow-style-3">
                        <div class="swiper-wrapper">
                            <div class="single-brand swiper-slide">
                                <a href="#">
                                    <img src="verified.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="#">
                                    <img src="analytic.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="https://laravel.com/">
                                    <img src="laravel.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="#">
                                    <img src="code.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="#">
                                    <img src="vue.png" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <!-- Slider Navigation -->
                        <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
                        <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo Area End Here -->
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

    <!-- Modal -->
    @foreach ($featured as $item)
    <div class="modal flosun-modal fade" id="{{$item->title}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close close-button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="close-icon" aria-hidden="true">x</span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid custom-area">
                        <div class="row">
                            <div class="col-md-6 col-custom">
                                <div class="modal-product-img">
                                    <a class="w-100" href="#">
                                        <img class="w-100" src="{{$item->photo}}" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="modal-product">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title">{{$item->title}}</h4>
                                        </div>
                                        <div class="price-box">
                                            @if($item->discount >0)
                                            <span class="regular-price ">Rp.{{number_format($after_discount,2)}}</span>
                                            <span class="old-price"><del>Rp.{{number_format($item->price,2)}}</del></span>
                                            @else
                                            <span class="regular-price ">Rp.{{number_format($item->price,2)}}</span>
                                            @endif
                                        </div>
                                        <div class="product-rating">
                                            @for($i=1; $i<=5; $i++)
                                            @if($rate>=$i)
                                            <i class="fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                            <span>({{$rate_count}})</span>
                                        </div>
                                        <p class="desc-content">{!! html_entity_decode($item->summary) !!}</p>
                                        <form class="d-flex flex-column w-100" action="#">
                                        </form>
                                        <div class="quantity-with-btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="0" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                </div>
                                            </div>
                                            <div class="add-to_btn">
                                                <a class="btn product-cart button-icon flosun-button dark-btn" href="{{route('add-to-cart',$item->slug)}}">Add to cart</a>
                                                <a class="btn flosun-button secondary-btn rounded-0" href="{{route('add-to-cart',$item->slug)}}">Add to wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
    <!-- Scroll to Top End -->

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
    <script>
        var botmanWidget = {
            aboutText: 'Write Something',
            introMessage: "✋ Hi! Welcome to Gro-store bot"
        };
       </script>
     
       <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>


<!-- Mirrored from htmldemo.net/flosun/flosun/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:14 GMT -->
</html>