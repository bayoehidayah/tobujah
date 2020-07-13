<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', "DefaultController@index")->name("default");

// Auth::routes(['verify' => true]);
Auth::routes();

// Route::middleware("web", "auth", 'verified')->group(function(){
Route::middleware("web", "auth")->group(function(){
    Route::get("dashboard", "DefaultController@dashboard")->name("dashboard");

    //Admin
    Route::get("user", "Admin\UserController@index")->name("user");
});
