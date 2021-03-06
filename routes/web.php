<?php

use App\Restaurant;
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

Route::get('/restaurants/index', 'RestaurantController@index');

Route::get('/restaurants/show/{id}', 'RestaurantController@show');

Route::get('/restaurants/create', 'RestaurantController@create');

Route::post('/restaurants/create', 'RestaurantController@store');
