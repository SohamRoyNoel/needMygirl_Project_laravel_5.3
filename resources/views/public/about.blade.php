@extends('layouts.publicApp')

@section('intro_banner')

    <!-- banner -->
    <div class="banner inner-banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{url('/')}}">Ti Amo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Question
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-center" href="stories.html">Ask A Question</a>
                                <a class="dropdown-item text-center" href="typography.html">FAQ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Login" href="{{route('login.index')}}"> <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Registration" href="{{route('reg.index')}}"> <i class="fas fa-registered"></i></a>
                        </li>
                    </ul>
                    <form action="#" method="post" class="form-inline my-2 my-lg-0 search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        <!-- //header -->
        <h1 class="inner-title-agileits-w3layouts">Join Today, To Explore Your Life Partner</h1>
    </div>
    <!-- //banner -->

@stop

@section('content')

    <section class="about-section py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title mb-sm-3 mb-2">About Us</h5>
            <div class="about-top">
                <h3 class="subheading-wthree mb-3">Something About Us</h3>
                <p class="paragraph-agileinfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
                    arcu, sed interdum risus.Integer quis tristique est, et egestas odio. Mauris ac tristique arcu, sed interdum risus.
                </p>
            </div>
            <div class="about-main">
                <div class="about-w3-left mb-4">
                    <div class="about-img">
                    </div>
                    <div class="about-bottom">
                        <p class="paragraph-agileinfo text-white p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique.</p>
                    </div>
                </div>

                <div class="about-w3ls-right">
                    <h3 class="subheading-wthree mb-3">Welcome to our Marry Off</h3>
                    <p class="paragraph-agileinfo">We offer great variety of services & programs. Our clients and our experience proves that the following services can
                        literally change your life!</p>
                    <div class="services-info top-services">
                        <ul>
                            <li class="mt-sm-4 mt-3">
                                <span class="fas fa-check" aria-hidden="true"></span>Wedding Ceremony</li>
                            <li class="mt-sm-4 mt-3">
                                <span class="fas fa-check" aria-hidden="true"></span>Wedding Decoration</li>
                            <li class="mt-sm-4 mt-3">
                                <span class="fas fa-check" aria-hidden="true"></span>Florist Services</li>
                            <li class="mt-sm-4 mt-3">
                                <span class="fas fa-check" aria-hidden="true"></span>Bridal Cortege</li>
                            <li class="mt-sm-4 mt-3">
                                <span class="fas fa-check" aria-hidden="true"></span>Catering Services</li>
                            <li class="mt-sm-4 mt-3">
                                <span class="fas fa-check" aria-hidden="true"></span>Wedding Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//about-->
    <!-- stats -->
    <section class="stats py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title text-white">We do awesome things</h5>
            <div class="row stats_inner">
                <div class="col-md-4 col-sm-4 stat-grids-w3layouts">
                    <p class="counter">2,879</p>
                    <div class="stats-text">
                        <h3 class="text-white">Weddings</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 stat-grids-w3layouts my-sm-0 my-4">
                    <p class="counter">953</p>
                    <div class="stats-text">
                        <h3 class="text-white">Portraits</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 stat-grids-w3layouts">
                    <p class="counter">1,546</p>
                    <div class="stats-text">
                        <h3 class="text-white">Urban Style</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- Team -->
    <section class="services py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title mb-sm-3 mb-2">Our Team</h5>
            <div class="row inner-sec-w3layouts-agileinfo align-items-center">
                <div class="col-lg-4 grid_info_main">
                    <div class="grid_info">
                        <div class="icon_info text-left p-4">
							<span class="icon">
								<img src="{{ asset('images/me.jpg')}}" style="transform: rotate(180deg)" class="img-fluid" alt="Responsive image">
							</span>
                            <h5>Soham Roy</h5>
                            <ul class="social_list1 my-3">
                                <li>
                                    <a href="https://www.facebook.com/noel.obrien.100" class="facebook1 text-center">
                                        <i class="fab fa-facebook-f"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/SohamRo10173417" class="twitter2 text-center">
                                        <i class="fab fa-twitter"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="https://sohamroyhasawebsite.000webhostapp.com/index.php" class="dribble3 text-center">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="paragraph-agileinfo">Soham Roy, developer, Owner, Creater of this Ti Amo.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info text-left p-4">
							<span class="icon">
								<img src="{{ asset('images/me1.jpg')}}" class="img-fluid" alt="Responsive image">
							</span>
                            <h5>Alisa Kuper</h5>
                            <ul class="social_list1 my-3">
                                <li>
                                    <a href="#" class="facebook1 text-center">
                                        <i class="fab fa-facebook-f"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter2 text-center">
                                        <i class="fab fa-twitter"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dribble3 text-center">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="paragraph-agileinfo">Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 grid_info_main mid my-4">
                    <img src="{{ asset('images/team.jpg')}}" class="img-responsive" alt=" ">
                </div>
                <div class="col-lg-4 grid_info_main">
                    <div class="grid_info">
                        <div class="icon_info text-left p-4">
							<span class="icon">
								<img src="{{ asset('images/me2.jpg')}}" class="img-fluid" alt="Responsive image">
							</span>
                            <h5>Soli lostek</h5>
                            <ul class="social_list1 my-3">
                                <li>
                                    <a href="#" class="facebook1 text-center">
                                        <i class="fab fa-facebook-f"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter2 text-center">
                                        <i class="fab fa-twitter"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dribble3 text-center">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="paragraph-agileinfo">Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info text-left p-4">
							<span class="icon">
								<img src="{{ asset('images/me3.jpg')}}" class="img-fluid" alt="Responsive image">
							</span>
                            <h5>Marine Kelly</h5>
                            <ul class="social_list1 my-3">
                                <li>
                                    <a href="#" class="facebook1 text-center">
                                        <i class="fab fa-facebook-f"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter2 text-center">
                                        <i class="fab fa-twitter"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dribble3 text-center">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="paragraph-agileinfo">Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@stop