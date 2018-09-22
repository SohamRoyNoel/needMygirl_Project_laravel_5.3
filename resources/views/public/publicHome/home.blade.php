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
        <h1 class="inner-title-agileits-w3layouts">You will find your love here</h1>
    </div>
    <!-- //banner -->

@stop

@section('content')

    @if($find)
        @foreach($find as $fin)
        <!-- Stories -->
        <section class="stories-section py-5">
            <div class="container py-xl-5 py-sm-3">
                <h5 class="main-w3l-title mb-sm-3 mb-2"></h5>
                <div class="d-lg-flex main-story">
                    <div class="col-lg-7 story-info">
                        <h4 class="story-names">{{$fin->name}}</h4>
                        <span class="styory-date">Sex : {{$fin->sex}}</span>
                        <span class="styory-date">Age, Religion : {{$fin->age}}, {{" "}}, {{$fin->religion}}</span>
                        <span class="styory-date">Occupation : {{$fin->occupation}}</span>
                        <span class="styory-date">Resident : {{$fin->address}}</span>
                        <span class="styory-date">Interested in finding: {{$fin->category->name}}</span>
                        <span class="styory-date">Earnings approx : {{$fin->salary}}</span>


                        <h3 class="subheading-wthree mb-3"> <font color="#ff8c00"> Show Some Interest </font></h3>


                            <div class="form-group">

                                    @if($fin->sex == 'Male')
                                        {!! Form::submit('Let him know your interest', ['class'=>'btn btn-primary btn-lg active']) !!}
                                    @else
                                        {!! Form::submit('Let her know your interest', ['class'=>'btn btn-primary btn-lg active']) !!}
                                    @endif

                                   <a href="{{route('userHome.show', $fin->id)}}"> {!! Form::submit('Watch Profile', ['class'=>'btn btn-secondary btn-lg active']) !!}</a>
                            </div>



                    </div>
                    <div class="">
                        <img src="{{ asset('user_faces/' . $fin->photo->path)}}" class="img img-circle no-gutters" height="470" width="420" alt="Cinque Terre">
                    </div>
                </div>
            </div>
        </section>

        <!-- //Stories -->
        @endforeach
    @endif

    <nav aria-label="Page navigation example">
        <div class="pagination justify-content-center">

                {{$find->render() }}<br>

        </div>
    </nav>

    <nav aria-label="Page navigation example">
        <div class="pagination justify-content-center">

           <font color="#ff8c00"> You're on page : {{$find->currentPage() }}</font><br>

        </div>

    </nav>
<br>

@stop