<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\RegionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/store/add', [Storecontroller::class,'view']);
Route::post('/store/add', [Storecontroller::class,'submit']);
Route::get('region/add', [Regioncontroller::class,'view']);
Route::post('/region/add', [Regioncontroller::class,'submit']);
Route::get('/store/addRelation', [Storecontroller::class,'relationship']);
Route::post('/store/addRelation', [Storecontroller::class,'relationship_submit']);
Route::get('/region/addRelation', [Regioncontroller::class,'relationship']);
Route::post('/region/addRelation', [Regioncontroller::class,'relationship_submit']);



