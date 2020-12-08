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
Route::get('show-rooms', 'RoomController@show')->name('rooms');
//return view(eat-and-drink/restaurant-morning)
Route::get('/eat-and-drink-morning', 'EatAndDrinkMorningController@show')->name('eat-drink-morning');
//return view(eat-and-drink/restaurant-morning)
Route::get('/lobby-bar', 'LobbyBarController@show')->name('lobby-bar');
//return view(more-space)
Route::get('/more-space', 'MoreSpaceController@show')->name('more-space');
// Post more-space form data
Route::post('/more-space-submit', [
    'uses' => 'MoreSpaceController@store',
    'as' => 'morespace.store'
]);
// Neighbourhood page: You can access it with 'route' as shown here <a href="{{ route('neighbourhood.show') }}">EXPLORE</a>
Route::get('/neighbourhood', [
    'uses' => 'NeighbourhoodController@show',
    'as' => 'neighbourhood.show'
]);
// Hotel Info
Route::get('/hotel-info', [
    'uses' => 'HotelInfoController@show',
    'as' => 'hotel-info.show'
]);

//Navigation-menu TODO Menu

Route::get('navigation-menu', 'RoyalPalmsHomePageController@index')->name('navigation-menu');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//PDF download
Route::get('/palms-royal-hotel/menu-restaurant/{menu}', 'EatAndDrinkMorningController@createPDF');
Auth::routes();

//room details
//Route::get('/room-details/rooms', 'RoomDetailsController@show')->name('room-details');

//room details by names
Route::get('/room/{name}', 'RoomDetailsController@showSingleRoom')->name('room-details');

//BOOK NOW
Route::get('/book-now', 'RoomDetailsController@bookNow')->name('book-now');

//BOOK NOW
Route::get('/cancel-reservation', 'RoomDetailsController@cancelReservation')->name('cancel-reservation');

//Admin panel
Route::prefix('admin')->group(function () {
    //Admin Dashboard
    Route::get('dashboard', 'Admin\DashBoardController@index')->name('get.dashboard');

    /*** Hotel ***/
    Route::get('hotel', 'Admin\HotelController@index')->name('hotel'); //Link used to display countries
    Route::get('hotel/list', 'Admin\HotelController@getHotel')->name('get.hotel'); //redundant, just used to get data that is displayed in the index

    //Edit Hotel
    Route::get('hotel/{id}/edit', 'Admin\HotelController@edit');
    //Store Hotel
    Route::post('hotel/store', 'Admin\HotelController@store')->name('hotel.store');
    //Update Hotel
    Route::post('hotel/update', 'Admin\HotelController@update')->name('hotel.update');
     //Delete Hotel
    Route::get('hotel/destroy/{id}', 'Admin\HotelController@destroy');


    /*** Countries Lists ***/
    Route::get('countries', 'Admin\CountryController@index')->name('countries'); //Link used to display countries
    Route::get('countries/list', 'Admin\CountryController@getCountries')->name('get.countries'); //redundant, just used to get data that is displayed in the index

    //Edit Country
    Route::get('countries/{id}/edit', 'Admin\CountryController@edit');
    //Store Country
    Route::post('countries/store', 'Admin\CountryController@store')->name('country.store');
    //Update Country
    Route::post('countries/update', 'Admin\CountryController@update')->name('country.update');
     //Delete Country
    Route::get('countries/destroy/{id}', 'Admin\CountryController@destroy');


    /*** Room ***/
    Route::get('rooms', 'Admin\RoomController@index')->name('rooms'); //Link used to display rooms
    Route::get('rooms/list', 'Admin\RoomController@getRooms')->name('get.rooms'); //redundant, just used to get data that is displayed in the index

    //Edit Room
    Route::get('room/{id}/edit', 'Admin\RoomController@edit');
    //Store Room
    Route::post('room/store', 'Admin\RoomController@store')->name('room.store');
    //Update Room
    Route::post('room/update', 'Admin\RoomController@update')->name('room.update');
     //Delete Room
    Route::get('room/destroy/{id}', 'Admin\RoomController@destroy');

});

/******** DROPZONE: A package to implement drag and drop of images *******/
//store hotel room images 
Route::post('dropzone/store','Admin\RoomController@imageStore');
//Delete hotel room images 
Route::post('delete-uploaded-image', 'Admin\RoomController@deleteImage');