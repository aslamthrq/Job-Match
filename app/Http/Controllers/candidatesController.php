<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class candidatesController extends Controller
{
    public function index()
    {
        return view('candidates.index');
    }
}
