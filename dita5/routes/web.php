<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('blog.home');
});
Route::get('/about', function () {
    return view('blog.about');
});

Route::get('/contact', function () {
    return view('blog.contact');
}); 




Route::get('/',[ProjectController::class,'index']);
Route::get('/about',[ProjectController::class,'about']);
Route::get('/contact',[ProjectController::class,'create']);

