<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('home');
    }

    public function homePage(Request $request)
    {
        return view('welcome');
    }
}
