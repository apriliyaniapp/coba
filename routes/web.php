<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;
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
Route::get('/datatable', function () {
    return view('datatable.index');
});

//CRUD CAST
Route::get('/Npm21312064', [UasController::class, 'index']);
Route::post('/Npm21312064', [UasController::class, 'store']);
Route::get('/Npm21312064/create', [UasController::class, 'create']);
Route::get('/Npm21312064/{Npm21312064_id}/edit', [UasController::class, 'edit']);
Route::put('/Npm21312064/{Npm21312064_id}', [UasController::class, 'update']);
Route::delete('/Npm21312064/{Npm21312064_id}', [UasController::class, 'destroy']);
