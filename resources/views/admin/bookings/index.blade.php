@extends('layouts.admin')




@section('content')


    <h1>Bookings</h1>

    @if($bookings)





          @foreach($bookings as $booking)

              <div class="list-group">

                  <p><a href="#" class="list-group-item list-group-item-action">You have booked {{$booking->price->description}}, {{$booking->created_at->diffForHumans()}} for {{$booking->date_of_arrival}}</a></p>





              </div>


          @endforeach


        <p>{{'No bookings made'}}</p>


      @endif







@stop