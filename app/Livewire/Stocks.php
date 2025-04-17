<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Stock;

class Stocks extends Component
{
    public $nombre, $descripcion,$unidades, $precio_venta, $precio_compra, $categoria_id, $productos, $categorias;

    public function guardarProducto()
    {
        $this->validate([
            'nombre' => 'required|string|max:255',
            'unidades' => 'required|numeric|max:200',
            'precio_venta' => 'required|numeric|min:0',
            'precio_compra' => 'nullable|numeric|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'descripcion' => 'nullable|string|max:20',
        ]);

        Stock::create([
            'nombre' => $this->nombre,
            'unidades' => $this->unidades,
            'descipcion' => $this->descripcion,
            'precio_venta' => $this->precio_venta,
            'precio_compra' => $this->precio_compra,
            'categoria_id' => $this->categoria_id,
        ]);

        $this->reset(['nombre', 'descripcion','unidades', 'precio_venta', 'precio_compra', 'categoria_id']);
    }



    public function mount()
    {
        $this-> productos = Producto::all();
        $this-> categorias = Categoria::all();
    }

    public function render()
    {
        return view('livewire.stock');
    }
}
