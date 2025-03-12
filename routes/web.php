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

// teacher delete
Route::get('/teacher-edit/{id}', [FormController::class, 'teacherEdit'])->name('teacher.edit');
Route::get('/teacher-delete/{id}', [FormController::class, 'teacherDelete'])->name('teacher.delete');
Route::post('/teacher-update', [FormController::class, 'teacherUpdate'])->name('teacher.update');

// subject table
Route::get('/create-subject', [formController::class, 'createSubject']);
Route::get('/show-subject', [formController::class, 'showSubject'])->name('subject.show');
Route::post('/store-subject', [formController::class, 'storeSubject'])->name('subject.store');
// subject table edit and delete
Route::get('/subject-edit/{id}', [formController::class, 'subjectEdit'])->name('subject.edit');
Route::get('/subject-delete/{id}', [formController::class, 'subjectDelete'])->name('subject.delete');
Route::post('/subject-update', [formController::class, 'subjectupdate'])->name('subject.update');
// Home page
Route::get('/', function () {
    return view('welcome');
});

