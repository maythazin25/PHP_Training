<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('task');
});

//Route::resource('task','TaskController');

Route::get('/', [TaskController::class, 'index']);
/**
 * Add A New Task
 */
Route::post('/task', [TaskController::class, 'store']);

/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', [TaskController::class, 'delete']);
