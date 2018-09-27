@extends('layouts.adminApp')


@section('headBlock')

    <div class="main-page">
        <div class="four-grids col-md-offset-3">
            <div class="col-md-8 four-grid">
                <div class="four-grid3">
                    <div class="icon">
                        <i class="fas fa-question"></i>
                    </div>
                    <div class="four-text">
                        <h3>User Gallery</h3>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#myModal1">More Info</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@stop

@section('content')

    <div class="main-page">
        <!--buttons-->
        <div class="gallery-section">
            <h2>Gallery</h2>
            <div class="gallery-grids">
                @if($photo)
                    @foreach($photo as $p)
                        <div class="col-md-4 gallery-grid">
                            <img style="height: 350px; width: 420px" src="{{ asset('user_upload/'.$p->path)}}" class="img-responsive" alt="/">
                        </div>
                    @endforeach
                @endif

                <center>
                    <nav>
                            {{$photo->render()}}
                    </nav>
                </center>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    </div>

@stop