<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;


Route::get('/add', [AuthorController::class, 'add']); // 1-15
Route::post('/add', [AuthorController::class, 'create']); // 1-15
Route::get('/', [AuthorController::class, 'index']); // 1-14

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

// Route::get('/', function () {
//     return view('welcome');
// });
