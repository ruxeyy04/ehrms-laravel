<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnDevController extends Controller
{
    public function dashboard () {
        return  view('learndev.dashboard');
    }

    public function profile () {
        return  view('learndev.profile');
    }
}
