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
Route::get('About_Us', 'Frontform\FrontformController@about_us')->name('about_us');
Route::get('Contact_US', 'Frontform\FrontformController@contact_us')->name('contact_us');
Route::get('For-client', 'Frontform\FrontformController@for_client')->name('for_client');
Route::get('For-advisor', 'Frontform\FrontformController@for_advisor')->name('for_advisor');
Route::get('Pricing', 'Frontform\FrontformController@pricing')->name('pricing');
Route::get('Faq', 'Frontform\FrontformController@faq')->name('faq');


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

Route::get('/Profile', 'Adviser\DashboardController@advisor_profile')->name('advisor_profile');
Route::post('/update_profile', 'Adviser\DashboardController@update_profile')->name('update_profile');
Route::post('/update_advisor_data', 'Adviser\DashboardController@update_advisor_data')->name('update_advisor_data');
Route::post('/update_user_data', 'Adviser\DashboardController@update_user_data')->name('update_user_data');

Route::get('/contact', 'Adviser\ContactController@index')->name('contact');
Route::get('/dashboard/event', 'Calender\CalenderController@home')->name('calender');
Route::get('/dashboard/calender', 'Calender\CalenderController@text')->name('text');

Route::get('/dashboard/User/ListUser', 'User\UserController@user')->name('user');
Route::get('/dashboard/User/AddUser', 'User\UserController@add_user')->name('add_user');
Route::get('/dashboard/User/ViewUser', 'User\UserController@view_profile')->name('view_profile');
// Route::get('/Mail', 'User\UserController@mail')->name('mail');

Route::get('/Chat', 'User\UserController@chat')->name('chat');
Route::resource("mailer",'MailerController');
Route::post('/trash','MailerController@trash');
Route::post('/starred','MailerController@starred');
Route::get('/getmail','MailerController@getmessage');
Route::get('/getmails', 'MailerController@getMails')->name('getMails');

Route::get('/mailsetting', 'MailerController@getMailSetting')->name('mailsetting');
Route::post('/saveoutboundmailsetting', 'MailerController@saveOutboundMailSettings')->name('saveoutboundmailsetting');
Route::post('/saveinboundmailsetting', 'MailerController@saveInboundMailSettings')->name('saveinboundmailsetting');
Route::get('/mailtemplate', 'MailTemplateController@index')->name('mailtemplate');
Route::get('/addtemplate', 'MailTemplateController@create')->name('addtemplate');
Route::post('/savetemplate', 'MailTemplateController@store')->name('savetemplate');
Route::get('/templateedit/{templateid}', 'MailTemplateController@edit')->name('templateedit');
Route::put('/updatetemplate/{templateid}', 'MailTemplateController@update')->name('updatetemplate');
Route::delete('/deletetemplate', 'MailTemplateController@delete')->name('deletetemplate');
Route::get('/gettemplatebody', 'MailTemplateController@getTemplateBody')->name('gettemplatebody');
Route::get('/downloadattachment/{filename}', 'MailTemplateController@downloadAttachment')->name('downloadattachment');

/* INBOUND EMAILS APIs GOES HERE */
Route::get('/inboundmails', 'InboundMailController@getInboxEvent')->name('inboundmails');

/* END INBOUND EMAILS~~~~~~~~ */

Route::get('/dashboard/User/ViewUser/{id}', 'User\UserController@view_profile')->name('view_profile');
Route::get('/dashboard/ContactList', 'User\UserController@contacts')->name('contacts');
Route::post('/dashboard/add_contact', 'User\UserController@add_contact')->name('add_contact');
Route::get('/delete_contact/{id}','User\UserController@delete_contact')->name('delete_contact');

/*User to staff booking*/ 
Route::get('/staff_booking','User\User_to_staff_bookingController@staff_booking')->name('staff_booking');

Route::get('/invoice', 'Adviser\InvoiceController@invoice')->name('invoice');
Route::get('/invoice_list', 'Adviser\InvoiceController@invoice_list')->name('invoice_list');

Route::get('/advisor_request', 'User\UserController@advisor_request')->name('advisor_request');
Route::post('/advisor_request_send', 'User\UserController@advisor_request_send')->name('advisor_request_send');
Route::get('/user_request', 'Adviser\DashboardController@user_request')->name('user_request');
Route::post('/accept_request', 'Adviser\DashboardController@accept_userreq')->name('accept_userreq');
Route::get('/templates', 'Adviser\DashboardController@templates')->name('templates');

/*Group Mail Controller*/
Route::get('/template', 'GroupMailController@mail_template')->name('mail_template');
Route::get('/template_list', 'GroupMailController@mail_temp_list')->name('mailtemplist');
Route::get('/setting', 'GroupMailController@setting')->name('setting');
Route::get('/add_to_group_users/{group_users_id}', 'GroupMailController@add_to_group_users')->name('add_to_group_users');

