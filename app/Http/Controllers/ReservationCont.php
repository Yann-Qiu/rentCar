<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class ReservationCont extends Controller
{
    //
    public function index()
    {
        return view('page.reservation');
    }

    public function valide()
    {
        Demande::create([
            'car_id' => Request::post('carId'),
            'compte_id' => Request::post('userId'),
            'name' => Request::post('name'),
            'licence' => Request::post('licence'),
            'startTime' => Request::post('startTime'),
            'duration' => Request::post('duration'),
            'lieu' => Request::post('lieu'),
            'type' => Request::post('type'),
            'passengerNum' => Request::post('passengerNum')
        ]);
        return Redirect::to('carrent');
    }
}
