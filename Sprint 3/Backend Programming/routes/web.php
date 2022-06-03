<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;

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

/*Web app pages*/
Route::view("/home", "homepage");

Route::view("/home/blogs", "blogs");

Route::view("/home/about", "about");


/*Login pages and routes*/

/*Login view with middleware for checking login session.*/
Route::get("/home/login", [AccountController::class,'login'])->middleware('alreadyLoggedIn');

/*Login user with directed path name.*/
Route::post("/home/login-user", [AccountController::class,'loginUser'])->name('login-user');

/*User account with middleware to prevent user to access account.*/
Route::get("/home/account", [AccountController::class, 'account'])->middleware('isLoggedIn');

/*Logout user*/
Route::get("/home/logout", [AccountController::class, 'logout']);



/*Registration pages and routes*/

/*Registration view with middleware for checking login session.*/
Route::get("/home/registration", [AccountController::class,'registration'])->middleware('alreadyLoggedIn');

/*Register user view with directed path name.*/
Route::post("/home/register-user", [AccountController::class,'registerUser'])->name('register-user');




Route::get("/create-post", [PostController::class,'createPost'])->name('post.create');
Route::post("/create-post", [PostController::class,'savePost'])->name('post.save');



