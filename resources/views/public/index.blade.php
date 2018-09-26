@extends('layouts.publicApp')

@section('intro_banner')

    <div class="banner" id="home">
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
                        <li class="nav-item active">
                            <a class="nav-link active" href="{{url('/')}}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-center" href="stories.html">Stories</a>
                                <a class="dropdown-item text-center" href="typography.html">Typography</a>
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
                    <form action="#" method="post" class="form-inline my-2 my-lg-0 search mx-lg-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>


                </div>
            </nav>
        </header>
        <!-- //header -->
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="slider-info">
                                <h3>Jesse & Kevin</h3>
                                <p>21 April 2018</p>
                                <h1 class="text-right mt-lg-0 mt-md-3 mt-sm-4 mt-3">We're waiting for the best</h1>
                                <a href="stories.html" class="text-right">Our Story</a>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Berend & Michelle</h3>
                                <p>6 June 2018</p>
                                <h4 class="text-right mt-lg-0 mt-md-3 mt-sm-4 mt-3">Feeling awesome</h4>
                                <a href="stories.html" class="text-right">Our Story</a>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Guido & Myrna</h3>
                                <p>29 July 2018</p>
                                <h4 class="text-right mt-lg-0 mt-md-3 mt-sm-4 mt-3">That was so wonderful</h4>
                                <a href="stories.html" class="text-right">Our Story</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
@stop

@section('content')

    <!-- services -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="services-grids row">
                <div class="col-lg-6 services-img1"></div>
                <div class="col-lg-6 services-info top-services p-xl-5 p-4">
                    <h5 class="main-w3l-title mb-sm-3 mb-2">Services</h5>
                    <h3 class="subheading-wthree mb-3">Everything You Need to Start</h3>

                    <p class="paragraph-agileinfo">We offer great variety of services & programs. Our clients and our experience proves that the following services can
                        literally change your life!</p>
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
            <div class="services-grids row">
                <div class="col-lg-6 services-info bottom-services  p-xl-5 p-4">
                    <h5 class="main-w3l-title mb-sm-3 mb-2">Our Packages</h5>
                    <h3 class="subheading-wthree mb-3">Style for Your Wedding.</h3>
                    <div class="serv-inner1 d-md-flex justify-content-around">
                        <div class="col-md-6 serv-left">
                            <h6>
                                <span>V</span>intage
                                <span>W</span>eddings</h6>
                            <p class="paragraph-agileinfo text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
                                arcu, sed interdum risus.
                            </p>
                        </div>
                        <div class="col-md-6 serv-right">
                            <h6>
                                <span>R</span>ustic
                                <span>W</span>eddings</h6>
                            <p class="paragraph-agileinfo text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
                                arcu, sed interdum risus.
                            </p>
                        </div>
                    </div>
                    <div class="serv-inner2 d-md-flex">
                        <div class="col-md-6 serv-left">
                            <h6>
                                <span>B</span>each
                                <span>W</span>eddings</h6>
                            <p class="paragraph-agileinfo text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
                                arcu, sed interdum risus.
                            </p>
                        </div>
                        <div class="col-md-6 serv-right">
                            <h6>
                                <span>L</span>uxury
                                <span>W</span>eddings</h6>
                            <p class="paragraph-agileinfo text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
                                arcu, sed interdum risus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 services-img2"></div>
            </div>
        </div>
    </section>
    <!-- //services -->
    <!-- stats -->
    <section class="stats py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title text-white container">We do awesome things</h5>

        </div>
    </section>
    <!-- //stats -->



    @stop

@section('testiminials')

    <!-- Testimonials -->
    <section class="reviews_sec py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title mb-sm-3 mb-2">Happy Couples</h5>
            <div class="inner-sec-w3layouts-agileinfo">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="testimonials_grid">
                                    <div class="testimonials_grid-inn">
                                        <img src="{{ asset('images/s1.jpg')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <h5 class="test-name">Berend
                                        <span>&</span> Michelle
                                    </h5>
                                    <i>United States</i>
                                    <p class="paragraph-agileinfo">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                        Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonials_grid">
                                    <div class="testimonials_grid-inn">
                                        <img src="{{ asset('images/s2.jpg')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <h5 class="test-name">Jesse
                                        <span>&</span> Kevin
                                    </h5>
                                    <i>United States</i>
                                    <p class="paragraph-agileinfo">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                        Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonials_grid">
                                    <div class="testimonials_grid-inn">
                                        <img src="{{ asset('images/s3.jpg')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <h5 class="test-name">Guido
                                        <span>&</span> Myrna
                                    </h5>
                                    <i>United States</i>
                                    <p class="paragraph-agileinfo">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                        Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Testimonials -->

    @stop