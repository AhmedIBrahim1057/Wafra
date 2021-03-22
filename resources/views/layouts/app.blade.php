<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontendFiles/img/logos/wafra-logo.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('frontendFiles/img/logos/wafra-logo.ico')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontendFiles/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('frontendFiles/vendor/rs-plugin/css/navigation.css')}}">
    
    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('frontendFiles/css/demos/demo-business-consulting-2.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('frontendFiles/css/skins/skin-business-consulting-2.css')}}"> 

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontendFiles/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('frontendFiles/vendor/modernizr/modernizr.min.js')}}"></script>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
    @yield('head')

    <style>
        @media (max-width: 991px){
            #header .header-nav-main nav > ul li a.dropdown-toggle .fa-chevron-down {
                
                display: none;
                
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="body">
            <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 100}">
                <div class="header-body border-top-0">
                    <div class="header-container container bg-color-light">
                        <div class="header-row">
                            <div class="header-column header-column-logo">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="/">
                                            <img alt="WAFRA" width="100" height="auto" src="{{asset('frontendFiles/img/logos/wafra-logo.png')}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column header-column-nav-menu justify-content-end">
                                <div class="header-row">
                                    <div class="header-nav header-nav-links order-2 order-lg-1">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown-secondary">
                                                        <a class="nav-link active" href="/">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-menu-secondary dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#">
                                                            About
                                                            <i class="fas fa-caret-down ml-2"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a href="/about-project" class="dropdown-item">Project</a>
                                                            <a href="/about-team" class="dropdown-item">Team</a>
                                                        </div>
                                                    </li>
                                                   
                                                    <li class="dropdown-secondary">
                                                        <a class="nav-link" href="/contact-us">
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                    @guest
                                                        <li class="dropdown-secondary">
                                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                    @else
                                                        <li class="dropdown-menu-secondary dropdown">
                                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#">
                                                                {{ Auth::user()->name }} 
                                                                <i class="fas fa-caret-down ml-2"></i>
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
                                        </div>
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="header-column header-column-search justify-content-center align-items-end">
                                <div class="header-nav-features">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" class="header-nav-features-toggle" data-focus="headerSearch">
                                            <i class="fas fa-search header-nav-top-icon text-color-secondary text-3"></i>
                                        </a>
                                        <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
                                            <form role="search" action="page-search-results.html" method="get">			
                                                <div class="simple-search input-group">
                                                    <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                    <span class="input-group-append border-radius-0">
                                                        <button class="btn" type="submit">
                                                            <i class="fa fa-search header-nav-top-icon text-color-secondary"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <footer id="footer" class="m-0 border-0 bg-color-quaternary overflow-hidden">
				<div class="container">
					<div class="row custom-row-footer">
						<div class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
							<img width="100" height="auto" src="{{asset('frontendFiles/img/logos/wafra-logo.png')}}" alt="Logo Footer">
							{{-- <p class="d-block m-0 text-color-default">Lorem ipsum dolor sit amet, conse adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor.</p> --}}
						</div>
						<div class="col-12 col-sm-12 col-lg-9 footer-column">
							<div class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
								{{-- <div class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
									<ul class="nav nav-pills justify-content-between h-100 mb-4 mb-lg-0">
										<li class="dropdown-secondary d-inline-flex flex-column flex-lg-row">
											<span class="footer-nav-phone py-2 d-flex align-items-center text-color-secondary font-weight-semibold text-uppercase justify-content-start mb-2 mb-lg-0">
												<span>
													<img width="15" height="18" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">
												</span>
												<a class="font-weight-bold text-color-secondary text-color-hover-primary text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>
											</span>
											<span class="footer-nav-email px-0 font-weight-normal d-flex align-items-center justify-content-start mb-2 mb-lg-0">
												<span>
													<img width="25" height="18" src="img/demos/business-consulting-2/icons/mail.svg" alt="Mail">
												</span>
												<a class="text-color-secondary text-color-hover-primary text-decoration-none" href="mailto:business@portotheme.com">business@portotheme.com</a>
											</span>
											<span class="footer-nav-opening-hours px-0 font-weight-normal d-flex align-items-center text-color-secondary justify-content-start mb-2 mb-lg-0">
												<span>
													<img width="19" height="18" src="img/demos/business-consulting-2/icons/calendar.svg" alt="Calendar">
												</span>
												Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED
											</span>
										</li>
									</ul>
									<ul class="social-icons custom-social-icons">
										<li class="social-icons-instagram">
											<a class="custom-bg-color-light-grey" href="http://www.instagram.com/" target="_blank" title="Instagram">
												<i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-twitter">
											<a class="custom-bg-color-light-grey" href="http://www.twitter.com/" target="_blank" title="Twitter">
												<i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-facebook">
											<a class="custom-bg-color-light-grey" href="http://www.facebook.com/" target="_blank" title="Facebook">
												<i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
									</ul>
								</div> --}}
								<nav class="nav-footer w-100 d-none d-lg-block">
									<ul class="nav nav-pills justify-content-end" id="mainNav">
										<li class="dropdown-secondary">
											<a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="/">
												Home
											</a>
										</li>
										<li class="dropdown-secondary">
											<a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="/about-project">
												Project
											</a>
										</li>
										<li class="dropdown-secondary">
											<a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="/about-team">
												Team
											</a>
										</li>
										<li class="dropdown-secondary">
											<a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="/contact-us">
												Contact Us
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright container bg-color-quaternary">
					<div class="row">
						<div class="col-lg-12 text-center m-0">
							<p class="text-color-grey">Developed by Center for Sound, Vibration and Smart Structures (CVS3) - Faculty of Engineering - Ain Shams University - Copyright © 2021.</p>
						</div>
					</div>
				</div>
			</footer>

        </main>
    </div>

    <!-- Vendor -->
    <script src="{{asset('frontendFiles/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/common/common.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/vivus/vivus.min.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('frontendFiles/js/theme.js')}}"></script>
    
    <!-- Current Page Vendor and Views -->
    <script src="{{asset('frontendFiles/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontendFiles/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('frontendFiles/js/views/view.contact.js')}}"></script>

    <!-- Demo -->
    <script src="{{asset('frontendFiles/js/demos/demo-business-consulting-2.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('frontendFiles/js/custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('frontendFiles/js/theme.init.js')}}"></script>

    @yield('js')
</body>
</html>
