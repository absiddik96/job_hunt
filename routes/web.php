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

Route::get('/home', 'HomeController@index')->name('home');
