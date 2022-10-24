<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminIndexController::class, 'index'])->name('admin.index');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/newsOne/{id}', [NewsController::class, 'show'])->name('newsOne');
Route::get('/news/category/', [NewsController::class, 'сategory'])->name('category');
Route::get('/news/category/{id}', [NewsController::class, 'сategoryId'])->name('categoryId');



//Route::get('/welcome', function () {
//    return view('menu',['message' => 'Страница приветствия']);
//});
//
//Route::get('/about', function () {
//    return view('menu',['message' => 'О проекте']);;
//});
//
//Route::get('/news', function () {
//    return view('menu',['message' => 'Список новостей']);;
//});
//
//Route::get('/news/{id}', function (string $id){
//    return view('menu',['message' => 'Новость № $id']);;
//});
