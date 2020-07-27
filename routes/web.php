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
Route::get('/getMails', 'MailerController@getMails')->name('getMails');

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

Route::get('/invoice', 'Adviser\InvoiceController@invoice')->name('invoice');
Route::get('/invoice_list', 'Adviser\InvoiceController@invoice_list')->name('invoice_list');

Route::get('/advisor_request', 'User\UserController@advisor_request')->name('advisor_request');
Route::post('/advisor_request_send', 'User\UserController@advisor_request_send')->name('advisor_request_send');
Route::get('/user_request', 'Adviser\DashboardController@user_request')->name('user_request');
Route::post('/accept_request', 'Adviser\DashboardController@accept_userreq')->name('accept_userreq');

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

/* Notification details*/
Route::get('/notification','Notification@index')->name('index');



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