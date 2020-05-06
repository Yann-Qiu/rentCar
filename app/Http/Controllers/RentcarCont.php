<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RentcarCont extends Controller
{
    //
    public function index()
    {
        if(!Session::get('userName')){
            Cookie::queue('loginInfo','please login first');
            return Redirect::to('login');
        }else {
            //require('tpl/rentcar.php');
            return view('page.rentcar');
        }
    }
}
