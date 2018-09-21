@extends('layouts.publicApp')

@section('intro_banner')

    <!-- banner -->
    <div class="banner inner-banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html">Marry Off</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Photo Album</a>
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
                            <a class="nav-link" href="contact.html">Contact</a>
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

    <div class="col-md-12 w3l_contact_form">

        <div class="container">
            {!! Form::open(['method'=>'POST', 'action' =>'UserRegistrationController@store','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Your email']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('sex', 'Sex:') !!}
                <br>
                {!! Form::radio('sex', 'Male') !!} Male
                {!! Form::radio('sex', 'Female') !!} Female
            </div>

            <div class="form-group">
                {!! Form::label('age', 'Age:') !!}
                {!! Form::text('age', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Aadhaar Number 12 Digit']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('religion', 'Religion:') !!}
                {!! Form::select('religion', ['Christan' => 'Christan', 'Muslim' => 'Muslim', 'Hinduism' => 'Hinduism']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('occupation', 'Occupation:') !!}
                {!! Form::select('occupation', ['Professor' => 'Professor', 'Job Holder' => 'Job Holder', 'Self Employed' => 'Self Employed']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Pan Number 10 Digit']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category', 'What are you looking for:') !!}
                {!! Form::select('category', array(''=>'Select Category') + $category,  null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name appeared on Aadhaar Card']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Upload A face:') !!}<br>
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('salary', 'Salary:') !!}
                {!! Form::text('salary', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name appeared on Aadhaar Card']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name appeared on Aadhaar Card']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Register', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            <div class="col-md-12 col-sm-12 col-xs-12 w3l-bb-grid1">
                <h5><font style="color: #2b542c"> <i class="fas fa-exclamation-triangle"></i> * marked fields are needed....! </font></h5>
            </div>
            <br>


        </div>
    </div>

@stop