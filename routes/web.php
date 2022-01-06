<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

use App\Http\Livewire\CourseStatus;
use GuzzleHttp\Middleware;

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

//return view('welcome');

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');

Route::get('cursos/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('course/{course}/enrolled', [CourseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');

Route::get('course-status/{course}', CourseStatus::class)->middleware('auth')->name('courses.status');

//TEST
Route::get('course-test', [CourseController::class, 'test']); 



//-/-//

Route::get('contacto', function () {
    return view('contact.index');
})->name('contacto');

Route::get('test2', function () {
    return "Test 2";
})->name('test2');



//Route::resource('test', CourseController::class); //AIO