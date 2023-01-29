<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function dashbaord(){
        return view('admin.dashboard');
    }
    // seeker ..
    public function seekers(){
        return view('admin.users.seeker');
    }
    // provider
    public function provider(){
        return view('admin.users.provider');
    }
    // admin
    public function admin(){
        return view('admin.users.admin');
    }
    // applications
    public function applications(){
        return view('admin.applications');
    }
    // jobs 
    public function jobs(){
        return view('admin.jobs');
    }
    // setting
    public function setting(){
        return view('admin.setting');
    }
}
