<?php

use App\Http\Controllers\Plants\PlantController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/plants', [PlantController::class, 'index'])->name('plant.index');
Route::get('/plants/create', [PlantController::class, 'create'])->name('plant.create');
Route::post('/plants/store', [PlantController::class, 'store'])->name('plant.store');
Route::get('/plants/{plant:id}', [PlantController::class, 'show'])->name('plant.show');

require __DIR__.'/auth.php';
