<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Models\Pizza;

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

// Route::get('/pizzas', 'PizzaController@index'); // v.6
// Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas'); // laravel v.8 
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::post('/pizzas', [PizzaController::class, 'store']);
