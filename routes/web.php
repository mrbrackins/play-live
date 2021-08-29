<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgressBarController;

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


Route::get('/upload', [ProgressBarController::class, 'index']);
Route::post('/upload-doc-file', [ProgressBarController::class, 'uploadToServer']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
