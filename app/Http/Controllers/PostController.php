<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Barryvdh\Debugbar\Facades\Debugbar;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (isset(request()->search)) {
            $posts = Post::search(request()->search);
        } else {
            $posts = Post::latest()->with("owner")->paginate(8);
        }

        return view("dashboard.Posts.index", [
            "posts" => $posts
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.Posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "content" => ["required", "min:3"],
            "title" => ["required", "min:3"],
            "cover" => ["required"],
            "description" => ["required", "min:3"]
        ]);

        $validated["cover"] = $request->file("cover")->store("posts_images", "public");

        $validated["user_id"] = 1;

        Post::create($validated);

        return redirect(route("Dashboard.Posts"))->with("success", "Post Created successfully");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view("dashboard.Posts.edit", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            "content" => ["nullable", "min:3"],
            "title" => ["nullable"],
            "cover" => ["nullable", "min:3"],
            "description" => ["nullable", "min:3"]
        ]);


        $post = Post::find($id);

        if ($request->hasFile("cover")) {
            if ($post->cover && file_exists(public_path($post->cover))) {
                File::delete(public_path($post->cover));
            }
            $validated["cover"] = $request->file("cover")->store("posts_images", "public");
        }

        $post->update($validated);


        return redirect(route("Dashboard.Posts"))->with("success", "Post Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $cover = $post->cover;

        $path = public_path("storage/" . $cover);

        if (file_exists($path)) {
            File::delete($path);
        }

        $post->delete();
        return redirect(route("Dashboard.Posts"))->with("success", "Post Deleted successfully");
    }
}
