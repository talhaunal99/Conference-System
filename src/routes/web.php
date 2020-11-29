<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AssignController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MySubmissionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersInfoController;
use App\Http\Controllers\MongoSubsController;
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

Route::get('/upload-file', [FileUploadController::class, 'createForm']);
Route::post('/upload-file', [FileUploadController::class, 'fileUpload'])->name('fileUpload');
Route::get('/ajax-request', [AjaxController::class, 'getCountryCity']);

Route::get('/my-submissions', [MySubmissionsController::class, 'index'])->name('my_submissions');
Route::delete('/my-submissions/{submission}', [MySubmissionsController::class, 'delete'])->name('my_submissions.delete');
Route::get('/my-submissions/{submission}', [MySubmissionsController::class, 'edit'])->name('my_submissions.edit');
Route::post('/my-submissions/{submission}', [MySubmissionsController::class, 'edit2']);
Route::put('/my-submissions/{submission}/b', [MySubmissionsController::class, 'inactivate'])->name('my_submissions.inactivate');
Route::put('/my-submissions/{submission}/a', [MySubmissionsController::class, 'recover'])->name('my_submissions.recover');
Route::get('/conference', [ConferenceController::class, 'index'])->name('conference');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users-info', [UsersInfoController::class, 'index'])->name('users.info');
Route::get('/users-info-edit', [UsersInfoController::class, 'edit'])->name('users.edit');
Route::put('/users-info-edit', [UsersInfoController::class, 'edit2']);
Route::post('/users-info', [UsersInfoController::class, 'store'])->name('users.create');
Route::post('/assign', [AssignController::class, 'update'])->name('assign');
Route::get('/conference-chair', [ConferenceController::class, 'chair'])->name('conference.chair');

Route::get('/conference/create', [ConferenceController::class, 'create'])->name('conference_create');
Route::post('/conference/create', [ConferenceController::class, 'store']);

Route::put('/users/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/conference/{conference}', [ConferenceController::class, 'edit'])->name('conference.edit');
Route::put('/conference/{conference}', [ConferenceController::class, 'update'])->name('conference.update');
Route::delete('/conference/{conference}', [ConferenceController::class, 'delete'])->name('conference.delete');
Route::put('/conference/change-activation/{conference}', [ConferenceController::class, 'changeActivation'])->name('conference.changeactivation');

Route::get('/submission/create/{conference}', [MongoSubsController::class, 'create'])->name('submission_create');
Route::post('/submission/create/{conference}', [MongoSubsController::class, 'store']);



