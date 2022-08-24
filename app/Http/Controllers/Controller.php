<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guest;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $categories = Category::latest()
            ->take(8)
            ->get();

        $posts = Post::latest()
            ->with('owner')
            ->paginate(4);


        return view('public.index', ['posts' => $posts, 'categories' => $categories]);
    }
    public function about()
    {
        return view('public.about');
    }
    public function contact()
    {
        return view('public.contact');
    }
    public function posts()
    {
        if (isset(request()->search)) {
            $posts = Post::search(request()->search);
        } else {
            $posts = Post::latest()
                ->with('owner', 'categories')
                ->paginate(6);
        }

        $categories = Category::latest()
            ->take(8)
            ->get();

        return view('public.posts', ['posts' => $posts, 'categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::latest()
            ->take(8)
            ->get();

        $post = Post::with('owner', 'categories')->find($id);

        return view('public.show', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }
}
