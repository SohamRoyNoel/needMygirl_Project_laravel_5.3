@extends('layouts.publicApp')

@section('intro_banner')
    <div class="banner inner-banner" id="home">
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
                                <a class="dropdown-item text-center" href="{{route('ask.index')}}">Ask A Question</a>
                                <a class="dropdown-item text-center" href="{{route('ask.create')}}">FAQ</a>
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
        <h1 class="inner-title-agileits-w3layouts">Ask Me A Question</h1>
    </div>

@stop

@section('content')

    <section class="contact py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title mb-sm-3 mb-2">Write Your question down bellow</h5>
            <div class="row">
                <div class="col-lg-12 wthree_contact_left">
                    {!! Form::open(['method'=>'POST', 'action'=>'FAQController@store', 'files'=>true]) !!}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            {!! Form::text('question', null, ['class'=>'form-control', 'placeholder'=>'Question']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('description', null, ['id'=>"textarea", 'class'=>"form-control", 'placeholder'=>"Tell Us Little more..."]) !!}
                    </div>

                    {!! Form::submit('Create Post', ['class'=>"btn btn-primary py-2 px-5"]) !!}

                    {!! Form::close() !!}
                    @include('pertial.validationErr')
                </div>
            </div>
        </div>
    </section>

@stop