<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\democontrollers;
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

    // dd(config("app.name"));
    // dd(config("queue.default"));
    // dd($_ENV);    
    return view('welcome');
});


Auth::routes();

Route::middleware('auth')->group(function () {
    // Add your event routes here
});
