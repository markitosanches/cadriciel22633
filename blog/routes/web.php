<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogController;

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



Route::get('/test', [TestController::class, 'index']) ;
Route::get('/test-a', [TestController::class, 'test']) ;
Route::get('/page-form', [TestController::class, 'form']) ;
Route::post('/page-form', [TestController::class, 'index']);

Route::get('/home', [BlogController::class, 'index']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/message', [BlogController::class, 'message']);
Route::get('/contact', [BlogController::class, 'contact']);
Route::post('/contact', [BlogController::class, 'contactForm']);