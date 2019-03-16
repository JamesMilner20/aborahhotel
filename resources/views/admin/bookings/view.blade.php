@extends('layouts.admin')




@section('content')


    <h1>Details of booking</h1>


    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Booked by: </strong>{{$booking->user->name}} {{$booking->created_at->diffForHumans()}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Room Type: </strong>{{$booking->price->description}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Date of Arrival: </strong>{{$arrival = $booking->date_of_arrival}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Date of Departure: </strong>{{$departure = $booking->date_of_departure}}</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Unit Price: </strong>GH¢ {{$cost = $booking->price->price}}.00</p>
    <p class="col-md-8 offset-md-2"><strong class="col-md-3">Total Cost: </strong>{{$arrival == $departure ? $cost : 'GH¢ '.$cost * round((strtotime($departure) - strtotime($arrival))/(60*60*24)).'.00'}}</p>

    <div class="row container">
        <a href="{{route('bookings.edit',$booking->id)}}" class="btn btn-primary col-6">Edit Booking</a>


        {!! Form::open(['method'=>'DELETE','class'=>'col-6','action'=>['AdminUserController@destroy',$booking->id]]) !!}
            {!! Form::submit('Delete Booking',['class'=>'btn btn-danger col-12']) !!}
        {!! Form::close() !!}
    </div>






@stop