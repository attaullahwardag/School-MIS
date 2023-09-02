<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\home;
use App\Http\Controllers\Backend\ProfileCotroller;


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

Route::get('/', [home::class, 'welcome']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// user management routes 
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/view', [UserController::class, 'userview'] )->name('user.view');
    Route::get('/add', [UserController::class, 'useradd']) -> name('user.add');
    Route::post('/store', [UserController::class, 'storeuser']) -> name('store.user');
    Route::get('/eidt/{id}', [UserController::class, 'edituser']) -> name('edit.user');
    Route::put('/update/{id}', [UserController::class, 'updateuser']) -> name('update.user');
    Route::get('/delete/{id}', [UserController::class, 'deleteuser']) -> name('delete.user');
});
// Profile management routes 
Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('/view', [ProfileCotroller::class, 'viewprofile'] )->name('view.profile');
    Route::get('/eidt/{id}', [ProfileCotroller::class, 'editprofile']) -> name('edit.profile');
    Route::put('/update/{id}', [ProfileCotroller::class, 'updateprofile']) -> name('update.profile');
    //Route::get('/delete/{id}', [UserController::class, 'deleteuser']) -> name('delete.user');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'] )->name('admin.logout');