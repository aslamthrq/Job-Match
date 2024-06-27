<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class candidatesController extends Controller
{
    public function index()
    {
        return view('candidates.index');
    }
    public function showProfile()
    {
        return view('candidates.profile');
    }
    
    public function lowongan()
    {
        return view('candidates.jobVacancy');
    }
    public function status()
    {
        return view('candidates.status');
    }
    public function statusDetail()
    {
        return view('candidates.statusDetail');
    }
}
