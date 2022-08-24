<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// => Authentication ==================
Route::get('/login', [AuthController::class, "login"])->name("Login")->middleware("guest");
Route::post('/login', [AuthController::class, "authenticate"]);
Route::get('/register', [AuthController::class, "register"])->name("Register")->middleware("guest");
Route::post('/register', [AuthController::class, "store"]);
Route::get('/profile', [AuthController::class, "profile"])->name("Profile")->middleware("auth");
Route::post('/profile', [AuthController::class, "profile"])->middleware("auth");
Route::get('/logout', [AuthController::class, "logout"])->name("logout")->middleware("auth");

// => Public routes ==================
Route::get("/", [Controller::class, "index"])->name("Home");
Route::get("/about", [Controller::class, "about"])->name("About");
Route::get("/contact", [Controller::class, "contact"])->name("Contact");
Route::get("/posts", [Controller::class, "posts"])->name("Posts");
Route::get("/posts/{id}", [Controller::class, "show"])->name("Posts.Show");

// => Private routes ==================
Route::middleware("auth")->prefix("dashboard")->group(function () {
    Route::get("/", DashboardController::class)->name("Dashboard");

    // posts
    Route::get("/posts", [PostController::class, "index"])->name("Dashboard.Posts");
    Route::get("/posts/{id}", [PostController::class, "show"])->name("Dashboard.Posts.Show")->where("id", "[0-9]+");
    Route::get("/posts/create", [PostController::class, "create"])->name("Dashboard.Posts.Create");
    Route::get("/posts/edit/{id}", [PostController::class, "edit"])->name("Dashboard.Posts.Edit");
    Route::post("/posts", [PostController::class, "store"]);
    Route::patch("/posts/{id}", [PostController::class, "update"]);
    Route::delete("/posts/{id}", [PostController::class, "destroy"]);

    // Categories
    Route::get("/categories", [CategoryController::class, "index"])->name("Dashboard.Categories");
    Route::post("/categories", [CategoryController::class, "store"]);
    Route::patch("/categories", [CategoryController::class, "update"]);
    Route::delete("/categories/{id}", [CategoryController::class, "destroy"]);

    // Users
    Route::get("/users", [UserController::class, "index"])->name("Dashboard.Users");
    Route::get("/users/create", [UserController::class, "create"])->name("Dashboard.Users.Create");
    Route::get("/users/edit/{id}", [UserController::class, "edit"])->name("Dashboard.Users.Edit");
    Route::post("/users", [UserController::class, "store"]);
    Route::patch("/users/{id}", [UserController::class, "update"]);
    Route::delete("/users/{id}", [UserController::class, "destroy"]);
});
