<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (isset(request()->search)) {
            $categories = Category::search(request()->search);
        } else {
            $categories = Category::with("posts")->paginate(8);
        }

        foreach ($categories as $category) {
            $category->{"count"} = $category->posts->count();
        }

        return view("dashboard.Categories.index", ["categories" => $categories]);
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
            "name" => ["required", "min:3"]
        ]);

        Category::create($validated);

        return back()->with("success", "Category Created Successfully");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            "id" => ["required", "exists:categories,id"],
            "name" => ["required", "min:3"]
        ]);

        $category = Category::find($validated["id"]);

        unset($validated["id"]);

        $category->update($validated);

        return back()->with("success", "Category updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::find($id);
        $category->delete();

        return back()->with("success", "deleted successfully");
    }
}
