<?php

use App\Livewire\Comandas;
use App\Livewire\Producto;
use App\Livewire\Stocks;
use App\Livewire\VerStock;

Route::view('/', 'home')->name('welcome');
Route::get('/comanda/{mesa}', Comandas::class)->name('comanda');
Route::get('/producto/{categoria}', Producto::class)->name('productoPorCategoria');
Route::view('/categoria/',"crearCategoria")->name('categoria');
Route::view('/stock/',"stock")->name('stock');
Route::get('/ver-stock', VerStock::class)->name('ver-stock');
