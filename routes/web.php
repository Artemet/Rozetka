<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\СategoryController;
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
Route::get('/home', function (){
   return view("pages.home.index");
})->name("home");
Route::get('/product', function (){

    return view("pages.product");
})->name("product");
Route::get('/category', [СategoryController::class, 'index']);
