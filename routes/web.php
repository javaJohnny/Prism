<?php

use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use App\Jobs\SendEmail;
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
// TEST //
Route::get('/test', function(){
    return view ('test.show');
});

Route::get('/landing', function(){
    return view('landing.marketing');
});
Route::get('/', function(){
    return view('landing.login');
});

Route::get('queue', function(){
    $job = (new SendEmail())->onQueue('emails');
    dispatch($job);
    return "Email Sent Succesfully";
});

Route::get('sendEmail', function(){
    $job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(40));
    dispatch($job);
    return "Email was Succesfully Sent";
});

// PROFILE //
Route::get('/profile/{user}', 'ProfileController@show');
Route::get('/profile/{user}/edit', 'ProfileController@edit');
Route::put('/profile/{user}/edit/update', 'ProfileController@update');
Route::post('/profile/{user}/post', 'ProfileController@post');


// FOLLOW //
Route::get('/follow/{user}', "UserController@followUser");
Route::get('/unfollow/{user}', 'UserController@unfollowUser');


// POST //
Route::get('/dashboard', 'PostController@index');
Route::get('/dashboard/{post}/edit', 'PostController@edit');
Route::put('/dashboard/{post}/update', 'PostController@update');
Route::post('/dashboard/post', 'PostController@store');
Route::get('/dashboard/{post}', 'PostController@show');
Route::delete('/dashboard/{post}/delete', 'PostController@destroy');
// COMMENT //
Route::get('/dashboard/{post}/{comment}/edit', 'CommentController@edit');
Route::put('/dashboard/{post}/{comment}/update', 'CommentController@update');
Route::post('/dashboard/{comment}/comment', 'CommentController@store');
Route::delete('/dashboard/{post}/{comment}/delete', 'CommentController@destroy');
// LIKE //
Route::post('/like/{post}', 'PostController@like');
Route::post('/unlike/{post}', 'PostController@unlike');
Route::post('/like/{post}/{comment}', 'CommentController@like');
Route::post('/unlike/{post}/{comment}', 'CommentController@unlike');


// SESSION //
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
Route::post('/register', 'RegistrationController@store');
Route::post('/register/update', 'RegistrationController@store');
