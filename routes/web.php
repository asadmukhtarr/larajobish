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
Route::get('/login','pagesController@login')->name('login');
Route::post('/login/user','pagesController@logincheck')->name('login');
Route::get('/sign-up','pagesController@create_user')->name('create.user');
Route::post('/sign-up/save','pagesController@save_user')->name('save.user');
Route::get('/logout',function(){
    Auth::logout();
    return redirect(route('home'));
})->name('logout');
// explained Already
//Auth::routes(); // login , // register , // reset 
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

Route::middleware('seeker')->namespace('seeker')->group(function(){
    Route::get('/apply/{id}','PagesController@apply')->name('apply.job');
    Route::post('/apply/save/{id}','PagesController@applysave')->name('apply.save');
});

Route::middleware('seeker')->namespace('seeker')->prefix('seeker')->group(function(){
    Route::get('/dashbaord','PagesController@dashbaord')->name('seeker.dashbaord');
    
});
// // for admin ..
Route::prefix('admin')->namespace('admin')->group(function(){
    Route::get('/dashboard','adminController@dashbaord')->name('admin.dashbaord');
    Route::prefix('users')->group(function(){
        Route::get('/seekers','adminController@seekers')->name('admin.seekers');
        Route::get('/provider','adminController@provider')->name('admin.provider');
        Route::get('/admin','adminController@admin')->name('admin.admin');
    });
    Route::get('/applications','adminController@applications')->name('admin.application');
    Route::get('/jobs','adminController@jobs')->name('admin.jobs');
    Route::get('/settings','adminController@setting')->name('admin.setting');
});
