<div>

    <form wire:submit="crearCategoria" class="mb-6">
        <div class="grid grid-cols-1 gap-4">
            <!-- Campo para el producto -->
            <div>
                <label for="categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
                <input type="text" wire:model="nombreCategoria" id="categoria"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('categoria') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>


            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                Crear Categoria
            </button>
        </div>
    </form>
</div>
