<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-4">
        @foreach($categories as $category)
            <div wire:click="verStock({{ $category->id }})"
                 class="p-4 rounded-lg shadow-md text-center cursor-pointer transition-all
                        {{ $categoriaSeleccionada == $category->id ?
                           'bg-blue-100 border-2 border-blue-500' :
                           'bg-gray-50 hover:bg-gray-100 border border-gray-200' }}">
                <h3 class="font-semibold">{{ $category->categoria }}</h3>
                <p class="text-xs text-gray-500 mt-1">
                    {{ $category->stocks_count }} productos
                </p>
            </div>
        @endforeach
    </div>

    @if($categoriaSeleccionada)
        <div class="mt-6 bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">
                    Productos de: {{ $categories->firstWhere('id', $categoriaSeleccionada)->categoria }}
                </h2>
                <button wire:click="verTodosProductos({{ $categoriaSeleccionada }})"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                    Ver todos los productos
                </button>
            </div>

            @if(count($productosFiltrados) > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($productosFiltrados as $producto)
                        <div class="border rounded-lg p-4 hover:shadow-md transition">
                            <h3 class="font-medium">{{ $producto->nombre }}</h3>
                            <p class="text-sm text-gray-600 mt-1">
                                ${{ number_format($producto->precio_venta, 2) }}
                            </p>
                            <div class="mt-2 flex justify-between items-center">
                                <span class="text-xs px-2 py-1 bg-gray-100 rounded-full">
                                    {{ $producto->tipo }}
                                </span>
                                <span class="text-xs {{ $producto->stock_actual > 0 ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $producto->stock_actual }} unidades
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-4">No hay productos disponibles en esta categoría.</p>
            @endif
        </div>
    @endif
</div>
