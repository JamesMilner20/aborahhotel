@extends('layouts.admin')




@section('content')


    <h1>Bookings</h1>

    @if(Session::has('deleted_user'))

        <p>{{session('deleted_user')}}</p>

    @endif


    @if($bookings)

          @foreach($bookings as $booking)

              <div class="list-group text-center">

                  <p><a href="{{route('bookings.show',$booking->id)}}" class="list-group-item list-group-item-action">You have booked a {{$booking->price->description}}, {{$booking->created_at->diffForHumans()}} for {{$booking->date_of_arrival}}. It costs GH¢ {{$booking->price->price}}.00</a></p>

              </div>

          @endforeach

    @else

        <p>{{'No bookings made'}}</p>

    @endif



@stop