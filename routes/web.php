<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [PageController::class,'index'])->name('index');
Route::get('news/{id}', [NewsController::class, 'index'])->name('news.index');
Route::get('new/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('page/{id}', [PageController::class, 'show'])->name('page.index');
Route::get('contact',[ContactController::class,'index'])->name('contact.index');
