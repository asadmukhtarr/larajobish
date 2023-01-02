<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\job;
use Auth;
class jobsController extends Controller
{
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
        $post = new job;
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->description = $request->description;
        $post->type = $request->type;
        $post->salary_type = $request->salary_type;
        $post->salary = $request->salary;
        $post->location = $request->location;
        $post->city = $request->city;
        $post->country = $request->country;
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->back()->with('message','Job Posted Successfully');
    }
    // jobs 
    public function jobs(){
        $jobs = job::where('user_id',Auth::id())->orderby('id','desc')->get();
        //return $jobs;
        return view('provider.jobs',compact('jobs'));
    }
    // delete job
    public function delete($id){
        $job = job::find($id);
        $job->delete();
        return redirect()->back()->with('delete','Job Deleted Successfully');
    }
}
