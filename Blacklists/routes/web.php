<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CsvImportController;
use App\Http\Controllers\LiveSearchController;
use App\Http\Controllers\CSVController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('/teacher', TeacherController::class);
Route::get('/open-view', [TeacherController::class,'showView'])->name('open.view');

Route::resource('/school', SchoolController::class);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::post('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 


Route::resource('live_search',LiveSearchController::class);
Route::get('/live_search/action', [LiveSearchController::class,'live_search'])->name('live_search.action');
Route::get('/search', [LiveSearchController::class, 'search'])->name('search');

//Route::get('/upload', [CsvImportController::class, 'showUploadForm']);
Route::post('/upload', [CsvImportController::class, 'upload']);
