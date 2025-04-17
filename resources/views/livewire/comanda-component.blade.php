<div>
    <div class="bg-blue-500 h-16 p-3 space-x-4">
    <a href="{{route("welcome")}}" class="text-3xl">Mesas</a>
    <a href="{{route("categoria")}}" class="text-3xl">Crear categoria</a>
    <a href="{{route("stock")}}" class="text-3xl">Stock</a>
    </div>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">



        <h2 class="text-2xl font-bold mb-4">Comanda de Mesa #{{ $mesa->id }}</h2>

        <div>
            @livewire('categorias')
        </div>
        <!-- Formulario para crear una nueva comanda -->
        <form wire:submit.prevent="crearComanda" class="mb-6">
            <div class="grid grid-cols-1 gap-4">
                <!-- Campo para el producto -->
                <div>
                    <label for="producto" class="block text-sm font-medium text-gray-700">Producto</label>
                    <input type="text" wire:model="producto" id="producto"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @error('producto') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

                <!-- Campo para la cantidad -->
                <div>
                    <label for="cantidad" class="block text-sm font-medium text-gray-700">Cantidad</label>
                    <input type="number" wire:model="cantidad" id="cantidad"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @error('cantidad') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

                <!-- Campo para la descripción -->
                <div>
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea wire:model="descripcion" id="descripcion"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                    @error('descripcion') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

                <!-- Botón para enviar el formulario -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Crear Comanda
                    </button>
                </div>
            </div>
        </form>

        <!-- Lista de comandas -->
        @if($comandas->isEmpty())
            <p class="text-gray-600">No hay comandas para esta mesa.</p>
        @else
            <div class="space-y-4">
                @foreach($comandas as $comanda)
                    <div class="p-4 border rounded-lg shadow-sm">
                        <h3 class="text-lg font-semibold">Comanda #{{ $comanda->id}}</h3>
                        <p class="text-sm text-gray-600">Producto: {{ $comanda->producto }}</p>
                        <p class="text-sm text-gray-600">Cantidad: {{ $comanda->cantidad }}</p>
                        <p class="text-sm text-gray-600">Descripción: {{ $comanda->descripcion }}</p>
                        <p class="text-sm text-gray-600">Hora: {{ $time = $horaActual }}</p>
                        <p class="text-sm text-gray-600">Fecha: {{ $time = $fechaActual }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
