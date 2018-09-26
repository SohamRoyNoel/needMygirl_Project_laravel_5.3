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
                        <li class="nav-item">
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
                        <li class="nav-item active">
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
        <h1 class="inner-title-agileits-w3layouts">CONTACT</h1>
    </div>
    <!-- //banner -->

@stop

@section('content')

    <!-- contact -->
    <section class="contact py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title mb-sm-3 mb-2">Contact Us</h5>
            <div class="row">
                <div class="col-lg-4 wthree_contact_left">
                    <h3 class="subheading-wthree mb-3">About Us</h3>
                    <p class="paragraph-agileinfo">Hello Dear
                        <span>Welcome To Our Ti Amo,</span>Date, fall in love get married. Thats our goal.
                        <a href="mailto:info@example.com">noelleroy720@gmail.com</a> Mail to Owners.</p>
                    <div class="info-img-agileits row">
                        <div class="col-4 info1"></div>
                        <div class="col-4 info2"></div>
                        <div class="col-4 info3"></div>
                    </div>
                    <h3 class="subheading-wthree mb-3">Servicing Hours</h3>
                    <ul>
                        <li class="mb-3">
                            <span>Monday-Friday</span> 9:00 am - 10:00 pm </li>
                        <li>
                            <span>Saturday & Sunday</span> 9:00 am - 12:00 pm</li>
                    </ul>
                </div>
                <div class="col-lg-8 wthree_contact_left">
                    <h3 class="subheading-wthree mb-3">Send us an Email</h3>
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textarea">Message</label>
                            <textarea id="textarea" placeholder="Message..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary py-2 px-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="map-agileits">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.2622502897398!2d88.42857391507289!3d22.569292838779578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275adfb038489%3A0x713cf48a469f13ed!2sS.D.F.+Building!5e0!3m2!1sen!2sin!4v1537949734955" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- //contact -->

@stop