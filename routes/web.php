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
/* Route::get('/login', 'auth\LoginController@login')->name('login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'HomeController@main')->name('main');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/details', 'HomeController@details')->name('details');
Route::get('/qualification', 'HomeController@qualification')->name('qualification');
Route::get('/personal', 'HomeController@personal')->name('personal');
Route::get('/profile_dash', 'HomeController@profile_dash')->name('profile_dash');
Route::get('/compose_mail', 'HomeController@compose_mail')->name('compose_mail');
Route::get('/new_mail', 'HomeController@new_mail')->name('new_mail');
Route::get('/task', 'HomeController@task')->name('task');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/leads', 'HomeController@leads')->name('leads');
Route::get('/event', 'HomeController@event')->name('event');


Route::get('/add_user', 'HomeController@add_user')->name('add_user');
Route::post('/insert', 'UsersController@add_user')->name('add');
Route::get('/user_list', 'UsersController@create')->name('user_list');
Route::get('/index', 'UsersController@index')->name('index');
Route::get('/view/{uuid}','UsersController@edit')->name('edit');
Route::post('/update','UsersController@update')->name('update');
Route::get('/roles','RolesController@index')->name('roles');
Route::post('/addroles','RolesController@add')->name('addroles'); */
Route::get('/dashboard', 'Adviser\DashboardController@index')->name('dashboard');

