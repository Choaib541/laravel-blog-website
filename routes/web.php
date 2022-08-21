<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// => Authentication
Route::get('/login', [AuthController::class, "login"])->name("login");
Route::post('/login', [AuthController::class, "authenticate"]);
Route::get('/register', [AuthController::class, "register"])->name("register");
Route::post('/register', [AuthController::class, "store"]);
Route::get('/profile', [AuthController::class, "profile"])->name("profile");
Route::post('/profile', [AuthController::class, "profile"]);


// => public
Route::get("/", [Controller::class, "index"])->name("home");
Route::get("/about", [Controller::class, "about"])->name("about");
Route::get("/contact", [Controller::class, "contact"])->name("contact");
Route::post("/contact", [Controller::class, "handle_contact"]);

// => Posts
Route::get("/posts", [Controller::class, "posts"])->name("public_posts");
Route::resource("/posts", PostController::class)->only([
    "create",
    "store",
    "show",
    "edit",
    "update",
    "destroy",
]);

// => categories
Route::resource("categories", CategoryController::class);

//Dashboard
Route::get("/dashboard", [DashboardController::class, "dashboard"])->name("dashboard");
Route::get("/dashboard/posts", [DashboardController::class, "posts"])->name("posts");
Route::get("/dashboard/categories", [DashboardController::class, "categories"])->name("categories");
Route::get("/dashboard/users", [DashboardController::class, "users"])->name("users");
