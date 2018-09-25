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

    <table class="table table-striped" style="text-align: center">
        <thead>
            <tr style="text-align: center">
                <th style="text-align: center">Id</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Privilage</th>
                <th style="text-align: center">Encrypted Password</th>
                <th style="text-align: center">No User Acess Code</th>
                <th style="text-align: center">Created</th>
                <th style="text-align: center">Updated</th>
                <th style="text-align: center">Do Edit or Delete</th>
            </tr>
        </thead>
        <tbody>
        @if($alladmin)
            @foreach($alladmin as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->privilage}}</td>
                <td>{{$admin->password}}</td>
                <td>{{$admin->no_user_access}}</td>
                <td>{{$admin->created_at->diffForHumans()}}</td>
                <td>{{$admin->updated_at->diffForHumans()}}</td>
                <td><a href="{{route('admins.index')}}"><button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Move To Update Page</button></a></td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@stop