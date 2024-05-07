<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recruiterController extends Controller
{
    public function index()
    {
        return view('recruiter.index');
    }
    public function postroom()
    {
        return view('recruiter.postRoom');
    }
    public function detailPostroom()
    {
        return view('recruiter.postRoomDetail');
    }
    public function profile()
    {
        return view('recruiter.profile');
    }
}
