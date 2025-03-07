<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;



Route::get('/form',[formController::class,'form']);
Route::get('/show',[formController::class,'showStudent']);
Route::post('/student-store',[formController::class,'storeStudent'])->name('student.store');

route::get('/create',[formController::class,'create']);
Route::get('/showteacher',[formController::class,'storeTeacher']);
Route::post('/student-store',[formController::class,'storeTeacher'])->name('teacher.store');

Route::get('/', function () {
    return view ('welcome');
});
