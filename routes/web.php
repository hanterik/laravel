<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('menu',['message' => 'Страница приветствия']);
});

Route::get('/about', function () {
    return view('menu',['message' => 'О проекте']);;
});

Route::get('/news', function () {
    return view('menu',['message' => 'Список новостей']);;
});

Route::get('/news/{id}', function (string $id){
    return view('menu',['message' => 'Новость № $id']);;
});
