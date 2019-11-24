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
    return view('welcome');
});

Auth::routes(['register' => false]);

/* Sign Up */
Route::get('/sign-up/candidate', 'Auth\RegisterController@showRegistrationForm')->name('sign-up.candidate');
Route::post('/sign-up/candidate', 'Auth\RegisterController@register')->name('register.candidate');
Route::get('/sign-up/advertiser', 'Auth\AdvertiserRegisterController@showRegistrationForm')->name('sign-up.advertiser');
Route::post('/sign-up/advertiser', 'Auth\AdvertiserRegisterController@register')->name('register.advertiser');

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'namespace' => 'Candidate', 'as' => 'candidate.'], function () {
    /*Profile*/
    Route::get('profile','ProfilesController@profile')->name('profile');
    Route::post('upload-avatar','ProfilesController@uploadAvatar')->name('profile.upload-avatar');
    Route::put('update-profile','ProfilesController@update')->name('profile.update');

    /*Resume*/
    Route::get('resume','ResumeController@resume')->name('resume');
    Route::post('upload-resume','ResumeController@uploadResume')->name('resume.upload');

    /*Skills*/
    Route::resource('skills','SkillsController')->except(['create','show']);
});


