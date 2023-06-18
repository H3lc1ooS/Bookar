<?php

use App\Http\Controllers\ExplicadorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicoController;
use App\Models\Disciplina;
use App\Models\Servico;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/explicadores', function () {
    $disciplinas = Disciplina::all();
    $explicadores = Servico::all();

    return view('explicadores', ['disciplinas' => $disciplinas, 'explicadores' => $explicadores]);
})->name('explicadores');

Route::post('/explicadores', [ServicoController::class, 'store'])->name('servico.store')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/PrimaryBoard', function () {
    return view('PrimaryBoard');
})->middleware(['auth', 'verified'])->name('PrimaryBoard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'edit'])->name('dashboard');
    Route::patch('/dashboard', [ProfileController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboard', [ProfileController::class, 'destroy'])->name('dashboard.destroy');
});

require __DIR__ . '/auth.php';