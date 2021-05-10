<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\User\FighterController as UserFighterController;
use App\Http\Controllers\Admin\FighterController as AdminFighterController;

use App\Http\Controllers\User\EventController as UserEventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

use App\Http\Controllers\User\PickController as UserPickController;
use App\Http\Controllers\Admin\PickController as AdminPickController;

use App\Http\Controllers\Admin\FightController as AdminFightController;

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
//ADMIN & USER HOME CONTROLLERS
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [UserHomeController::class, 'index'])->name('user.home');


//FIGHTERS ROUTES USER
Route::get('/user/fighters/', [UserFighterController::class, 'index'])->name('user.fighters.index');
Route::get('/user/fighters/{id}', [UserFighterController::class, 'show'])->name('user.fighters.show');

//FIGHTERS ROUTES ADMIN
Route::get('/admin/fighters/', [AdminFighterController::class, 'index'])->name('admin.fighters.index');
Route::get('/admin/fighters/create', [AdminFighterController::class, 'create'])->name('admin.fighters.create');
Route::get('/admin/fighters/{id}', [AdminFighterController::class, 'show'])->name('admin.fighters.show');
Route::post('/admin/fighters/store', [AdminFighterController::class, 'store'])->name('admin.fighters.store');
Route::get('/admin/fighters/{id}/edit', [AdminFighterController::class, 'edit'])->name('admin.fighters.edit');
Route::put('/admin/fighters/{id}', [AdminFighterController::class, 'update'])->name('admin.fighters.update');
Route::delete('/admin/fighters/{id}', [AdminFighterController::class, 'destroy'])->name('admin.fighters.destroy');

//EVENTS ROUTES USER
Route::get('/user/events/', [UserEventController::class, 'index'])->name('user.events.index');
Route::get('/user/events/{id}', [UserEventController::class, 'show'])->name('user.events.show');

//EVENTS ROUTES ADMIN
Route::get('/admin/events/', [AdminEventController::class, 'index'])->name('admin.events.index');
Route::get('/admin/events/create', [AdminEventController::class, 'create'])->name('admin.events.create');
Route::get('/admin/events/{id}', [AdminEventController::class, 'show'])->name('admin.events.show');
Route::post('/admin/events/store', [AdminEventController::class, 'store'])->name('admin.events.store');
Route::get('/admin/events/{id}/edit', [AdminEventController::class, 'edit'])->name('admin.events.edit');
Route::put('/admin/events/{id}', [AdminEventController::class, 'update'])->name('admin.events.update');
Route::delete('/admin/events/{id}', [AdminEventController::class, 'destroy'])->name('admin.events.destroy');


//PICKS USER
Route::get('/user/picks/', [UserPickController::class, 'index'])->name('user.picks.index');
Route::get('/user/events/{id}/picks/store', [UserPickController::class, 'create'])->name('user.picks.create');
Route::get('/user/picks/{id}', [UserPickController::class, 'show'])->name('user.picks.show');
Route::post('/user/events/{id}/picks/store', [UserPickController::class, 'store'])->name('user.picks.store');
Route::get('/user/picks/{id}/edit', [UserPickController::class, 'edit'])->name('user.picks.edit');
Route::put('/user/picks/{id}', [UserPickController::class, 'update'])->name('user.picks.update');
Route::delete('/user/picks/{id}', [UserPickController::class, 'destroy'])->name('user.picks.destroy');

//PICKS ADMIN
Route::get('/admin/picks/', [AdminPickController::class, 'index'])->name('admin.picks.index');
Route::get('/admin/events/{id}/picks/store', [AdminPickController::class, 'create'])->name('admin.picks.create');
Route::get('/admin/picks/{id}', [AdminPickController::class, 'show'])->name('admin.picks.show');
Route::post('/admin/events/{id}/picks/store', [AdminPickController::class, 'store'])->name('admin.picks.store');
Route::get('/admin/picks/{id}/edit', [AdminPickController::class, 'edit'])->name('admin.picks.edit');
Route::put('/admin/picks/{id}', [AdminPickController::class, 'update'])->name('admin.picks.update');
Route::delete('/admin/picks/{id}', [AdminPickController::class, 'destroy'])->name('admin.picks.destroy');


//FIGHTS
Route::get('/admin/events/{id}/fights/create', [AdminFightController::class, 'create'])->name('admin.fights.create');
Route::post('/admin/events/{id}/fights/store', [AdminFightController::class, 'store'])->name('admin.fights.store');
