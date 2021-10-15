<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', [MyController::class, 'loginview']);
Route::get('/view/company/{id}', [MyController::class, 'viewcompany']);
Route::get('/delete/company/{id}', [MyController::class, 'deletecompany']);

Route::post('/logon', [MyController::class, 'logon'])->name('logon');


Route::post('/cupdate', [MyController::class, 'cupdate'])->name('cupdate');


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
