<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    // Human Resource Web Pages
    public function dashboard() {
        return view('hr.dashboard');
    }
}
