<?php

use App\Http\Controllers\StudentController;
use App\student;
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
    return view('welcome');
});


Route::get('home', function () {
    return view("home");
})->name('home');

Route::get('siswa', function () {
    $student = student::all();
    return view("siswa", compact("student"));
})->name('siswa');

Route::get('edit/{student}', function (student $student) {
    return view("edit", compact('student'));
})->name('edit');



Route::resource('Student', 'StudentController');
