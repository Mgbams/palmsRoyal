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

Route::get('palms-royal-homepage', 'RoyalPalmsHomePageController@show')->name('palms-royal-homepage');
Route::get('/', 'RoyalPalmsHomePageController@show')->name('palms-royal-homepage');
Route::get('navigation', function () {
    return view('main-navigation');
});

//return view(about-hotel)
Route::get('about', 'AboutHotelController@show')->name('about');
//return view(rooms)
Route::get('rooms', 'RoomController@show')->name('rooms');
//return view(eat-and-drink/restaurant-morning)
Route::get('/eat-and-drink-morning', 'EatAndDrinkMorningController@show')->name('eat-drink-morning');
//return view(eat-and-drink/restaurant-morning)
Route::get('/lobby-bar', 'LobbyBarController@show')->name('lobby-bar');
//return view(more-space)
Route::get('/more-space', 'MoreSpaceController@show')->name('more-space');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//routes.php
Route::get('view/{slashData?}', 'ExampleController@getData')
    ->where('slashData', '(.*)');
