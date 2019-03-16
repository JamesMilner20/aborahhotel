@extends('layouts.admin')




@section('content')


    <h1>Create new booking</h1>

    {!! Form::open(['method'=>'POST','action'=>'PostController@store']) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}







@stop