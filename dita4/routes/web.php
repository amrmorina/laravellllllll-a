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
Route::get('/about', function () {
    return view('blog.about',['name'=>'<h1>Shkolla Digjitale</h1>']);
});
Route::get('/about', function () {
    return view('blog.about',['name'=>'<script>alert("Hello World")</script>']);
});

Route::get('/about', function () {
    return view('blog.about',[
        'name'=>'Arianit',
        'username'=>'Admin',
        'email'=>'admin@gmail.com',
        'adress'=>['Rr.Shuaib Spahiu','Rr. e Shkronjave'],
        'age'=>30
    ]);
});
