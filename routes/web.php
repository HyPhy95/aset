<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CarsController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| use App\Models\Car;
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

//Pages Route
Route::view('/list', 'welcome');
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

//CarsController Route
Route::get('/cars', [CarsController::class, 'index'])->name('cars.show');
Route::get('/car/create', [CarsController::class, 'create'])->name('cars.show.create');
Route::get('/car/{id}', [CarsController::class, 'show'])->name('car.show');
Route::post('car/store', [CarsController::class, 'store']);
Route::put('/car/update{id}', [CarsController::class, 'update'])->name('car.update');
Route::get('/car/{id}/edit', [CarsController::class, 'edit'])->name('car.show');
Route::get('/car/{id}/delete', [CarsController::class, 'destroy']);
