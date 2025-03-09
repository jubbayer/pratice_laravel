<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

// Form page
Route::get('/form', [formController::class, 'form']);
Route::get('/students', [formController::class, 'showStudent'])->name('student.show');
Route::post('/student-store', [formController::class, 'storeStudent'])->name('student.store');

// teacher page
Route::get('/create', [formController::class, 'create']);
Route::get('/show-teacher', [formController::class, 'showTeacher'])->name('teacher.show');
Route::post('/teacher-store', [formController::class, 'storeTeacher'])->name('teacher.store');

Route::get('/teacher-delete/{id}', [FormController::class, 'teacherDelete'])->name('teacher.delete');


// Home page
Route::get('/', function () {
    return view('welcome');
});

