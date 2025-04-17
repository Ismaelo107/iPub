<div>
    <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Listado de Productos en Stock</h2>

        @if($stock->isEmpty())
            <p class="text-gray-500">No hay productos registrados en el stock.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full table-auto border border-gray-200">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">#</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Nombre</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Unidades</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Categoría</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Precio Venta</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Precio Compra</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Descripción</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                    @foreach($stock as $producto)
                        <tr>
                            <td class="px-4 py-2 text-sm">{{ $producto->id }}</td>
                            <td class="px-4 py-2 text-sm">{{ $producto->nombre }}</td>
                            <td class="px-4 py-2 text-sm">{{ $producto-> unidades }}</td>
                            <td class="px-4 py-2 text-sm">{{ optional($categoria->nombre)->nombre ?? 'Sin categoría' }}</td>
                            <td class="px-4 py-2 text-sm">{{ number_format($producto->precio_venta, 2) }}</td>
                            <td class="px-4 py-2 text-sm">${{ number_format($producto->precio_compra, 2) }}</td>
                            <td class="px-4 py-2 text-sm">{{ optional($producto-> descripcion)->descripcion ?? 'Sin descripción'}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
