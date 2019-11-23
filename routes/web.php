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
    if(env('APP_STATUS') === "MAINENTANCE"){
        return view('mainentance');
    }
    return view('portfolio');
});

Route::get('/test', function(){
    return view('test');
});

Route::post('/auth/login', 'Auth\\AuthController@postLogin')->name('auth-login');
Route::get('/auth', 'Admin\\ViewController@viewLogin');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', 'Admin\\ViewController@viewDashboard')->name('admin-dashboard');
    Route::get('/mailer','Admin\\ViewController@viewAllMails')->name('get-mail');
    Route::get('/skills','Admin\\ViewController@viewAllSkills')->name('get-skills');
});


Route::prefix('mailer')->group(function () {
    Route::get('/{mailId}','Mailer\\MailerController@getMail');
    Route::put('/{mailId}','Mailer\\MailerController@putMail');
    Route::post('/contact', 'Mailer\\MailerController@postMail')->middleware(['throttle:15'])->name('post-mail');
    Route::delete('/{mailId}','Mailer\\MailerController@deleteMail');
});

Route::prefix('skills')->group(function () {
    Route::get('/','Skills\\SkillsController@getSkills');
    Route::post('/','Skills\\SkillsController@postSkill');
    Route::get('/{skillId}','Skills\\SkillsController@getSkill');
    Route::put('/{skillId}','Skills\\SkillsController@putSkill');
    Route::delete('/{skillId}','Skills\\SkillsController@deleteSkill');
});
