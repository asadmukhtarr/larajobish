<?php

use Illuminate\Support\Facades\Route;

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

# Direct From Views ..
// home ..
Route::get('/', 'pagesController@home')->name('home');
// about
Route::get('/about', 'pagesController@about')->name('about');
// contact 
Route::get('/contact','pagesController@contact')->name('contact');
// All jobs
Route::get('/jobs', 'pagesController@jobs')->name('jobs');
// post a job ..
Route::get('/post-a-job', 'pagesController@create')->name('post.job');

// explained Already
Auth::routes(); // login , // register , // reset 
// after login
//Route::get('/home', [HomeController::class, 'index'])->name('home');
