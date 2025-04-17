<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Productos de la categoría: {{ $categoria->categoria }}</h1>

    @if($productos->isEmpty())
        <p class="text-gray-600">No hay productos en esta categoría.</p>
    @else
        <ul class="grid grid-cols-1 gap-4">
            @foreach($productos as $producto)
                <li class="p-4 border rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">{{ $producto->nombre }}</h3>
                    <p class="text-sm text-gray-600">Precio: ${{ $producto->precio_venta }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
