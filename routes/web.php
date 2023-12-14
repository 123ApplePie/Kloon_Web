<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('index');
});

Route::view('/test','test');
Route::get('/contact',[IndexController::class,'contact'])->name('contact');
Route::post('/contact',[IndexController::class,'AddMessage'])->name('AddMessage');
Route::get('/websites',[IndexController::class,'websites'])->name('websites');
Route::get('/webshops',[IndexController::class,'webshops'])->name('webshops');