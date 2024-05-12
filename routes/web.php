<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\GroupsController;
use App\Http\Controllers\ExportToExcelController;


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

// Auth logout
Route::get('/admin-logout', [AuthController::class, 'logoutAdmin'])->name('admin-logout');

// Dashboard
Route::get('/admin-dashboard', [AuthController::class, 'dashboardAdmin'])
    ->middleware(['auth:admin'])->name('admin-dashboard');
Route::get('/teacher-dashboard', [AuthController::class, 'dashboardTeacher'])
    ->middleware(['auth:teacher'])->name('teacher-dashboard');
Route::get('/student-dashboard', [AuthController::class, 'dashboardStudent'])
    ->middleware(['auth:student'])->name('student-dashboard');

// Admin panel 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('teachers', TeachersController::class); 
    Route::resource('students', StudentsController::class); 
    Route::resource('departments', DepartmentsController::class)->except(['show']); 
    Route::resource('rooms', RoomController::class)->except(['show']);
    Route::resource('courses', CoursesController::class)->except(['show']);
    Route::resource('groups', GroupsController::class); 
});

// Export to excel
Route::get('teachers/export/', [ExportToExcelController::class, 'get_teachers'])->name('get_teachers');
Route::get('students/export/', [ExportToExcelController::class, 'get_students'])->name('get_students');
Route::get('groups/export/', [ExportToExcelController::class, 'get_groups'])->name('get_groups');
Route::get('departments/export/', [ExportToExcelController::class, 'get_departments'])->name('get_departments');
Route::get('courses/export/', [ExportToExcelController::class, 'get_courses'])->name('get_courses');
Route::get('rooms/export/', [ExportToExcelController::class, 'get_rooms'])->name('get_rooms');