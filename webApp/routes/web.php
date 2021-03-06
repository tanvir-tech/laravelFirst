<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::post('/register',[StudentController::class,'store'])->name('students.store');

Route::get('/delete/{student}',[StudentController::class,'delete'])->name('students.delete');






Route::post('/edit',[StudentController::class,'edit'])->name('students.edit');