Route::get('/Group', 'GroupMailController@groups')->name('groups');
Route::post('/add_group', 'GroupMailController@add_group')->name('add_group');
Route::get('/show_list/{id}', 'GroupMailController@show_list')->name('show_list');
Route::post('/group_list', 'GroupMailController@group_list')->name('group_list');
Route::post('/savetemplate', 'GroupMailController@store')->name('savetemplate');
Route::get('/mail', 'GroupMailController@mail')->name('mail');


Route::get('/Mail', 'User\UserController@mail')->name('mail');
Route::get('/Chat', 'User\UserController@chat')->name('chat');


/** Health Staff Route*/ 
Route::get('/add_staff', 'Adviser\Health_staffController@add_staff')->name('add_staff');
Route::post('/add_staff_details', 'Adviser\Health_staffController@add_staff_details')->name('add_staff_details');
Route::get('/staff_list', 'Adviser\Health_staffController@staff_list')->name('staff_list');
Route::get('/staff_profile/{id}', 'Adviser\Health_staffController@view_staff')->name('view_staff');
Route::post('/update_details', 'Adviser\Health_staffController@update_details')->name('update_details');
Route::get('/delete_data/{id}', 'Adviser\Health_staffController@delete_data')->name('delete_data');
Route::get('/staff_user', 'Adviser\Health_staffController@staff_user')->name('staff_user');
Route::get('/staff_detail/{id}', 'Adviser\Health_staffController@staff_detail')->name('staff_detail');

/* Food details*/
Route::get('/details', 'Adviser\FoodController@loc');
Route::get('/food_admin', 'Adviser\FoodController@food_admin')->name('food_admin');
Route::get('/add_product', 'Adviser\FoodController@add_product')->name('add_product');
Route::post('/product', 'Adviser\FoodController@product')->name('product');
Route::get('/view_product', 'Adviser\FoodController@view_product')->name('view_product');
Route::get('/edit_product/{id}', 'Adviser\FoodController@edit_product')->name('edit_product');
Route::post('/update_product', 'Adviser\FoodController@update_product')->name('update_product');
Route::get('/delete_product/{id}', 'Adviser\FoodController@delete_product')->name('delete_product');
Route::get('/food_index', 'Adviser\FoodController@food_index')->name('food_index');
Route::get('/food_result', 'Adviser\FoodController@food_result')->name('food_result');
Route::get('/restaurant', 'Adviser\FoodController@restaurant')->name('restaurant');
Route::get('/view_restaurant', 'Adviser\FoodController@view_restaurant')->name('view_restaurant');
Route::get('/checkout', 'Adviser\FoodController@checkout')->name('checkout');

/*Zomato*/ 
Route::get('/get_categories', 'Adviser\FoodController@get_categories')->name('get_categories');
Route::get('/get_restaurants', 'Adviser\FoodController@get_restaurants')->name('get_restaurants');
Route::get('/get_city', 'Adviser\FoodController@get_city')->name('get_city');
Route::get('/get_cuisines', 'Adviser\FoodController@get_cuisines')->name('get_cuisines');
Route::get('/get_daily_menu', 'Adviser\FoodController@get_daily_menu')->name('get_daily_menu');
Route::post('/search', 'Adviser\FoodController@search_establishments')->name('search_establishments');
Route::get('/location', 'Adviser\FoodController@location')->name('location');


/*******/ 

/* Notification details*/
Route::get('/notification','User\User_to_staff_bookingController@index')->name('notification');
Route::get('/getstaff_name','User\User_to_staff_bookingController@show_disease')->name('show_disease');
Route::post('/staff_booking','User\User_to_staff_bookingController@staff_booking')->name('staff_booking');


/* Booking */ 
Route::get('/Booking', 'Adviser\BookingController@booking')->name('booking');
Route::post('/booking','Adviser\BookingController@bookingsetting')->name('bookingsetting');
/* wait 1 min me pull karta hoon aab
Zoom */
Route::get('create/zoom','ZoomController@index')->name('zoomcreate');
Route::post('post/zoom','ZoomController@store')->name('zoomcreatepost');
Route::get('meetings/{mid}','ZoomController@host')->name('allmeeting');
Route::get('getmeeting','ZoomController@getmeeting')->name('getmeeting');
Route::get('status/{mid}','ZoomController@status')->name('status');
Route::get('invite/{mid}','ZoomController@invite')->name('invite');
Route::post('sendinvite','ZoomController@sendinvite')->name('sendinvite');
Route::get('invited','ZoomController@invited')->name('invited');
});

/** Front page Route**/
Route::get('/advisor-registration', 'Frontform\FrontformController@questioon_view')->name('advisor_question');
Route::post('/advisor/dashboard', 'Frontform\FrontformController@question')->name('insert');
Route::get('/user_registration', 'Frontform\FrontformController@home')->name('find_advisor');
Route::post('/user_registrations', 'Frontform\FrontformController@finadvisor')->name('finadvisor');

Route::get("/checkemail",'Frontform\FrontformController@checkemail')->name('checkeamil');


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['middleware' => ['auth']], function()
{
Route::get('Booknow','User\UserbookingController@index')->name('booknow');
Route::post('savebook','User\UserbookingController@savebook')->name('savebook');

});