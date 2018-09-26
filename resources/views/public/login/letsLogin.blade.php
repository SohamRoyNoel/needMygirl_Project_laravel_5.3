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
                                <a class="dropdown-item text-center" href="{{route('ask.index')}}">Ask A Question</a>
                                <a class="dropdown-item text-center" href="{{route('ask.create')}}">FAQ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Registration" href="{{route('reg.index')}}"> <i class="fas fa-registered"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
        <h1 class="inner-title-agileits-w3layouts">Join Today, To Explore Your Life Partner</h1>
    </div>
    <!-- //banner -->

@stop

@section('content')

    <div class="col-md-12 w3l_contact_form">

        <div class="container">
            {!! Form::open(['method'=>'POST', 'action' =>'LoginController@store','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Your email']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}<br>
                {!! Form::password('password', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name appeared on Aadhaar Card']) !!} &nbsp;&nbsp; <font style="color: #005cbf"> <i class="fas fa-unlock-alt"></i> Provide the password given at the time of login </font>
                <div class="col-md-12 col-sm-12 col-xs-12 w3l-bb-grid1">
                    <br>
                    <a href=""><h6><font style="color: #c69500"> <i class="fas fa-question-circle"></i> Forgot Your Password....? </font></h6></a>
                    <a href="{{route('adminLogin.index')}}"><h6><font style="color: #1da1f2"> <i class="fas fa-eye"></i> Hold on...! Are you admin? Log from here please....? </font></h6></a>
                </div>

            </div>

            <div class="form-group">
                {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


            <div class="col-md-12 col-sm-12 col-xs-12 w3l-bb-grid1">
                <h5><font style="color: #2b542c"> <i class="fas fa-exclamation-triangle"></i> * marked fields are needed....! </font></h5>
            </div>
            <br>
            @include('pertial.validationErr')

        </div>
    </div>

@stop