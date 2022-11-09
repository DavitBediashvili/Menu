<?php

use App\Http\Controllers\Menu3Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [Menu3Controller::class, 'menuList'])->name("menu");
Route::post('/', [Menu3Controller::class, 'menuList'])->name("menu");
Route::get('/menu/{category}', [Menu3Controller::class, 'foodList'])->name("list");
Route::get('/admin', [Menu3Controller::class, 'show'])->name("admin");
Route::post('/admin', [Menu3Controller::class, 'edit'])->name("admin");

