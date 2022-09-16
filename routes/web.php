<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BoardController;
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

Route::group(['prefix' => 'app', 'middleware' => 'auth'], function () {
    Route::get('/',[AppController::class,'home'])->name('dash.home');
    Route::get('/quadros/{slug}',[BoardController::class,'show'])->name('dash.board');
});


require __DIR__.'/auth.php';
