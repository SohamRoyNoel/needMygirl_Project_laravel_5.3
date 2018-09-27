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
                        <h3>Category Related to What People Want</h3>
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
                                    <h5>Text Input</h5>
                                </div>
                                {!! Form::open(['method'=>'POST', 'action' =>'AdminCategoryController@store','files'=>true]) !!}
                                <div class="col-md-9 grid-form1">

                                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Add To category']) !!}
                                    <span>This is a place to add category</span>
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

                            @include('pertial.validationErr')

                        </div>
                    </div>
                    <div class="col-md-6 form-grid">
                        <div class="form-grid1">
                            <h4><span> List of </span> Categories</h4>
                        </div>
                        <div class="form-grid1">
                            <div class="bs-docs-example">
                                <table class="table table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($category)
                                        @foreach($category as $c)
                                            <tr>
                                                <td>{{$c->id}}</td>
                                                <td>{{$c->name}}</td>
                                                <td>{{$c->created_at->diffForHumans()}}</td>
                                                <td>{{$c->updated_at->diffForHumans()}}</td>
                                                <td>
                                                        <a href="{{route('updates.id', $c->id)}}" data-toggle="modal" data-target="#myModal1" class="btn btn-primary">Update</a>
                                                </td>
                                                <td>
                                                    {!! Form::open(['method'=>'Delete', 'action' =>['AdminCategoryController@destroy', $c->id]]) !!}
                                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="compose-grids">

                            <h3>Edit The Category </h3>
                            @if($category)
                                @foreach($category as $cat)


                                    {!! Form::model($cat, ['method'=>'PATCH', 'action'=>['AdminCategoryController@update', $cat->id]]) !!}

                                    <div class="form-group">
                                        <input class="form-control" type="text" value="Old name : {{$cat->name}}" disabled>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Updated name']) !!}
                                    </div>
                                    {!! Form::submit('Close', ['class'=>'btn btn-primary', 'data-dismiss'=>'modal']) !!}
                                    {!! Form::submit('Save changes', ['class'=>'btn btn-success']) !!}

                                    {!! Form::close() !!}
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop