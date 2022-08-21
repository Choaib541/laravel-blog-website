<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('dashboard.index', ["route" => "dashboard"]);
    }

    public function posts()
    {
        return view('dashboard.posts', ["route" => "dashboard"]);
    }

    public function categories()
    {
        return view('dashboard.categories');
    }

    public function users()
    {
        return view('dashboard.users');
    }
}
