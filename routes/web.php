<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrisonerController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CellsController;
use App\Http\Controllers\WardsController;
use App\Http\Controllers\GuardsController;
use App\Http\Controllers\SentenceController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/prisoners', function () {
    return view('prisoners.index');
})->name('prisoners');
*/
Route::middleware(['auth:sanctum', 'verified'])->get('prisoners', [PrisonerController::class, 'index'])->name('prisoners');
Route::middleware(['auth:sanctum', 'verified'])->get('add_prisoner', [PrisonerController::class, 'create'])->name('add_prisoner');
Route::middleware(['auth:sanctum', 'verified'])->post('store_prisoner', [PrisonerController::class, 'store'])->name('store_prisoner');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_prisoner', [PrisonerController::class, 'edit'])->name('edit_prisoner');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_prisoner', [PrisonerController::class, 'delete'])->name('delete_prisoner');
Route::middleware(['auth:sanctum', 'verified'])->post('update_prisoner', [PrisonerController::class, 'update'])->name('update_prisoner');
Route::middleware(['auth:sanctum', 'verified'])->post('file_add', [PrisonerController::class, 'file_add'])->name('file_add');
Route::middleware(['auth:sanctum', 'verified'])->post('process', [PrisonerController::class, 'process'])->name('process');

Route::middleware(['auth:sanctum', 'verified'])->get('guards', [GuardsController::class, 'index'])->name('guards');
Route::middleware(['auth:sanctum', 'verified'])->get('add_guard', [GuardsController::class, 'create'])->name('add_guard');
Route::middleware(['auth:sanctum', 'verified'])->post('store_guard', [GuardsController::class, 'store'])->name('store_guard');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_guard', [GuardsController::class, 'edit'])->name('edit_guard');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_guard', [GuardsController::class, 'delete'])->name('delete_guard');
Route::middleware(['auth:sanctum', 'verified'])->post('update_guard', [GuardsController::class, 'update'])->name('update_guard');




Route::middleware(['auth:sanctum', 'verified'])->get('codes', [CodesController::class, 'index'])->name('codes');
Route::middleware(['auth:sanctum', 'verified'])->get('add_code', [CodesController::class, 'create'])->name('add_code');
Route::middleware(['auth:sanctum', 'verified'])->post('store_code', [CodesController::class, 'store'])->name('store_code');

Route::middleware(['auth:sanctum', 'verified'])->get('cells', [CellsController::class, 'index'])->name('cells');
Route::middleware(['auth:sanctum', 'verified'])->get('add_cell', [CellsController::class, 'create'])->name('add_cell');
Route::middleware(['auth:sanctum', 'verified'])->post('store_cell', [CellsController::class, 'store'])->name('store_cell');

Route::middleware(['auth:sanctum', 'verified'])->get('wards', [WardsController::class, 'index'])->name('wards');
Route::middleware(['auth:sanctum', 'verified'])->get('add_ward', [WardsController::class, 'create'])->name('add_ward');
Route::middleware(['auth:sanctum', 'verified'])->post('store_ward', [WardsController::class, 'store'])->name('store_ward');

Route::middleware(['auth:sanctum', 'verified'])->get('sentences', [SentenceController::class, 'index'])->name('sentences');
Route::middleware(['auth:sanctum', 'verified'])->get('add_sentence', [SentenceController::class, 'create'])->name('add_sentence');
Route::middleware(['auth:sanctum', 'verified'])->post('store_sentence', [SentenceController::class, 'store'])->name('store_sentence');