<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return view('landing');
});
Route::get('/login', [MainController::class, 'login']);
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');

Route::get('/enroll', function () {
    return view('enroll');
});



Route::get('/student', [MainController::class, 'students']);
Route::get('/edit-student/{id}', [MainController::class, 'edit']);
Route::post('/update-student/{id}', [MainController::class, 'update_student']);


Route::get('/notices', function () {
    return view('STC/notices');
});
Route::get('/coursework', function () {
    return view('STC/coursework');
});
Route::get('/teacher', function () {
    return view('TC/teacher');
});
Route::get('/admin', [MainController::class, 'admin']);
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');


//functionality routes
Route::get('delete-student/{id}', [MainController::class, 'delete_student']);
