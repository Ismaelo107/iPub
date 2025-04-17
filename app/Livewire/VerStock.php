<?php

namespace App\Livewire;

use App\Models\Stock;
use App\Models\Comanda;
use Livewire\Component;

class VerStock extends Component
{
    public $stock;
    public $mesaActiva; // Para saber a qué mesa añadir

    public function mount($mesa = null)
    {
        $this->stock = Stock::where('unidades', '>', 0)->get();
        $this->mesaActiva = $mesa; // Recibir mesa si viene de comandas
    }

    public function agregarAComanda($stockId)
    {
        $producto = Stock::findOrFail($stockId);

        // Validar que hay suficientes unidades
        if ($producto->unidades <= 0) {
            session()->flash('error', 'No hay suficiente stock de este producto');
            return;
        }

        // Crear la comanda (ajusta según tu modelo)
        Comanda::create([
            'mesa_id' => $this->mesaActiva,
            'producto' => $producto->nombre,
            'cantidad' => 1, // Cantidad por defecto
            'precio_unitario' => $producto->precio_venta,
            'stock_id' => $producto->id // Guardar referencia al stock
        ]);

        // Actualizar el stock
        $producto->decrement('unidades');

        session()->flash('message', 'Producto añadido a la comanda');
        $this->stock = Stock::where('unidades', '>', 0)->get(); // Refrescar lista
    }

    public function render()
    {
        return view('livewire.ver-stock');
    }
}
