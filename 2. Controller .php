php artisan make:controller UserController

use App\Http\Controllers\UserController;
use App\Http\Controllers\Product\ProductController;

Route::get('/user',[UserController::class,"index"]);
Route::get("/user/{id}",[UserController::class,"show"]);

//controller code
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return "Hello this is user page";
    }
    public function show($id){
        return "User is $id";
    }
}

Route class group

  Route::controller(UserController::class)->group(function(){
    Route::get('/user','index');
    Route::get('/user/{id}','show');
});

Route name group

  Route::name("user")->group(function(){
    Route::get("/user",[UserController::class,"index"])->name("index");
    Route::get("/user/{id}",[UserController::class,"show"])->name("show");
});

Route path group using prefix

  Route::prefix("admin")->group(function(){
    Route::get("/dashboard",[AdminController::class,"dashboard"]);
});
