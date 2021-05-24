<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', 'RoyalPalmsHomePageController@show')->name('palms-royal-homepage');

//return view(about-hotel)
Route::get('about', 'AboutHotelController@show')->name('about');

//return view(rooms)
Route::get('show-rooms', 'RoomController@show')->name('show-rooms');
//return FILTERED(rooms)
Route::post('show-rooms', 'RoomController@show')->name('filter-rooms');

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

//return view(available-rooms)
Route::get('available-rooms/{days}/{checkin}/{checkout}', 'AvailableRoomsController@index')->name('available-rooms');

//Navigation-menu TODO Menu

Route::get('navigation-menu', 'RoyalPalmsHomePageController@index')->name('navigation-menu');

Auth::routes(['verify' => true]);

/***Login Route ***/
Route::post('login/{locale}', 'Auth\LoginController@login');

/***Register Route ***/
Route::post('register', 'Auth\RegisterController@register');

//PDF download
Route::get('/palms-royal-hotel/menu-restaurant/{menu}', 'EatAndDrinkMorningController@createPDF');


//room details by names
Route::get('/room/{name}', 'RoomDetailsController@showSingleRoom')->name('room-details');

//BOOK NOW
Route::get('/book-now', 'RoomDetailsController@bookNow')->name('book-now');

//BOOK NOW
Route::get('/cancel-reservation', 'RoomDetailsController@cancelReservation')->name('cancel-reservation');


Route::group(['middleware' => ['auth', 'admin']], function () {
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


        /*** Facility ***/
        Route::get('facilities', 'Admin\FacilityController@index')->name('facilities'); //Link used to display facilities
        Route::get('facilities/list', 'Admin\FacilityController@getFacilities')->name('get.facilities'); //redundant, just used to get data that is displayed in the index

        //Edit Facility
        Route::get('facility/{id}/edit', 'Admin\FacilityController@edit');
        //Store Facility
        Route::post('facility/store', 'Admin\FacilityController@store')->name('facility.store');
        //Update Facility
        Route::post('facility/update', 'Admin\FacilityController@update')->name('facility.update');
        //Delete Facility
        Route::get('facility/destroy/{id}', 'Admin\FacilityController@destroy');

        
        /*** Capacity ***/
        Route::get('capacities', 'Admin\CapacityController@index')->name('capacities'); //Link used to display capacities
        Route::get('capacities/list', 'Admin\CapacityController@getCapacities')->name('get.capacities'); //redundant, just used to get data that is displayed in the index

        //Edit capacity
        Route::get('capacity/{id}/edit', 'Admin\CapacityController@edit');
        //Store capacity
        Route::post('capacity/store', 'Admin\CapacityController@store')->name('capacity.store');
        //Update capacity
        Route::post('capacity/update', 'Admin\CapacityController@update')->name('capacity.update');
        //Delete capacity
        Route::get('capacity/destroy/{id}', 'Admin\CapacityController@destroy');


         /*** Floors ***/
        Route::get('floors', 'Admin\FloorController@index')->name('floors'); //Link used to display floors
        Route::get('floors/list', 'Admin\FloorController@getFloors')->name('get.floors'); //redundant, just used to get data that is displayed in the index

        //Edit Floor
        Route::get('floor/{id}/edit', 'Admin\FloorController@edit');
        //Store Floor
        Route::post('floor/store', 'Admin\FloorController@store')->name('floor.store');
        //Update Floor
        Route::post('floor/update', 'Admin\FloorController@update')->name('floor.update');
        //Delete Floor
        Route::get('floor/destroy/{id}', 'Admin\FloorController@destroy');


        /****ROLES AND PERMISSIONS */

        //Route::resource('users', 'UserController');
        Route::get('roles-and-permissions/store', 'Admin\RoleAndPermissionController@store');
        Route::get('roles-and-permissions/create', 'Admin\RoleAndPermissionController@create');
        Route::get('roles-and-permissions/index', 'Admin\RoleAndPermissionController@index')->name('roles-and-permissions.index');
        Route::get('roles-and-permissions/show/{id}', 'Admin\RoleAndPermissionController@show');
        Route::get('roles-and-permissions/edit/{id}', 'Admin\RoleAndPermissionController@edit');
        Route::post('roles-and-permissions/update/{id}', 'Admin\RoleAndPermissionController@update');
        Route::delete('roles-and-permissions/destroy', 'Admin\RoleAndPermissionController@destroy');
    });
});

/******** DROPZONE: A package to implement drag and drop of images *******/
//store hotel room images 
Route::post('dropzone/store', 'Admin\RoomController@imageStore');
//Delete hotel room images 
Route::post('delete-uploaded-image', 'Admin\RoomController@deleteImage');

//successful payment
Route::get('successful-payment', 'SuccessfullyPaidController@index')->name('successful-payment');

// //Cancelled payment
Route::get('cancelled-payment', 'CancelledPaymentController@index')->name('cancelled-payment');

Route::get('paywithpaypal/{id}', 'PaypalPaymentController@payWithPaypal')->name('paywithpaypal');
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalPaymentController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalPaymentController@getPaymentStatus',));

/** Cancel room reservation **/
Route::post('cancel-by-email', 'ModifyOrCancelReservationController@cancelByEmailAndPassword')->name('cancel.email.password');
Route::post('cancel-by-password', 'ModifyOrCancelReservationController@cancelByPasswordAndReservationNumber')->name('cancel.reservation.number');

// Submit reservation modifications
Route::get('reservation-modification', 'ModifyOrCancelReservationController@updateReservation')->name('reservation.update');

// Language change
Route::get('locale/{locale}', 'LocalizationController@languageChange');

