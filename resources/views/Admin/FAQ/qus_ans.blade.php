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
                        <h3>Question and Answers</h3>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#myModal1">More Info</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@stop

@section('content')
    <table class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>Q Id</th>
                <th>Question</th>
                <th>Description</th>
                <th>Qustion Asked</th>
            </tr>
        </thead>
        <tbody>
        @if($qus)
            @foreach($qus as $q)
            <tr>
                <td>{{$q->id}}</td>
                <td>{{$q->question}}</td>
                <td>{{$q->description}}</td>
                <td>{{$q->created_at}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>


@stop