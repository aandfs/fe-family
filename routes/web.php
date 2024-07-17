<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\FamilyListController;
use App\Http\Controllers\CostumersController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/nationality', [NationalityController::class, 'index']);
Route::get('/family', [FamilyListController::class, 'index']);
Route::get('/costumers', [CostumersController::class, 'index']);