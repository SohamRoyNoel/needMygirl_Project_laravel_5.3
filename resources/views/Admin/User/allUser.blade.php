@extends('layouts.adminApp')

@section('headBlock')

    <div class="main-page">
        <div class="four-grids col-md-offset-3">
            <div class="col-md-8 four-grid">
                <div class="four-grid3">
                    <div class="icon">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="four-text">
                        <h3>Users</h3>
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
            <th>Id</th>
            <th>Role</th>
            <th>Name</th>
            <th>Email</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Relegion</th>
            <th>Occupation</th>
            <th>Address</th>
            <th>Interested</th>
            <th>Phone</th>
            <th>Photo</th>
            <th>Salary</th>
            <th>Password</th>
            <th>About</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Update</th>
            <th>Delete</th>


        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->sex}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->religion}}</td>
                    <td>{{$user->occupation}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->category->name}}</td>
                    <td>{{$user->phone}}</td>
                    <td><img class="img img-circle" height="50" width="50" src="{{asset('user_faces/'.$user->photo->path)}}"></td>
                    <td>{{$user->salary}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->about}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td><a href="{{route('admin.edit', $user->id)}}" data-toggle="modal" data-target="#myModal1" class="btn btn-primary"><i style="size: 5pc" class="fas fa-pen-nib"></i></a></td>

                    <td>
                        {!! Form::open(['method'=>'Delete', 'action' =>['AdminUserController@destroy', $user->id]]) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="compose-grids">
                        <form>
                            <h3>New Message </h3>
                            <div class="form-group">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Updated name']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Updated name']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Updated name']) !!}
                            </div>
                            {!! Form::submit('Close', ['class'=>'btn btn-primary', 'data-dismiss'=>'modal']) !!}
                            {!! Form::submit('Save changes', ['class'=>'btn btn-success']) !!}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop