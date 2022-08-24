<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (isset(request()->search)) {
            $users = User::search(request()->search);
        } else {
            $users = User::latest()->paginate(8);
        }

        return view("dashboard.Users.index", ["users" => $users]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.Users.create");
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
            "picture" => ["required"],
            "name" => ["required", "min:3"],
            "email" => ["required", "email"],
            "password" => ["required", "min:8", "confirmed"],
        ]);

        $validated["picture"] = $request->file("picture")->store("users_pictures", "public");
        $validated["password"] = bcrypt($validated["password"]);

        User::create($validated);

        return redirect(route("Dashboard.Users"))->with("success", "User created successfully");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view("dashboard.Users.edit", ["user" => $user]);
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
            "name" => ["nullable", "min:3"],
            "email" => ["nullable", "email"],
            "password" => ["nullable", "min:8", "confirmed"],
        ]);


        if (!$validated["password"]) {
            unset($validated["password"]);
        } else {
            $validated["password"] = bcrypt($validated["password"]);
        }

        $user = User::find($id);

        if ($request->hasFile("picture")) {
            $path = public_path("storage/" . $user->picture);

            if (file_exists($path)) {
                File::delete($path);
            }

            $validated["picture"] =  $request->file("picture")->store("users_pictures", "public");
        }

        $user->update($validated);

        return redirect(route("Dashboard.Users"))->with("success", "User Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $picture = $user->picture;

        $path = public_path("storage/" . $picture);

        if (file_exists($path)) {
            File::delete($path);
        }

        $user->delete();
        return redirect(route("Dashboard.Users"))->with("success", "User Successfully Deleted");
    }
}
