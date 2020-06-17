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
Route::get('/dashboard/event', 'Calender\CalenderController@home')->name('calender');
//Route::get('/dashboard/calender', 'Calender\CalenderController@calender')->name('calender');

Route::get('/dashboard/User/ListUser', 'User\UserController@user')->name('user');
Route::get('/dashboard/User/AddUser', 'User\UserController@add_user')->name('add_user');
Route::get('/dashboard/User/ViewUser', 'User\UserController@view_profile')->name('view_profile');
Route::get('/Mail', 'User\UserController@mail')->name('mail');
Route::get('/Chat', 'User\UserController@chat')->name('chat');


/** Front page Route**/
Route::get('/index', 'Frontform\FrontformController@index')->name('index');
Route::get('/index/advisor_question', 'Frontform\AdvisorquestionController@home')->name('advisor_question');
Route::post('/advisor_question/dashboard', 'Frontform\AdvisorquestionController@question')->name('insert');

Route::get('/index/find_advisor', 'Frontform\FindadvisorController@home')->name('find_advisor');

/* Zoom */
Route::get('create/zoom','ZoomController@index')->name('zoomcreate');
Route::post('post/zoom','ZoomController@store')->name('zoomcreatepost');

});