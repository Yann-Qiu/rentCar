<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class Index extends Controller
{
    //
    public function index()
    {
        return view('page.index');
    }
}
