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
Route::middleware('auth')->prefix('provider')->namespace('provider')->group(function(){
    Route::get('/dashboard', 'pagesController@dashboard')->name('provider.dashboard');
    Route::get('/manage-candiates', 'pagesController@applications')->name('provider.applications');
    Route::get('/jobs','jobsController@jobs')->name('provider.jobs');
    Route::get('/job/delete/{id}','jobsController@delete')->name('delete.job');
    Route::get('/post-a-job', 'jobsController@create_job')->name('create.job'); 
    Route::post('/save/job','jobsController@save')->name('posts.job');
    Route::get('/job/{id}','jobsController@editjob')->name('job.edit');
    Route::post('/job/update/{id}','jobsController@updatejob')->name('update.job');
    Route::get('/settings', 'pagesController@settings')->name('provider.settings');  

});
// Route::middleware('seeker')->group(function(){

// });
// Route::middleware('admin')->group(function(){

// });
Route::get('/home', 'homeController@index')->name('home');
