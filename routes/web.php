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
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');

Route::get('/enroll', function () {
    return view('enroll');
});
Route::get('/student', function () {
    return view('STC/student');
});
Route::get('/notices', function () {
    return view('STC/notices');
});
Route::get('/coursework', function () {
    return view('STC/coursework');
});
Route::get('/teacher', function () {
    return view('TC/teacher');
});
Route::get('/admin', function () {
    return view('HR/admin');
});
