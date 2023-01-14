<?php

namespace App\Http\Controllers\seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function dashbaord(){
        return view('seeker.dashbaord');
    }
}
