<?php

use App\Http\Controllers\FumettoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/admin', [PageController::class, 'admin'])->name('admin.index');


Route::get('/admin/comics/create', [FumettoController::class, 'create'])->name('admin.comics.create');

Route::get('/admin/comics/edit', [FumettoController::class, 'edit'])->name('admin.comics.edit');

Route::get('/admin/comics/destroy', [FumettoController::class, 'destroy'])->name('admin.comics.destroy');

Route::resource('comics', FumettoController::class);
