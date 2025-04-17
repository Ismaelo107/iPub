<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class Categorias extends Component
{
    public $categories;
    public $categoriaSeleccionada = null;
    public $productosFiltrados = [];

    public function mount(): void
    {
        $this->categories = Categoria::withCount('stocks')->get();
    }

    public function verStock($categoriaId): void
    {
        // Si ya está seleccionada, la deseleccionamos
        if ($this->categoriaSeleccionada == $categoriaId) {
            $this->categoriaSeleccionada = null;
            $this->productosFiltrados = [];
            return;
        }

        $this->categoriaSeleccionada = $categoriaId;
        // Obtener solo productos de esta categoría
        $this->productosFiltrados = Categoria::find($categoriaId)
            ->stocks()
            ->where('disponible', true)
            ->get();
    }

    public function verTodosProductos($categoriaId)
    {
        return redirect()->route('ver-stock', ['categoria' => $categoriaId]);
    }

    public function render()
    {
        return view('livewire.categoria');
    }
}
