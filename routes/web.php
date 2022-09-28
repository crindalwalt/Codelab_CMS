<?php

use App\Http\Controllers\DueController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

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
    return view('templete.index');
});
Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/dashboard/visitor/destroy/{visitor}',[VisitorController::class,'delete']);
    Route::resource('visitor',VisitorController::class)->except(['destroy']);
    Route::resource('student',StudentController::class);
    Route::resource('dues',DueController::class);

});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
