<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\СategoryController;
use App\Http\Controllers\HomeController;
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
    return redirect(route("home"));
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/product', function (){
    return view("pages.product");
})->name("product");
Route::get('/category', [СategoryController::class, 'index']);
Route::get('/pages', function (){
    return view("pages.premium");
})->name("pages");
