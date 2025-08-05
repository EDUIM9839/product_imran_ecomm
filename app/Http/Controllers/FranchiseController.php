<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function dashboard()
    {
        return view('franchise.dashboard')->with('success', 'franchise Login Successfully');
    }
}
