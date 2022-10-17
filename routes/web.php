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
    return "Страница приветствия";
});

Route::get('/about', function () {
    return "О проекте";
});

Route::get('/news', function () {
    return "Список новостей";
});

Route::get('/news/{id}', function (string $id){
    return "Единичная новость № $id";
});
