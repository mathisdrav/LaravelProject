<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;

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
    return view('voitures.index');
});

Route::get('index', [VoitureController::Class, 'index']);
Route::get('admin', [VoitureController::Class, 'admin']);

Route::get('create', [VoitureController::Class, 'create']);
Route::post('create', [VoitureController::Class, 'store']);

Route::get('show/{id}', [VoitureController::Class, 'show']);

Route::get('edit/{id}', [VoitureController::Class, 'edit']);
Route::put('edit/{id}', [VoitureController::Class, 'update']);

Route::post('delete/{id}', [VoitureController::Class, 'destroy']);

Route::resource('voitures', VoitureController::class);		
