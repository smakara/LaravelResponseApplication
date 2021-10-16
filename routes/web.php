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


Route::get('/new/company', [MyController::class, 'newcompany']);
Route::get('/home', [MyController::class, 'home']);
Route::get('/', [MyController::class, 'loginview']);
Route::get('/view/company/{id}', [MyController::class, 'viewcompany']);
Route::get('/delete/company/{id}', [MyController::class, 'deletecompany']);


Route::get('/employees', [MyController::class, 'employees']);
Route::get('/delete/employee/{id}', [MyController::class, 'deleteemployee']);
Route::get('/view/employee/{id}', [MyController::class, 'viewemployee']);
Route::get('/new/employee', [MyController::class, 'newemployee']);


Route::post('/logon', [MyController::class, 'logon'])->name('logon');
Route::post('/cnew', [MyController::class, 'cnew'])->name('cnew');
Route::post('/cupdate', [MyController::class, 'cupdate'])->name('cupdate');

Route::post('/eupdate', [MyController::class, 'eupdate'])->name('eupdate');
Route::post('/enew', [MyController::class, 'enew'])->name('enew');





//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
