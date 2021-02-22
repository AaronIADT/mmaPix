<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\User\FighterController as UserFighterController;
use App\Http\Controllers\Admin\FighterController as AdminFighterController;

use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

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

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [UserHomeController::class, 'index'])->name('user.home');


Route::get('/user/fighters/', [UserFighterController::class, 'index'])->name('user.fighters.index');
Route::get('/user/fighters/{id}', [UserFighterController::class, 'show'])->name('user.fighters.show');


Route::get('/admin/fighters/', [AdminFighterController::class, 'index'])->name('admin.fighters.index');
Route::get('/admin/fighters/create', [AdminFighterController::class, 'create'])->name('admin.fighters.create');
Route::get('/admin/fighters/{id}', [AdminFighterController::class, 'show'])->name('admin.fighters.show');
Route::post('/admin/fighters/store', [AdminFighterController::class, 'store'])->name('admin.fighters.store');
Route::get('/admin/fighters/{id}/edit', [AdminFighterController::class, 'edit'])->name('admin.fighters.edit');
Route::put('/admin/fighters/{id}', [AdminFighterController::class, 'update'])->name('admin.fighters.update');
Route::delete('/admin/fighters/{id}', [AdminFighterController::class, 'destroy'])->name('admin.fighters.destroy');
