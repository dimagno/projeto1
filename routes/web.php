<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Use App\Http\Controllers\UserController;
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
Route::prefix('/user')->group(function(){
    Route::get('edit', function(){
        return 'edit';
    })->name('usuario.edit');
    Route::get('/{user}', [UserController::class, 'show']);
});
Route::get('/request', function(Request $req){
    dd($req);
    return "x";
});