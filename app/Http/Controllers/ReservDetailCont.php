<?php

namespace App\Http\Controllers;

use App\Compte;
use App\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservDetailCont extends Controller
{
    //
    public function index($id){
        $userName = Session::get('userName');
        $user_id = Compte::where('userName',$userName)->first()->id;
        $demande = Demande::with("compte")->find($user_id)->find($id)->toArray();
        return view('page.reservDetail',compact('demande'));
    }
}
