<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Mesa;

class Mesas extends Component
{
    public $mesas;

    public function mount(): void
    {
        $this->mesas = Mesa::all();
    }

    public function irAComanda($mesaId)
    {
        return redirect()->route('comanda', ['mesa' => $mesaId]);
    }


    public function cambiarEstado($mesaId, $nuevoEstado): void
    {
        $mesa = Mesa::find($mesaId);
        if ($mesa) {
            $mesa->estado = $nuevoEstado;
            $mesa->save();
            $this->mesas = Mesa::all();

        }

    }


    public function render()
    {
        return view('livewire.mesas-component');
    }
}
