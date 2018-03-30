<?php

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
    return view('home.homeRooms');
});

Route::resource('/homeRooms', 'HomeRoomsController');
Route::resource('/homeLectures', 'HomeLecturersController');

Auth::routes();


Route::group(['middleware' => 'acl',
    'roles' => 'administrator'
], function () {
    Route::resource('/users', 'UsersController');
    Route::resource('/buildings', 'BuildingsController');
    Route::resource('/rooms', 'RoomsController');
    Route::resource('/faculties', 'FacultiesController');
    Route::resource('/events', 'EventsController');
    Route::resource('/typeRooms', 'TypeRoomsController');
    Route::resource('/fieldStudies', 'FieldStudiesController');
});


Route::group(['middleware' => 'acl',
    'roles' => 'prowadzacy'
], function () {




});