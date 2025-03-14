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
    return view('welcome');
});
Route::get('/prizren', function () {
    return ('<h1>Shkolla Digjitale Prizren</h1>');
});
Route::get('/pz', function () {
    return ('<p>Shkolla Digjitale Prizren</p>');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/{id}', function ($id) {
    return "Admini me id: $id";
});

Route::get('/admin/{id2}', function ($id2=null) {
    return"Admini me id: $id2";
});


