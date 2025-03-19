<?php

use App\Livewire\Comandas;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::get('/comanda/{mesa}', Comandas::class)->name('comanda');
