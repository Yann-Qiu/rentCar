<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('carrent', 'carrentalcont@index');

Route::get('dest', 'destinationcont@index');

Route::get('/', 'index@index');

Route::get('login', 'logincont@index');
Route::post('logincont/valide', 'logincont@valide');
Route::get('logincont/logout', 'logincont@logout');

Route::get('pricing', 'pricingcont@index');

Route::get('regis', 'registercont@index');
Route::post('registercont/register', 'registercont@register');

Route::post('reserv', 'reservationcont@index');
Route::post('reservationcont/valide', 'reservationcont@valide');

Route::get('rent', 'rentcarcont@index');

Route::get('reservDet/{id}', 'reservDetailCont@index');
