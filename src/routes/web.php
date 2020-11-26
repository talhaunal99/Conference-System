<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/conference', [ConferenceController::class, 'index'])->name('conference');
Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/conference/create', [ConferenceController::class, 'create'])->name('conference_create');
Route::post('/conference/create', [ConferenceController::class, 'store']);

Route::put('/users/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/conference/{conference}', [ConferenceController::class, 'edit'])->name('conference.edit');
Route::put('/conference/{conference}', [ConferenceController::class, 'update'])->name('conference.update');
Route::delete('/conference/{conference}', [ConferenceController::class, 'delete'])->name('conference.delete');




