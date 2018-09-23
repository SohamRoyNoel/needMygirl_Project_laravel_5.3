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

    <table class="table table-hover">
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

                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

    @stop