<!DOCTYPE html>
<html lang="en">
<head>
    <title>Church</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/dash.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/w3.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col top_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="event_timer">
                            <span>Next Big Event:</span>
                            <ul class="timer">
                                <li class="d-inline-flex">
                                    <div id="day" class="timer_num">03</div>
                                    <div class="timer_unit">Days</div>
                                </li>
                                <li class="d-inline-flex">
                                    <div id="hour" class="timer_num">15</div>
                                    <div class="timer_unit">Hours</div>
                                </li>
                                <li class="d-inline-flex">
                                    <div id="minute" class="timer_num">45</div>
                                    <div class="timer_unit">Minutes</div>
                                </li>
                                <li class="d-inline-flex">
                                    <div id="second" class="timer_num">23</div>
                                    <div class="timer_unit">Seconds</div>
                                </li>
                            </ul>
                        </div>
                        <div class="donations_button ml-auto">
                            <a href="#">Send Donations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Content -->

        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">

                            <!-- Logo -->
                            <div class="logo_container">
                                <div class="logo">
                                    <a href="#">
                                        <img src="images/logo1.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Navigation and Search -->
                            <div class="header_nav_container ml-auto">
                                <nav class="main_nav">
                                    <ul>
                                        <li class="active"><a href="{{ url('/')}}">Home</a></li>
                                        <li><a href="{{ url('ministries')}}">Ministries</a></li>
                                        <li><a href="{{ url('sermons')}}">Sermons</a></li>
                                        <li><a href="{{ url('contact')}}">Contact</a></li>
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </nav>
                                <div class="search">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="13px" height="14px">
										<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
									</svg>
                                </div>
                            </div>

                            <!-- Hamburger -->

                            <div class="hamburger ml-auto">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
											<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
										</svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-center justify-content-center">
        <div class="menu_content">
            <div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
            <form action="#" class="menu_search_form">
                <input type="search" class="menu_search_input" placeholder="Search" required="required">
                <button class="menu_search_button d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
					<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
				</svg>
                </button>
            </form>
            <nav class="menu_nav">
                <ul>
                    <li class="active"><a href="{{ url('index')}}">Home</a></li>
                    <li><a href="{{ url('ministries')}}">Ministries</a></li>
                    <li><a href="{{ url('sermons')}}">Sermons</a></li>
                    <li><a href="{{ url('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>

@yield('content')
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_content d-flex flex-lg-row flex-column align-items-center justify-content-start">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                        <div class="newsletter_form_container ml-lg-auto">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" placeholder="Your email" required="required">
                                <button id="newsletter_button" class="newsletter_button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">

                    <!-- Logo -->
                    <div class="logo_container">
                        <!-- <div class="logo">
                            <a href="#">
                                <img src="images/logo1.png" alt="">
                            </a>
                        </div> -->
                        <div class="logo_subtitle"></div>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_links">
                        <div class="footer_title">Useful Links</div>
                        <ul>
                            <li><a href="{{ url('/')}}">Home</a></li>
                            <li><a href="{{ url('ministries')}}">ministries</a></li>
                            <li><a href="{{ url('sermons')}}">Sermons</a></li>
                            <li><a href="{{ url('events')}}">Events</a></li>
                            <li><a href="{{ url('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_contact">
                        <div class="footer_title">Contact Us</div>
                        <ul>
                            <li><span>Address: </span>Ebenezer Plaza NTA road Mbguoba. Opposite NTA complex Port Harcourt Rivers State. Nigeria.</li>
                            <li class="footer_contact_phone">
                                <span>Phone: </span>
                                <div>
                                  <div> +234 809 806 5420</div>
                                  <div> +234 803 375 6888</div>
                                </div>
                            </li>
                            <li><span>Email: </span>info@gospelwealthembassy.com</li>
            								<li>contact@gospelwealthembassy.com</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="fa fa-heart-o" aria-hidden="true"></i> by Simvic</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>

    </footer>

</div>

<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('plugins/easing/easing.js')}}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>
