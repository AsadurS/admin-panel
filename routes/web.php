<?php
Route::get('/', 'Hom2Controller@index');
Route::resource('/teacher','TeacherController')->middleware('verified');
Route::get('/pdf/asad','TeacherController@pdf')->middleware('verified');
Route::resource('/user','AdminController')->middleware('verified');;
Route::get('/user/active/{id}','AdminController@active');
Route::get('/user/inactive/{id}','AdminController@inactive');
Route::get('/user/delete/{id}','AdminController@delete');
Route::get('/view/{id}', 'UserController@view')->name('');
Route::get('/update/{id}', 'UserController@update')->name('');
Route::post('/updated', 'UserController@updated')->name('');
Route::get('/change/{id}', 'UserController@change')->name('');
route::post('/change/pass','UserController@passChange');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/sendtoto', 'MailController@send')->name('asad');
Route::get('/send', 'MailController@sendtoto')->name('');
Route::get('/sendto/{id}', 'MailController@sendto')->name('');
Route::post('/sendmail', 'MailController@sendmail')->name('sendmail');
//upload file and image
Route::get('/upload','uploadController@index')->name('index.upload');
Route::post('/upload/store','uploadController@store')->name('index.store');
Route::get('/upload/view','uploadController@view')->name('');
Route::get('/upload/fileview/{id}','uploadController@fileView')->name('');
//login with facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/asad', 'AdminController@asad');
Route::get('/log', 'AdminController@logout')->name('log');
//chart
Route::get('/chart','ChartController@chart');
//Route::get('/send','ChatController@send');
Route::get('/pdf','AdminController@pdf');
//subcriber
Route::post('/add/subcriber','SubctriberController@create');
Route::get('/subcriber/view','SubctriberController@index');
Route::get('/subcriber/delete/{id}','SubctriberController@delete');
Route::get('/verifyfirst','SubctriberController@verify')->name('verifymail');
Route::get('/verify/subcriber/{email}/{token}','SubctriberController@subverify')->name('verifylink');
