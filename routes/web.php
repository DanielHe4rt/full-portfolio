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
    return view('portfolio');
});

Route::get('/test', function(){
    return view('test');
});

Route::post('/auth/login', 'Auth\\AuthController@postLogin')->name('auth-login');
Route::get('/auth', 'Admin\\ViewController@viewLogin');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', 'Admin\\ViewController@viewDashboard')->name('admin-dashboard');
});

Route::prefix('mailer')->group(function () {
    Route::get('/','Admin\\ViewController@viewAllMails')->name('get-mail');
    Route::get('/{mailId}','Mailer\\MailerController@getMail');
    Route::put('/{mailId}','Mailer\\MailerController@putMail');
    Route::post('/contact', 'Mailer\\MailerController@postMail')->middleware(['throttle:rate_limit,1'])->name('post-mail');
});


