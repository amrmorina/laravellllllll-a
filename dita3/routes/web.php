<?php


use App\Http\Controllers\PostsController;
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
    return view('welcome');
});

// Route::get('/home',[BlogController::class,'index']);
Route::get('/home',[PostsController::class,'index']);
Route::get('/contact',[PostsController::class,'create']);
Route::post('/blog',[PostsController::class,'store']);