<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddbuilingController;
use App\Http\Controllers\UnitController;

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

//add building

Route::get('/addbuilding', [AddbuilingController::class, 'addbuilding']);
Route::post('/building/datastore', [AddbuilingController::class, 'buildingdatastore']);

//add building

Route::get('/addunit', [UnitController::class, 'addunit']);
Route::post('/unit/datastore', [UnitController::class, 'unitstore']);
