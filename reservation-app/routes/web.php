<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/redirects', [HomeController::class, 'redirects']);
Route::get('/users', [AdminController::class, 'user']);
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::post('/uploadfood', [AdminController::class, 'upload']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);
Route::get('/updateview/{id}', [AdminController::class, 'updateview']);
Route::post('/uploadfood/{id}', [AdminController::class, 'update']);


// resevation
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/viewreservation', [AdminController::class, 'viewreservation']);


// chef
Route::get('/viewchef', [AdminController::class, 'viewchef']);
Route::post('/uploadchef', [AdminController::class, 'uploadchef']);
Route::get('/updatechef/{id}', [AdminController::class, 'updatechef']);
Route::post('/updatefoodchef/{id}', [AdminController::class, 'updatefoodchef']);
Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);

// addcart
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);

Route::get('/remove/{id}', [HomeController::class, 'remove']);

// Order
Route::post('/orderconfirm ', [HomeController::class, 'orderconfirm']);




/* Table Booking OR Floor */

Route::get('/book', [FloorController::class, 'book']);
Route::get('/booki/{id}', [FloorController::class, 'book_show']);


Route::get('/floor', [FloorController::class, 'viewFloor']);
Route::post('/floor', [FloorController::class, 'createFloor']);



Route::get('/floor-check', [FloorController::class, 'floorcheckout']);
Route::get('/history', [FloorController::class, 'history']);


/*  */







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
