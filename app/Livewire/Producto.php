<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class Producto extends Component
{
    public $categoria;
    public $productos;

    public function mount($categoria)
    {
        $this->categoria = Categoria::findOrFail($categoria);
        $this->productos = $this->categoria->productos;
    }

    public function render()
    {
        return view('livewire.producto');
    }
}
