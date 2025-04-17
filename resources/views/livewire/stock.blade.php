<div class="bg-white p-6 rounded-lg shadow-md max-w-xl mx-auto">
    <h2 class="text-2xl font-bold mb-4 text-gray-700">Agregar Producto al Stock</h2>


    @livewire('crear-categoria')

    <form wire:submit.prevent="guardarProducto" class="space-y-4">

        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre del producto</label>
            <input type="text" wire:model="nombre"
                   class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Ej: Coca-Cola 500ml">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Cantidad</label>
            <input type="number" wire:model="unidades"
                   class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Ej: Coca-Cola 500ml">
        </div>


        <div>
            <label class="block text-sm font-medium text-gray-700">Precio de venta</label>
            <input type="number" wire:model="precio_venta"
                   class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="Ej: 2.50">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Precio de compra</label>
            <input type="number" wire:model="precio_compra"
                   class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Ej: 1.80">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Categoría</label>
            <select wire:model="categoria_id"
                    class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">Selecciona una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Descripcion</label>
            <input type="text" wire:model="descripcion"
                   class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Ej: Bebida">
        </div>

        <div class="pt-2">
            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                Guardar Producto
            </button>
        </div>
    </form>

    <!-- Botón de Ver Stock -->
    <div class="mt-4 text-center">
        <a href="{{ route('ver-stock') }}"
           class="inline-block bg-gray-100 text-blue-600 px-4 py-2 rounded-md border border-blue-500 hover:bg-blue-100 transition">
            Ver Stock
        </a>
    </div>
</div>
