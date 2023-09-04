<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\home;
use App\Http\Controllers\Backend\ProfileCotroller;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;



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
// Student Class management routes 
Route::group(['prefix' => 'setup', 'middleware' => 'auth'], function () {
    Route::get('student/class/view', [StudentClassController::class, 'ViewStudentClass'] )->name('student.class.view');
    Route::get('student/class/add', [StudentClassController::class, 'AddStudentClass'] )->name('student.class.add');
    Route::post('student/class/store', [StudentClassController::class, 'StoreStudentClass'] )->name('student.class.store');
    Route::get('student/class/edit/{id}', [StudentClassController::class, 'EditStudentClass'] )->name('student.class.edit');
    Route::put('student/class/update/{id}', [StudentClassController::class, 'UpdateStudentClass'] )->name('student.class.update');
    Route::get('student/class/delete/{id}', [StudentClassController::class, 'DeleteStudentClass'] )->name('student.class.delete');

// Student Year management routes 
    Route::get('student/year/view', [StudentYearController::class, 'ViewStudentYear'] )->name('student.year.view');
    Route::get('student/year/add', [StudentYearController::class, 'AddStudentYear'] )->name('student.year.add');
    Route::post('student/year/store', [StudentYearController::class, 'StoreStudentYear'] )->name('student.year.store');
    Route::get('student/year/edit/{id}', [StudentYearController::class, 'EditStudentYear'] )->name('student.year.edit');
    Route::put('student/year/update/{id}', [StudentYearController::class, 'UpdateStudentYear'] )->name('student.year.update');
    Route::get('student/year/delete/{id}', [StudentYearController::class, 'DeleteStudentYear'] )->name('student.year.delete');

// Student Group management routes 
    Route::get('student/group/view', [StudentGroupController::class, 'ViewStudentGroup'] )->name('student.group.view');
    Route::get('student/group/add', [StudentGroupController::class, 'AddStudentGroup'] )->name('student.group.add');
    Route::post('student/group/store', [StudentGroupController::class, 'StoreStudentGroup'] )->name('student.group.store');
    Route::get('student/group/edit/{id}', [StudentGroupController::class, 'EditStudentGroup'] )->name('student.group.edit');
    Route::put('student/group/update/{id}', [StudentGroupController::class, 'UpdateStudentGroup'] )->name('student.group.update');
    Route::get('student/group/delete/{id}', [StudentGroupController::class, 'DeleteStudentGroup'] )->name('student.group.delete');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'] )->name('admin.logout');
