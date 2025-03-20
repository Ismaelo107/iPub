<?php

use App\Livewire\Comandas;
use App\Livewire\Producto;

Route::view('/', 'home')->name('welcome');
Route::get('/comanda/{mesa}', Comandas::class)->name('comanda');
Route::get('/producto/{categoria}', Producto::class)->name('productoPorCategoria');
