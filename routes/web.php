<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('redirectes',[HomeController::class, 'redirectes']);
Route::get('/users',[AdminController::class, 'user']);
Route::get('/deleteuser/{id}',[AdminController::class, 'deleteuser']);
Route::get('/foodMenu',[AdminController::class, 'foodMenu'])->name('foodmenu');
Route::post('/uploadfood',[AdminController::class, 'upload']);
Route::post('/deletefood/{id}',[AdminController::class, 'deletefood']);
Route::get('/editfood/{id}',[AdminController::class, 'editfood']);
Route::post('/updatefood/{id}',[AdminController::class, 'updatefood']);
Route::post('/reservation',[AdminController::class, 'reservation']);
Route::get('/viewreservation',[AdminController::class, 'viewreservation']);
Route::get('/viewchef',[AdminController::class, 'viewchef']);
Route::post('/uploadchef',[AdminController::class, 'uploadchef']);
Route::get('/editchef/{id}',[AdminController::class, 'editchef']);
Route::post('/deletechef/{id}',[AdminController::class, 'deletechef']);
Route::post('/updatechef/{id}',[AdminController::class, 'updatechef']);
Route::post('addcart/{id}',[HomeController::class, 'addcart']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
