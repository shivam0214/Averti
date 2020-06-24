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
Route::get('/', 'Frontform\FrontformController@index')->name('index');

/* Route::get('/', function() {
    return view('index');
}); */


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
/** Advisor Profile */
Route::get('/advisor_Profile', 'Adviser\DashboardController@advisor_profile')->name('advisor_profile');
Route::post('/update_profile', 'Adviser\DashboardController@update_profile')->name('update_profile');
Route::post('/update_data', 'Adviser\DashboardController@update_data')->name('update_data');


Route::get('/contact', 'Adviser\ContactController@index')->name('contact');
Route::get('/dashboard/event', 'Calender\CalenderController@home')->name('calender');
Route::get('/dashboard/calender', 'Calender\CalenderController@text')->name('text');

Route::get('/dashboard/User/ListUser', 'User\UserController@user')->name('user');
Route::get('/dashboard/User/AddUser', 'User\UserController@add_user')->name('add_user');
Route::get('/dashboard/User/ViewUser', 'User\UserController@view_profile')->name('view_profile');
// Route::get('/Mail', 'User\UserController@mail')->name('mail');
Route::get('/Chat', 'User\UserController@chat')->name('chat');
Route::resource("mailer",'MailerController');

/* wait 1 min me pull karta hoon aab
Zoom */
Route::get('create/zoom','ZoomController@index')->name('zoomcreate');
Route::post('post/zoom','ZoomController@store')->name('zoomcreatepost');

});

/** Front page Route**/
Route::get('/advisor-question', 'Frontform\FrontformController@questioon_view')->name('advisor_question');
Route::post('/advisor/dashboard', 'Frontform\FrontformController@question')->name('insert');
Route::get('/find_advisor', 'Frontform\FrontformController@home')->name('find_advisor');
Route::post('/finadvisor', 'Frontform\FrontformController@finadvisor')->name('finadvisor');

Route::get("/checkemail",'Frontform\FrontformController@checkemail')->name('checkeamil');
