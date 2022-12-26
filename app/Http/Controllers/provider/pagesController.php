<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    // for dashboard
    public function dashboard(){
        return view('provider.dashboard');
    }
    // for applications ..
    public function applications(){
        return view('provider.applications');
    }
    // jobs 
    public function jobs(){
        return view('provider.jobs');
    }
    //  settings ..
    public function settings(){

        return view('provider.settings');
    }
    // for create job
    public function create_job(){
        return view('provider.newpost');
    }
}
