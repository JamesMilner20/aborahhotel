<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    //

    protected $fillable = [

        'room_id',
        'booked_by_id',
        'Air_conditioning_pref',
        'date_of_arrival',
        'date_of_departure',
        'price_id',
        'user_id'


        ];


    public function user(){

        return $this->belongsTo('App\User');

    }

    public function price(){

        return $this->belongsTo('App\Price');

    }



}
