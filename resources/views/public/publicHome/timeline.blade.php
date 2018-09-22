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
                        <li class="nav-item">
                            <a class="nav-link" title="Logout" href="{{route('reg.create')}}"> <i class="fas fa-sign-out-alt"></i></a>
                        </li>

                    </ul>
                    <form action="#" method="post" class="form-inline my-2 my-lg-0 search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="{{route('timeline.index')}}"> <img class="img img-circle" src="{{ asset('user_faces/' . substr(session('photo'), 2, -2))}}" height="40" width="40"></a>
                </div>
            </nav>
        </header>
        <!-- //header -->
        <h1 class="inner-title-agileits-w3layouts">Check Your Profile and <img height="80" width="100" src="{{ asset('images/lvmsg.png')}}"> Requests</h1>
    </div>
    <!-- //banner -->

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
                    </div>
                    <div class="about-bottom">
                        <p class="paragraph-agileinfo text-white p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique.</p>
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

                            <button class="collapsible"><i class="fas fa-user"></i> Your name is <b style="color: black">{{$u->name}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-at"></i> here's your email <b style="color: black">{{$u->email}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    <br>
                                    {!! Form::submit('You Are Not Allowed To Change EMAIL', ['class'=>'btn btn-outline-danger disabled']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-transgender"></i> You're <b style="color: black">{{$u->sex}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('sex', 'Sex:') !!}
                                    <br>
                                    {!! Form::radio('sex', 'Male') !!} Male
                                    {!! Form::radio('sex', 'Female') !!} Female
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fab fa-autoprefixer"></i> You're <b style="color: black">{{$u->age}} years old</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('age', 'Name:') !!}
                                    {!! Form::text('age', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-church"></i> You're <b style="color: black">{{$u->religion}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    <br>
                                    {!! Form::label('religion', 'Name:') !!}
                                    {!! Form::select('religion', ['Christan' => 'Christan', 'Muslim' => 'Muslim', 'Hinduism' => 'Hinduism'], ['class'=>'input-group-text']) !!}
                                    <br><br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-prescription"></i> You're <b style="color: black">{{$u->occupation}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    <br>
                                    {!! Form::label('occupation', 'Name:') !!}
                                    {!! Form::select('occupation', ['Professor' => 'Professor', 'Job Holder' => 'Job Holder', 'Self Employed' => 'Self Employed']) !!}
                                    <br><br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-home"></i> You stay at <b style="color: black">{{$u->address}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('address', 'Name:') !!}
                                    {!! Form::text('address', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="far fa-laugh-wink"></i> Your Interest comes on <b style="color: black">{{$u->category_id}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('category_id', 'Name:') !!}
                                    {!! Form::select('category_id', array(''=>'Select Category') + $cat,  null, ['class'=>'form-control']) !!}
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-mobile-alt"></i> Your phone number is <b style="color: black">{{$u->phone}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('phone', 'Name:') !!}
                                    {!! Form::text('phone', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-money-bill-wave"></i> You're awesomely paid of <b style="color: black">{{$u->salary}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('salary', 'Name:') !!}
                                    {!! Form::text('salary', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                                    <br>
                                    {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            <button class="collapsible"><i class="fas fa-key"></i> Keep your password confidential <b style="color: black">{{$u->password}}</b></button>
                            <div class="content">
                                <p>
                                    {!! Form::model($u, ['method'=>'PATCH', 'action'=>['TimelineController@update', $u->id]]) !!}
                                    {!! Form::label('password', 'Name:') !!}
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