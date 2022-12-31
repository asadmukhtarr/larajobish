<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jobsController extends Controller
{
    //
     // jobs 
      // for create job
    public function create_job(){
        return view('provider.newpost');
    }
    // save ..
    public function save(Request $request){
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'category' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'salary_type' => 'required',
            'country' => 'required',
            'city' => 'required',
            'description' => 'required',
        ]);
        
    }
}
