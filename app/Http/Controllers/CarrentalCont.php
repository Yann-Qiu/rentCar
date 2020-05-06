<?php

namespace App\Http\Controllers;

use App\Compte;
use App\Demande;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CarrentalCont extends Controller
{
    //
    public function index(){
        if(!Session::get('userName')){
            Cookie::queue('loginInfo','please login first');
            return redirect('login');
        }else {
            $userName = Session::get('userName');
            $user_id = Compte::where('userName',$userName)->first()->id;
            $demandeList = Demande::with("compte")->find($user_id)->get()->toArray();
            return view('page.carrental',compact('userName','user_id','demandeList'));
        }
    }
}
