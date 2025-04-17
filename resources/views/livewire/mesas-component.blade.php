<div class="grid grid-cols-5 gap-4 p-3 justify-center">
    @foreach($mesas as $mesa)
        <div wire:click="irAComanda({{ $mesa->id }})" class="p-4 rounded-lg shadow-md text-center w-fit
            {{ $mesa->estado == 'abierta' ? 'bg-green-300' :
               ($mesa->estado == 'pendiente' ? 'bg-yellow-300' : 'bg-red-300') }}">

            <h2 class="text-lg font-bold">Mesa #{{ $mesa->id }}</h2>
            <p class="text-sm">Estado: <strong>{{ ucfirst($mesa->estado) }}</strong></p>
            <p class="text-sm">Forma de pago: <strong>{{ ucfirst($mesa->forma_pago) }}</strong></p>
            <p class="text-sm">Total: <strong>${{ number_format($mesa->id, 2) }}</strong></p>

            <div class="mt-2 space-x-2">
                <button wire:click="cambiarEstado({{ $mesa->id }}, 'abierta')"
                        class="bg-green-500 text-white px-2 py-1 rounded text-sm">Abrir</button>
                <button wire:click="cambiarEstado({{ $mesa->id }}, 'pendiente')"
                        class="bg-yellow-500 text-white px-2 py-1 rounded text-sm">Pendiente</button>
                <button wire:click="cambiarEstado({{ $mesa->id }}, 'cerrada')"
                        class="bg-red-500 text-white px-2 py-1 rounded text-sm">Cerrar</button>
            </div>
        </div>
    @endforeach
</div>

