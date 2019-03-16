@extends('layouts.admin')




@section('content')


    <h1>Details of booking</h1>


    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Booked by: </strong>{{$booking->user->name}} {{$booking->created_at->diffForHumans()}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Room Type: </strong>{{$booking->price->description}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Date of Arrival: </strong>{{$booking->date_of_arrival}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Date of Departure: </strong>{{$booking->date_of_departure}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Unit Price: </strong>GH¢ {{$booking->price->price}}.00</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Total Cost: </strong>{{$booking->user->name}}</p>

    <div class="row container">
        <a href="{{route('bookings.edit',$booking->id)}}" class="btn btn-primary col-6">Edit Booking</a>


        {!! Form::open(['method'=>'DELETE','class'=>'col-6','action'=>['AdminUserController@destroy',$booking->id]]) !!}
        {{--<div class="form-group">--}}
            {!! Form::submit('Delete Booking',['class'=>'btn btn-danger col-12']) !!}
        {{--</div>--}}
        {!! Form::close() !!}
    </div>






@stop