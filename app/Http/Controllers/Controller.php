<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view("public.index");
    }

    public function about()
    {
        return view("public.about");
    }

    public function contact()
    {
        return view("public.contact");
    }

    public function handle_contact()
    {
    }
    public function posts()
    {
        return view("public.posts");
    }
}
