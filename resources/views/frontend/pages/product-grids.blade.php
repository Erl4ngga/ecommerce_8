<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/shop-list-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:18 GMT -->
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
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Shop Sidebar</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Shop Main Area Start Here -->
    <div class="shop-main-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-9 col-12 col-custom widget-mt">
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper mb-30">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_list" type="button" class="active btn-list" title="List"><i class="fa fa-th-list"></i></button>
                            <button data-role="grid_3" type="button" class="btn-grid-3" title="Grid"><i class="fa fa-th"></i></button>
                        </div>
                        <div class="shop-select">
                            <form class="d-flex flex-column w-100" action="#">
                                <div class="form-group">
                                    <select class="form-control nice-select w-100">
                                        <option selected value="1">Alphabetically, A-Z</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                        <option value="6">Product Name: Z</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_list">
                        @if($products)
                        @foreach ($products as $key=>$product)
                        <div class="col-12 col-custom product-area">
                            <div class="product-item">
                                <div class="single-product position-relative mr-0 ml-0">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.html">
                                            <img src="{{$product->photo}}" alt="" class="product-image-1 w-100">
                                        </a>
                                        @if($product->stock<=0)
                                            <span class="onsale">Sale out!</span>
                                        @elseif($product->condition=='new')
                                            <span class="new">new!</span>
                                        @elseif($product->condition=='hot')
                                            <span class="hot">hot!</span>
                                        @else
                                            <span class="hot"></span>
                                        @endif
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.html" title="Compare">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                            </a>
                                            <a href="{{route('add-to-wishlist',$product->slug)}}" title="Add To Wishlist">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.html">{{$product->title}}</a></h4>
                                        </div>
                                        @php
                                            $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                            $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
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
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                        @endphp
                                        <div class="price-box">
                                        @if($product->discount >0)
                                            <span class="regular-price ">Rp.{{number_format($after_discount,2)}}</span>
                                            <span class="old-price"><del>Rp.{{number_format($product->price,2)}}</del></span>
                                        @else
                                            <span class="regular-price ">Rp.{{number_format($product->price,2)}}</span>
                                        @endif
                                        </div>
                                        <a href="{{route('add-to-cart',$product->slug)}}" class="btn product-cart">Add to Cart</a>
                                    </div>
                                    <div class="product-content-listview">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.html">{{$product->title}}</a></h4>
                                        </div>
                                        @php
                                            $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                            $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
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
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                        @endphp
                                        <div class="price-box">
                                            @if($product->discount >0)
                                                <span class="regular-price ">Rp.{{number_format($after_discount,2)}}</span>
                                                <span class="old-price"><del>Rp.{{number_format($product->price,2)}}</del></span>
                                            @else
                                                <span class="regular-price ">Rp.{{number_format($product->price,2)}}</span>
                                            @endif
                                        </div>
                                        <p class="desc-content">{!! html_entity_decode($product->summary) !!}</p>
                                        <div class="button-listview">
                                            <a href="{{route('add-to-cart',$product->slug)}}" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                            <a class="list-icon" href="compare.html" title="Compare">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                            </a>
                                            <a class="list-icon" href="{{route('add-to-wishlist',$product->slug)}}" title="Add To Wishlist">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                <div class="pagination">
                                    {{--<span style="float:right">{{$products->links()}}</span>--}}
                                </div>
                                <p class="desc-content text-center text-sm-right mb-0">Showing 1 - 12 of 34 result</p>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget widget-mt">
                        <div class="widget_inner">
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Search</h3>
                                <div class="search-box">
                                    <form class="input-group" method="POST" action="{{route('product.search')}}">
                                        @csrf
                                        <input name="search" id="search" type="text" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-1">
                                <!-- Widget Menu Start -->
                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list widget-mb-1">
                                @php
                                    $max=DB::table('products')->max('price');
                                    // dd($max);
                                @endphp
                                <h3 class="widget-title">Price </h3>
                                <!-- Widget Menu Start -->
                                <form action="{{route('shop.filter')}}" method="POST">
                                    @csrf
                                    <div id="slider-range" data-min="0" data-max="{{$max}}" ></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="price_range" id="amount" value="@if(!empty($_GET['price'])){{$_GET['price']}}@endif" />
                                </form>
                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list widget-mb-1">
                                @php
									// $category = new Category();
									$menu=App\Models\Category::getAllParentWithChild();
								@endphp
                                <h3 class="widget-title">Categories</h3>
                            @foreach($menu as $cat_info)
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a></li>
                                    </ul>
                                </div>
                            @endforeach
                            </div>
                          {{--<div class="widget-list widget-mb-2">
                                <h3 class="widget-title">Color</h3>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">black (20)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">red (6)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">blue (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">green (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">pink (4)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>--}}
                            <div class="widget-list widget-mb-3">
                                <h3 class="widget-title">Brand</h3>
                                @php
                                    $brands=DB::table('brands')->orderBy('title','ASC')->where('status','active')->get();
                                @endphp
                                <div class="sidebar-body">
                                    <ul class="tags">
                                        @foreach($brands as $brand)
                                        <li><a href="{{route('product-brand',$brand->slug)}}">{{$brand->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list mb-0">
                                <h3 class="widget-title">Recent Products</h3>
                                <div class="sidebar-body">
                                    @foreach ($recent_products as $product)
                                    @php
                                        $photo=explode(',',$product->photo);
                                    @endphp
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h4>
                                            </div>
                                            @php
                                                $org=($product->price-($product->price*$product->discount)/100);
                                            @endphp
                                            <div class="price-box">
                                                @if($product->discount >0)
                                                    <span class="regular-price ">Rp.{{number_format($product->price,2)}}</span>
                                                    <span class="old-price"><del>Rp.{{number_format($org,2)}}</del></span>
                                                @else
                                                    <span class="regular-price ">Rp.{{number_format($product->price,2)}}</span>
                                                @endif
                                            </div>
                                            @php
                                                $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
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
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Main Area End Here -->
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
    <div class="modal flosun-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <img class="w-100" src="assets/images/product/large-size/1.jpg" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="modal-product">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title">Product dummy name</h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">$80.00</span>
                                            <span class="old-price"><del>$90.00</del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>1 Review</span>
                                        </div>
                                        <p class="desc-content">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame bel...</p>
                                        <form class="d-flex flex-column w-100" action="#">
                                            <div class="form-group">
                                                <select class="form-control nice-select w-100">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
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
                                                <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.html">Add to cart</a>
                                                <a class="btn flosun-button secondary-btn rounded-0" href="wishlist.html">Add to wishlist</a>
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
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }

            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>


</body>


<!-- Mirrored from htmldemo.net/flosun/flosun/shop-list-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:18 GMT -->
</html>