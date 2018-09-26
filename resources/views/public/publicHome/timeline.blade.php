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
                            <a class="nav-link" href="{{route('userHome.index')}}">Home
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Logout" href="{{route('reg.create')}}"> <i class="fas fa-sign-out-alt"></i></a>
                        </li>

                    </ul>
                    <a href="{{route('timeline.index')}}"> <img class="img img-circle" src="{{ asset('user_faces/' . substr(session('photo'), 2, -2))}}" height="40" width="40"></a>
                </div>
            </nav>
        </header>
        <!-- //header -->
        <h1 class="inner-title-agileits-w3layouts">Check Your Profile and <img height="80" width="100" src="{{ asset('images/lvmsg.png')}}"> Requests</h1>
    </div>
    <!-- //banner -->

@stop

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@stop

@section('content')

    <section class="about-section py-5" id="about">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title mb-sm-3 mb-2">You & You</h5>

            <style>
                .content {
                    padding: 0 18px;
                    display: none;
                    overflow: hidden;
                    background-color: #f1f1f1;
                }
            </style>

            <div class="about-main row d-lg-flex justify-content-around">
                <div class="col-lg-6 about-w3-left">
                    <div class="about-img">
                        @if($user)
                            @foreach($user as $u1)
                                <img style="width: 550px; height: 307px" src="{{ asset('user_faces/'. $u1->photo->path)}}" class="img-fluid" alt="Responsive image">

                        </div>
                        <div class="about-bottom">
                            <p class="paragraph-agileinfo text-white p-4">{{$u1->about}}.</p>
                        </div>
                    <center><a href=""> <img title="Love Counter" height="30" width="40" src="{{ asset('images/lovebutton.jpg')}}">15</a>  <a href=""><img title="Your Proposals" height="30" width="40" src="{{ asset('images/message.jpg')}}">20</a>  <a href=""><img title="Your Request" height="30" width="40" src="{{ asset('images/lvmsg.png')}}">23</a></center>
                    @endforeach
                    @endif
                    <br>
                    <h3 class="main-w3l-title mb-sm-3 mb-2" style="color: #aa4a24">Upload Your Photos To Gallery</h3>
                    <div class="fallback col-sm-12">
                        {!! Form::open(['method'=>'POST', 'action'=>'TimelineController@store', 'files'=>true, 'class'=>'dropzone']) !!}

                        {!! Form::close() !!}
                        <h6 style="color: #cbb956"><i class="fas fa-exclamation-triangle"></i>*please take care not to upload more than 4 files at a time that may crash the system.</h6>
                    </div>
                </div>

                <div class="col-lg-6 about-w3ls-right">
                    <h3 class="subheading-wthree mb-3" style="color: #411c0e">Here's Your Beautiful Profile</h3>

                    <style>
                        .collapsible {
                            background-color: #1da1f2;
                            color: white;
                            cursor: pointer;
                            padding: 18px;
                            width: 100%;
                            border: none;
                            text-align: left;
                            outline: none;
                            font-size: 15px;
                        }

                        .active, .collapsible:hover {
                            background-color: #555;
                        }

                        .content {
                            padding: 0 18px;
                            display: none;
                            overflow: hidden;
                            background-color: #f1f1f1;
                        }
                    </style>

                    @if($user)
                        @foreach($user as $u)

                            <button class="collapsible"><i class="fas fa-user"></i> Your name is <b style="color: black">&nbsp;{{$u->name}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        {!! Form::label('name', 'Change Name:') !!}
                                        {!! Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name']) !!}
                                        <br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-at"></i> here's your email <b style="color: black">&nbsp;{{$u->email}}</b></button>
                            <div class="content">
                                <p>
                                    <br>
                                    {!! Form::submit('You Are Not Allowed To Change EMAIL', ['class'=>'btn btn-outline-danger disabled']) !!}
                                    <br><br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-transgender"></i> You're <b style="color: black">&nbsp;{{$u->sex}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('sex', 'Change Sex:') !!}
                                    <br>
                                    {!! Form::radio('sex', 'Male') !!} Male
                                    {!! Form::radio('sex', 'Female') !!} Female
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fab fa-autoprefixer"></i> You're <b style="color: black">&nbsp;{{$u->age}} years old</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        {!! Form::label('age', 'Change Age:') !!}
                                        {!! Form::text('age', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                        <br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-church"></i> You're <b style="color: black">&nbsp;{{$u->religion}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        <br>
                                        {!! Form::label('religion', 'Change Religion:') !!}
                                        {!! Form::select('religion', ['Christan' => 'Christan', 'Muslim' => 'Muslim', 'Hinduism' => 'Hinduism'], ['class'=>'input-group-text']) !!}
                                        <br><br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-prescription"></i> You're <b style="color: black">&nbsp;{{$u->occupation}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        <br>
                                        {!! Form::label('occupation', 'Change Occupation:') !!}
                                        {!! Form::select('occupation', ['Professor' => 'Professor', 'Job Holder' => 'Job Holder', 'Self Employed' => 'Self Employed']) !!}
                                        <br><br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-home"></i> You stay at <b style="color: black">&nbsp;{{$u->address}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        {!! Form::label('address', 'Change Address:') !!}
                                        {!! Form::text('address', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                        <br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="far fa-laugh-wink"></i> Your Interest comes on <b style="color: black"> &nbsp;{{$u->category->name}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        {!! Form::label('category_id', 'Change Interest:') !!}
                                        {!! Form::select('category_id', array(''=>'Select Category') + $cat,  null, ['class'=>'form-control']) !!}
                                        <br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-mobile-alt"></i> Your phone number is <b style="color: black">&nbsp;{{$u->phone}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        {!! Form::label('phone', 'Change Phone No:') !!}
                                        {!! Form::text('phone', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                        <br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-money-bill-wave"></i> You're awesomely paid of <b style="color: black">&nbsp;{{$u->salary}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        {!! Form::label('salary', 'Change Salary') !!}
                                        {!! Form::text('salary', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                        <br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-money-bill-wave"></i> <b style="color: black">&nbsp;{{$u->about}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('about', 'Change Status') !!}
                                    {!! Form::textarea('about', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'tell us something more about you']) !!}
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-key"></i> Keep your password confidential <b style="color: black">&nbsp;*********</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                        {!! Form::label('password', 'Change Password:') !!}
                                        {!! Form::text('password', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                        <br>
                                        {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <script>
                                var coll = document.getElementsByClassName("collapsible");
                                var i;

                                for (i = 0; i < coll.length; i++) {
                                    coll[i].addEventListener("click", function() {
                                        this.classList.toggle("active");
                                        var content = this.nextElementSibling;
                                        if (content.style.display === "block") {
                                            content.style.display = "none";
                                        } else {
                                            content.style.display = "block";
                                        }
                                    });
                                }
                            </script>

                        @endforeach
                    @endif



                </div>
            </div>

        </div>
    </section>

@stop

@section('foot')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

@stop

@section('album')
    <div class="text-center">
        <h1 style="font-style: italic; font-family: 'Comic Sans MS'; color: #e4606d">Your M<img height="70" width="70" src="{{ asset('images/cam.png')}}">st Precious Picture Album</h1>
    </div>
    <!-- gallery -->
    <section class="gallery py-5">
        <div class="container py-xl-5 py-sm-3">

            <div class="row w3ls_gallery_grids">

                @if($gallery)
                    @foreach($gallery as $g)
                        <div class="col-md-4 w3_agile_gallery_grid">

                            <div class="agile_gallery_grid mt-0">
                                <a style="width: 350px; height: 237px" title="User Uploaded Picture." href="{{ asset('user_upload/'. $g->path)}}">
                                    <div class="agile_gallery_grid1">
                                        <img style="width: 350px; height: 237px" src="{{ asset('user_upload/'. $g->path)}}" class="img-fluid" alt="Responsive image">
                                        <br>
                                    </div>
                                </a>
                                <br>
                            </div>

                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- //gallery -->

    @stop

