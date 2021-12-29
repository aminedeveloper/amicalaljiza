<?php

use App\Http\Controllers\v1\web\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/team', [HomeController::class,'team'])->name('team');
Route::get('/partners', [HomeController::class,'partners'])->name('partners');
Route::get('/mosquee', [HomeController::class,'mosquee'])->name('mosquee');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/nouveautes', [HomeController::class,'nouveautes'])->name('nouveautes');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
