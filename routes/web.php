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

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/job-details/{jobPost}', 'HomeController@jobPostDetails')->name('home.job-post-details');
});


Auth::routes(['register' => false]);

/* Sign Up */
Route::get('/sign-up/candidate', 'Auth\RegisterController@showRegistrationForm')->name('sign-up.candidate');
Route::post('/sign-up/candidate', 'Auth\RegisterController@register')->name('register.candidate');
Route::get('/sign-up/advertiser', 'Auth\AdvertiserRegisterController@showRegistrationForm')->name('sign-up.advertiser');
Route::post('/sign-up/advertiser', 'Auth\AdvertiserRegisterController@register')->name('register.advertiser');

Route::get('/home', 'HomeController@index')->name('home');

/*Advertiser*/
Route::group(['middleware' => 'auth', 'namespace' => 'Advertiser', 'as' => 'advertiser.'], function () {
    /*Job Post*/
    Route::get('dashboard', 'JobPostsController@index')->name('dashboard');
    Route::resource('job-posts','JobPostsController')->except(['index']);

    /*Applicants*/
    Route::get('job-post/{jobPost}/applicants','ApplicantsController@applicants')->name('applicants');
    Route::get('applicant/{applicants}/details','ApplicantsController@applicantDetails')->name('applicant.details');
});


/*Candidate*/
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

    /*Job Apply*/
    Route::post('job-apply/{jobPost}', 'JobAppliesController@apply')->name('job.apply');
});


