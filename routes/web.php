<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Auth login (Admin, teacher, student)
Route::get('/admin-login', [AuthController::class, 'loginShowAdmin'])->name('admin-show-login');
Route::post('/admin-login', [AuthController::class, 'loginAdmin'])->name('admin-login');
Route::get('/teacher-login', [AuthController::class, 'loginShowTeacher'])->name('teacher-show-login');
Route::post('/teacher-login', [AuthController::class, 'loginTeacher'])->name('teacher-login');
Route::get('/student-login', [AuthController::class, 'loginShowStudent'])->name('student-show-login');
Route::post('/student-login', [AuthController::class, 'loginStudent'])->name('student-login');
