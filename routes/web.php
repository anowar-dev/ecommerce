<?php

use App\Http\Controllers\catController;
use App\Http\Controllers\FrontContrller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontContrller::class, 'home']);
Route::post('cat_add/', [catController::class, 'cat_add']);
Route::get('cat_show/', [catController::class, 'cat_show']);
//Route::post('cat_store/', [catController::class, 'cat_store']);

