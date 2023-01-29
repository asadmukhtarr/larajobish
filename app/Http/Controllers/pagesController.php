<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\job;
use Auth;

class pagesController extends Controller
{
    // home ..
    public function home()
    {
        $jobs = job::orderby('id','desc')->get();
        return view('welcome',compact('jobs'));
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
    public function create_user(Request $request){
        return view('auth.register');
    }
    public function save_user(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'type' => 'required'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = $request->type;
        $user->save();
        return redirect(route('login'));
    }
    // post a job ..
    public function create()
    {
        return view('postajob');
    }
    // login
    public function login(){
        return view('auth.login');
    }
    // check login
    public function logincheck(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);            
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // The user is active, not suspended, and exists.
            if(Auth::user()->type == 1){
                //return "seeker";
                return redirect(route('seeker.dashbaord'));
            } else if(Auth::user()->type == 0) {
                //return "provider";
               return redirect(route('provider.dashboard'));
            }
        } else {
           return redirect()->back();
        }
        
    }
}
