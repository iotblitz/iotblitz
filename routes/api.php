<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/states',[Controller::class,'states_list'])->name('api.state');
Route::get('/cties',[Controller::class,'cties_list'])->name('api.cties');

Route::get('/tags-serch',[Controller::class,'search_tags'])->name('api.tags_serch');
