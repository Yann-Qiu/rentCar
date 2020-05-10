<?php

namespace App\Http\Controllers;

use App\Compte;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginCont extends Controller
{
    //
    public function index(){
        return view('page.login');
    }

    public function valide(){
        $user = Compte::where('userName','=',$_POST["userName"])->get();
        if($user->first()) {
            if ($user->toArray()[0]['password'] === $_POST['pwd']){
                Session::put('userName', $_POST["userName"]);
                return response()->json('{"status":"true"}');
            }
            else {
                return response()->json('{"status":"false"}');
            }
        }
        else {
            return response()->json('{"status":"false"}');
        }

    }

    public function logout(){
        Session::remove('userName');
        return Redirect::to('/');
    }
}
