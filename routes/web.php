<?php

use App\Http\Controllers\Plants\PlantController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

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
Route::get('/plants/{plant:id}', [PlantController::class, 'show'])->name('plant.show');

Route::get('/test', function () {
    $value = Yaml::parse("foo:");

    $valuer = Yaml::dump([
        'one' => '1',
        'two' => [
            2,
            3
        ],
        'three' => []
    ]);
    dd($valuer);
});

require __DIR__.'/auth.php';
