<header class="main-header header-style-four">

    <div class="header-top-two">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left clearfix">
                    <ul class="info-links">
                        <li>
                            <span class="icon flaticon-call"></span>
                            PH:
                            <a href="tel:+3-908-9098-987">
                                09123123123
                            </a>
                        </li>
                        <li>
                            <span class="icon flaticon-email-2"></span>
                            Email:
                            <a href="mailto:email@domain.com">email@domain.com</a>
                        </li>
                    </ul>
                </div>

                <div class="top-right pull-right clearfix">
                    <ul class="social-box">
                        <li class="follow">Follow us:</li>
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/logo.png') }}" alt="" title="" style="width: 10%;">
                        </a>
                    </div>
                </div>

                <div class="nav-outer clearfix">
                    <div class="mobile-nav-toggler">
                        <span class="icon flaticon-menu"></span>
                    </div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <li class="current">
                                    <a href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>


                                <li class="current dropdown">
                                    <a href="#">
                                        Company
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="about.html">
                                                About us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                                Our Services
                                            </a>
                                        </li>
                                        <li>
                                            <a href="price.html">
                                                Why Solar energy
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="current dropdown">
                                    <a href="#">
                                        Product
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="about.html">
                                                Solar Panel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                                Battery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="price.html">
                                                Inventor
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="current">
                                    <a href="{{ route('contact') }}">
                                        Our Projects
                                    </a>
                                </li>

                                <li class="current">
                                    <a href="{{ route('news') }}">
                                        News
                                    </a>
                                </li>

                                <li class="current">
                                    <a href="{{ route('activities') }}">
                                        Activities
                                    </a>
                                </li>

                                <li class="current">
                                    <a href="{{ route('contact') }}">
                                        Contact Us
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!-- Cart Box -->
                        <div class="cart-box">
                            <div class="dropdown">
                                <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="flaticon-shopping-bag-1"></span><span
                                        class="total-cart">2</span></button>
                                <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span>
                                            </div>
                                            <div class="image"><img
                                                    src="{{ asset('assets/images/resource/post-thumb-1.jpg') }}"
                                                    alt="" /></div>
                                            <h3><a href="shop-single.html">Product 01</a></h3>
                                            <div class="quantity-text">Quantity 01</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span>
                                            </div>
                                            <div class="image"><img
                                                    src="{{ asset('assets/images/resource/post-thumb-2.jpg') }}"
                                                    alt="" /></div>
                                            <h3><a href="shop-single.html">Product 02</a></h3>
                                            <div class="quantity-text">Quantity 1</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>
                                    <div class="cart-total">Sub Total: <span>$198</span></div>
                                    <ul class="btns-boxed">
                                        <li><a href="shoping-cart.html">View Cart</a></li>
                                        <li><a href="checkout.html">CheckOut</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!-- Search Btn -->
                        <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span>
                        </div>

                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span>
                        </div>

                        <!-- Button Box -->
                        <div class="button-box">
                            <a href="#" class="theme-btn btn-style-two">
                                <span class="txt">
                                    Get A
                                    Quote
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="{{ asset('assets/images/logo-small.png') }}"
                        alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/logo-small.png') }}"
                        alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
<!-- End Main Header -->
@if (request()->route()->getName() == 'home')
    @include('layouts.shared.slider')
@endif
