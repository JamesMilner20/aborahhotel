@extends('layouts.admin')


@section('content')

    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>'true']) !!}

    <div class="row">

        <div class="form-group col-md-6">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-4">
            {!! Form::label('mobile_number','Mobile Number') !!}
            {!! Form::number('mobile_number',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-4">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',[''=>'Choose Options'] + $roles ,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-4">
            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
        </div>

    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Picture of Identification Card (ID Card)') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@stop