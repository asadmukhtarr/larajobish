<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    // home ..
    public function home()
    {
        return view('welcome');
    }
    // about 
    public function about()
    {
        return view('about');
    }
    // contact 
    public function contact(){
        return view('contact');
    }
    // jobs 
    public function jobs()
    {
        return view('jobs');
    }
    // post a job ..
    public function create()
    {
        return view('postajob');
    }
}
