<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/about', function () {
    return view('about', [ "title"=>"About"]);
});

Route::get('/contact', function () {
    return view('contact', [ "title"=>"Contact"]);
});

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
