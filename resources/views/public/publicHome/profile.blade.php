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
        @if($myuser)
            @foreach($myuser as $m)
                <h1 class="inner-title-agileits-w3layouts">You are checking {{$m->name}}'s profile.... Awww..</h1>
            @endforeach
        @endif
    </div>
    <!-- //banner -->

@stop

@section('content')

    @if($myuser)

        @foreach($myuser as $fin)

            <div class="d-lg-flex main-story">
                <div class="col-lg-6 order-md-2 story-info text-right">
                    <h4 class="story-names">{{$fin->name}}</h4>
                    <span class="styory-date">Sex : {{$fin->sex}}</span>
                    <h3 class="subheading-wthree mb-3">Age : {{$fin->age}}, {{" "}}</h3>
                    <span class="styory-date">Religion :  {{$fin->religion}}</span>
                    <span class="styory-date">Occupation : {{$fin->occupation}}</span>
                    <span class="styory-date">Resident : {{$fin->address}}</span>
                    <span class="styory-date">Interested in finding: {{$fin->category->name}}</span>
                    <span class="styory-date">Earnings approx : {{$fin->salary}}</span>

                    <h3 class="subheading-wthree mb-3"> <font color="#ff8c00"> Show Some Interest </font></h3>

                </div>

                <table class="">
                    <tr>
                        <td>
                            <div class="col-lg-5">
                                <img src="{{ asset('user_faces/' . $fin->photo->path)}}" class="img img-circle" height="470" width="420" alt="Cinque Terre">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                @foreach($fin->like as $lk)

                                    <a title="Let's like" href="{{route('userHome.edit', $fin->id)}}"> <img height="100" width="150" src="{{ asset('images/lovebutton.jpg')}}"></a>{{$lk->like}}

                                @endforeach
                                <br>
                                <a title="Go Back to main page" href="{{route('userHome.index')}}"> <img height="150" width="150" src="{{ asset('images/back.png')}}"></a>
                                <br>
                                <a title="Send a message to your love" href="{{route('userHome.index')}}"> <img height="150" width="150" src="{{ asset('images/message.jpg')}}"></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        @endforeach

    @endif



@stop