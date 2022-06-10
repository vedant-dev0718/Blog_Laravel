<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\demoController;
use App\Http\Controllers\HtmlFormController;
use App\Http\Controllers\reqController;
use App\Http\Controllers\sessController;
use App\Http\Controllers\storeController;
use PharIo\Manifest\ApplicationName;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get("users",[UsersController::class,'loadView']);


// Route::view("user","users");

// Route::post("users",[HtmlFormController::class,'getData']);
// Route::view("login","formUsers");

// Route::view("noaccess","test3");


// Group Middleware Tutorial Route
// Route::view("home","home");
// Route::view("noaccess","noacess");

// Route::group(["middleware"=>['protectPage']],function(){
//     Route::view("users","users");
// });

/**
 *
 * Route Middleware Tutorial Route
 */

// Route::view("users","users");
// Route::view("home","rMiddle1")->middleware('protectPage');
// Route::view("noaccess","middle2");



// Route::get("users",[demoController::class,'index']);

// Route::get("users",[reqController::class,'testRequest']);
// Route::view("login","users");

// Route::view("login","login");
// Route::view("profile", "profile");
// Route::get('/logout', function () {
//     if (session()->has('username')) {
//         session()->pull('username', null);
//     }
//     return redirect('login');
// });

// Route::get('/login', function () {
//     if (session()->has('username')) {
//         return redirect('profile');
//     }
//     return view('login');
// });


// Route::post("post", [sessController::class, 'userLogin']);


// Route::view('store' , 'storeUser');
// Route::post("storep", [storeController::class, 'store']);

// Route::view('locali','locali');
Route::get('/locali/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('locali');
});
