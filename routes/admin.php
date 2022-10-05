<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DueController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
    Route::resource('/visitor',VisitorController::class);
    Route::resource('/student',StudentController::class);
    Route::resource('/dues',DueController::class);

});

