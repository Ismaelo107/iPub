<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Mesa;
use App\Models\Comanda;
use App\Models\Stock;

class Comandas extends Component
{
    public $mesa;
    public $comandas;
    public $horaActual;
    public $fechaActual;

    public function mount($mesa): void
    {
        $this->mesa = Mesa::find($mesa);
        $this->obtenerComandas();
        $this->horaActual = now()->format('H:i');
        $this->fechaActual = now()->format('d-m-Y');
    }

    public function obtenerComandas(): void
    {
        $this->comandas = Comanda::where('mesa_id', $this->mesa->id)
            ->with('stock') // Cargar relación con stock si existe
            ->get();
    }

    // ... otros métodos existentes ...

    public function render()
    {
        return view('livewire.comanda-component', [
            'mesa' => $this->mesa,
            'comandas' => $this->comandas,
        ]);
    }
}
