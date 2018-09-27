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
                        <li class="nav-item">
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
        <h1 class="inner-title-agileits-w3layouts">Frequently Asked Questions</h1>
    </div>

@stop

@section('content')

    <style>
        .collapsible {
            background-color: #b8c9f1;
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
            background-color: #1cc7ff;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }
    </style>

    <section class="contact py-5">
        <div class="container py-xl-5 py-sm-3">
            <h5 class="main-w3l-title mb-sm-3 mb-2">Find Your question down bellow</h5>
            @if($qus)
                    @foreach($qus as $q)
                        <div class="row">
                            <div class="col-lg-12 wthree_contact_left">
                                <button class="collapsible" style="color: black"><b><h5>{{$q->question}}</h5></b>
                                </button>
                                <div class="content">
                                    asked : {{$q->created_at->diffForHumans()}}
                                    <p><b>Description:</b> <br>{{$q->description}}</p>

                                    <b>Replies</b>
                                    @foreach($q->replies as $rep)
                                        <table class="table table-borderless table-warning">
                                            <tr>
                                                <td>
                                                    {{$rep->reply}}
                                                </td>
                                            </tr>
                                        </table>
                                        @endforeach

                                    {!! Form::open(['method'=>'POST', 'action'=>'ReplyController@store', 'files'=>true]) !!}

                                            <div class="form-group">
                                                {!! Form::textarea('reply', null, ['class'=>'form-control', 'placeholder'=>'Post a reply']) !!}
                                            </div>

                                            {{ Form::hidden('question_id', $q->id) }}

                                            <div class="form-group">
                                                {!! Form::submit('Reply', ['class'=>'btn btn-primary']) !!}
                                            </div>

                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                        <br>
                @endforeach
            @endif
        </div>
    </section>

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
@stop