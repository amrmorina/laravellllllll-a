<?php

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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/user/{id}', function ($id) {
    return "This is admin with ID : $id";
});
Route::get('/admin/{id?}', function ($id=001) {
    return "This is admin with ID : $id";
});
Route::get('/admin2/{id}', function ($id) {
    return "This is admin with ID : $id";
})->where('id','[0-9]+');

Route::get('/admin2/{id}', function ($id) {
    return "This is admin with ID : $id";
})->where('id','[a-z,A-Z]+');




Route::get('/admin2/{name}/{id}', function ($name,$id) {
    return "This is user with name  : $name, and ID:$id";
})->where('name','[a-z,A-Z]+','id','[0-9]+');

