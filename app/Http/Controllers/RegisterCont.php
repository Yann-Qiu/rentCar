<?php

namespace App\Http\Controllers;

use App\Compte;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class RegisterCont extends Controller
{
    //
    public function index()
    {
        return view('page.register');
    }

    public function register()
    {
        if(Compte::where('userName',Request::post('name'))->get()->first()){
            Cookie::queue('regis_info','Sorry, username has already existed');
            return Redirect::to('regis');
        }
        Compte::create([
            'userName' => Request::post('name'),
            'email' => Request::post('email'),
            'password' => Request::post('pwd')
        ]);
        Cookie::queue('loginInfo','Register successfully, please login');
        return Redirect::to('login');
    }
}
