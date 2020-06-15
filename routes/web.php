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
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();

/* verify email */
Route::get('/verify/{token}', 'api\AuthController@verify')->name('verify');
/* verify email end */
Route::group(['middleware' => ['auth']], function()
{
Route::get('/dashboard', 'Adviser\DashboardController@index')->name('dashboard');
Route::get('/contact', 'Adviser\ContactController@index')->name('contact');
Route::get('/dashboard/calender', 'Calender\CalenderController@calender')->name('calender');


});