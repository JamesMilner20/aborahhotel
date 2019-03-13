@extends('layouts.admin')


@section('content')

    <h1>Edit User</h1>

    @include('includes.form_error')

    <div class="row">

        <div class="col-sm-3">

            <img height="300" src="{{$user->photo?$user->photo->file:'No ID uploaded'}}" alt="" class="card-img">

        </div>

        <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUserController@update', $user->id],'files'=>'true']) !!}

                <div class="row">

                    <div class="form-group col-sm-6">
                        {!! Form::label('name','Name') !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('email','Email') !!}
                        {!! Form::email('email',null,['class'=>'form-control']) !!}
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-sm-4">
                        {!! Form::label('mobile_number','Mobile Number') !!}
                        {!! Form::number('mobile_number',null,['class'=>'form-control']) !!}

                        @if ($errors->has('mobile_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mobile_number') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group col-sm-4">
                        {!! Form::label('role_id','Role') !!}
                        {!! Form::select('role_id',[''=>'Choose Options'] + $roles ,null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-4">
                        {!! Form::label('is_active','Status') !!}
                        {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-sm-6">
                        {!! Form::label('photo_id','Picture of Identification Card (ID Card)') !!}
                        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('password','Password') !!}
                        {!! Form::password('password',['class'=>'form-control']) !!}
                    </div>

                </div>

                <div class="row">

                <div class="form-group col-6">
                    {!! Form::submit('Update User',['class'=>'btn btn-primary col-12']) !!}
                </div>
            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE','class'=>'col-6','action'=>['AdminUserController@destroy',$user->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete User',['class'=>'btn btn-danger col-12']) !!}
                </div>
            {!! Form::close() !!}
                </div>

        </div>

    </div>


@stop