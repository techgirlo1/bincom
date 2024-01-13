<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollingUnitController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\LgaController;
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

Route::get('/pollingresult',[PollingUnitController::class,'pollingunitresult'])->name('pollingresult');
Route::get('/Alllga', [LgaController::class, 'fetchLGA'])->name('lga');
Route::post('/lgas', [ResultController::class, 'getMultipleLgaResult'])->name('totalResult');
Route::post('/addResult', [PollingUnitController::class, 'addPuResult'])->name('add_result');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
