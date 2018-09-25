@extends('layouts.adminApp')

@section('headBlock')

    <div class="main-page">
        <div class="four-grids col-md-offset-3">
            <div class="col-md-8 four-grid">
                <div class="four-grid3">
                    <div class="icon">
                        <i class="fas fa-tags" aria-hidden="true"></i>
                    </div>
                    <div class="four-text">
                        <h3>Admin List</h3>
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
        <div class="grids">
            <div class="form-section">
                <div class="col-md-6 form-grid">
                    <div class="form-grid1">

                        <div class="bottom-form">
                            <div class="col-md-3 grid-form">
                                <h5>Name</h5>
                            </div>
                            {!! Form::open(['method'=>'POST', 'action' =>'AdminaddController@store','files'=>true]) !!}
                            <div class="col-md-9 grid-form1">

                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name of new admin']) !!}
                                <span>This is a place to add name</span>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-3 grid-form">
                                <h5>Email</h5>
                            </div>
                            <div class="col-md-9 grid-form1">

                                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email of the admin']) !!}
                                <span>This is a place to add email</span>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-3 grid-form">
                                <h5>Password</h5>
                            </div>
                            <div class="col-md-9 grid-form1">

                                {!! Form::password('password', null, ['class'=>'form-control', 'placeholder'=>'Admin\'s Password']) !!}
                                <span>This is a place to add password</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="bottom-form">
                            <div class="col-md-3 grid-form">

                            </div>
                            <div class="col-md-9 grid-form1">

                                <a href=""> {!! Form::submit('Add', ['class'=>'btn btn-sm btn-primary']) !!}</a>
                                {!! Form::submit('Reset', ['class'=>'btn btn-sm btn-warning']) !!}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
                <div class="col-md-6 form-grid">
                    <div class="form-grid1">
                        <h4><span> List of </span> Admins</h4>
                    </div>

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

                    @if($allAdmin)
                        @foreach($allAdmin as $admin)

                            <button class="collapsible">
                                {!! Form::open(['method'=>'Delete', 'action' =>['AdminaddController@destroy', $admin->id]]) !!}
                                <i class="fas fa-user"></i> Admin is<b style="color: black">&nbsp;{{$admin->name}}</b> &nbsp; {!! Form::submit('Remove', ['class'=>'btn btn-danger right-align']) !!}
                                {!! Form::close() !!}
                            </button>
                            <div class="content">
                                <p>
                                <table class="table table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$admin->id}}</td>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                    {!! Form::model($admin, ['method'=>'PATCH', 'action'=>['AdminaddController@update', $admin->id]]) !!}
                                            {!! Form::label('name', 'Change Name:') !!}
                                            {!! Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name']) !!}
                                            <br>

                                            {!! Form::label('email', 'Change Email:') !!}
                                            {!! Form::text('email', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name']) !!}
                                            <br>

                                            {!! Form::label('password', 'Change Password:') !!}
                                            {!! Form::text('password', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name']) !!}
                                            <br>
                                            {!! Form::submit('Change', ['class'=>'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </p>
                            </div>

                            @endforeach
                    @endif

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



                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>


@stop