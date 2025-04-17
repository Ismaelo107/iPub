<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class CrearCategoria extends Component
{
    public $categorias, $nombreCategoria;

    public function crearCategoria(){
        $this->validate([
            'nombreCategoria' => 'required'
        ]);
        Categoria::create([
            'categoria' => $this->nombreCategoria
        ]);
        $this->reset(['nombreCategoria']);

        session()->flash('message', 'Categoria creada correctamente.');

    }

    public function mount(){
        $this-> categorias = Categoria::all();
    }
    public function render()
    {
        return view('livewire.crear-categoria');
    }
}
