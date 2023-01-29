<?php

namespace App\Http\Controllers\seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\job;
use App\Models\application;
use Auth;
class PagesController extends Controller
{
    //
    public function dashbaord(){
        return view('seeker.dashbaord');
    }
    public function apply($id){
        $job = job::find($id);
        return view('apply',compact('job'));
    }
    // apply save
    public function applysave($id,Request $request){
        $application = new application;
        $application->description = $request->proposal;
        $application->user_id = Auth::id();
        $application->job_id = $id;
        $application->save();
        return redirect()->back();
    }
}
