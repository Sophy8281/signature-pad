<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignaturePadController;

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

Route::get('signpad', [SignaturePadController::class, 'index']);
Route::post('signpad', [SignaturePadController::class, 'store'])->name('signpad.save');
