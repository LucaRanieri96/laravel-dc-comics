<?php

use App\Http\Controllers\ComicController;
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


////Route::get('/admin/comics/create', [FumettoController::class, 'create'])->name('admin.comics.create');

//Route::get('/admin/comics/{comic}/edit', [FumettoController::class, 'edit'])->name('admin.comics.edit');

//Route::put('/admin/comics/{comic}', [FumettoController::class, 'update'])->name('admin.comics.update');

//Route::delete('/admin/comics/{comic}', [FumettoController::class, 'destroy'])->name('admin.comics.destroy');

Route::resource('/admin/comics', ComicController::class, ['as'=> 'admin']);
