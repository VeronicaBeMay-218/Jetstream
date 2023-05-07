<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
use App\Http\Livewire\VisualizadorNotas;
use App\Http\Livewire\Users;
use App\Http\Livewire\inicio;
use App\Http\Livewire\Buildings;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', inicio::class)->name('dashboard');

    Route::get('/users',Users::class)->name('users');//
    Route::get('/buildings',Buildings::class);
});

Route::get('/counter',Counter::class)->name('counter');
Route::get('/verNotas', VisualizadorNotas::class)->name('verNotas');
