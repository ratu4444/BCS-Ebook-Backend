<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;

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

Route::get('/',[EbookController::class, 'index']);

Route::get('/adminShow',[EbookController::class, 'adminShow'])->name('adminShow');

Route::post('/admin',[EbookController::class, 'storeAdmin'])->name('storeAdmin');

Route::get('/admin',[EbookController::class, 'admin'])->name('admin');
