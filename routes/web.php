<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Middleware\Authenticate;

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
Route::get('/' , function () {
    return redirect()->route('cadastro-index');
});

Route::prefix('/cadastro')->group(function(){
    Route::get('/', [CadastroController::class ,'index'])->name('cadastro-index');
    Route::post('/', [CadastroController::class , 'store'])->name('cadastro-store');
});

Route::resource('login', LoginController::class)->only(['index','store',
]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/dashboard', [DashboardController::class, 'logout'])->name('logout');


