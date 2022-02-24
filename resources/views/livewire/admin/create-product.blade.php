<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">

    <h1 class="text-3xl text-center font-semibold mb-8">Complete esta información para crear un producto</h1>



    <div class="grid grid-cols-2 gap-6 mb-4">
        {{-- Categoria --}}
        <div>
            <x-jet-label value="Categorias"></x-jet-label>
            <select wire:model="category_id"
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="" selected disabled>Seleccione una categoría</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <x-jet-input-error for="category_id" />
        </div>
        {{-- Subcategoria --}}
        <div>
            <x-jet-label value="Subcategorias"></x-jet-label>
            <select wire:model="subcategory_id"
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="" selected disabled>Seleccione una Subcategoría</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">
                        {{ $subcategory->name }}
                    </option>
                @endforeach
            </select>
            <x-jet-input-error for="subcategory_id" />

        </div>
    </div>

    {{-- Código --}}

    <div class="mb-4">
        <x-jet-label value="Código del producto" />
        <x-jet-input type="text" wire:model="code" class="w-full"
            placeholder="Ingrese el código del producto: RON0001" />
        <x-jet-input-error for="code" />

    </div>

    {{-- Nombre --}}

    <div class="mb-4">
        <x-jet-label value="Nombre" />
        <x-jet-input type="text" wire:model="name" class="w-full"
            placeholder="Ingrese el nombre del producto:RON CARTAVIO SELECTO" />
        <x-jet-input-error for="name" />

    </div>
    {{-- Slug --}}
    <div class="mb-4">
        <x-jet-label value="Slug - Esto ayudara a indexar mas rápido a los navegadores" />
        <x-jet-input type="text" wire:model="slug" class="w-full bg-gray-200" placeholder="Ingrese el Slug del producto"
            disabled />
        <x-jet-input-error for="slug" />

    </div>

    {{-- Descripcion --}}

    <div class="mb-4">
        <div wire:ignore>
            <x-jet-label value="Descripción" />
            <textarea wire:model="description"
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                cols="30" rows="5" x-data x-init="
        ClassicEditor.create( $refs.miEditor )
        .then(function(editor){
            editor.model.document.on('change:data',() => {
                @this.set('description', editor.getData())
            })
        })
        .catch( error => {
            console.error( error );
        } );" x-ref="miEditor"></textarea>
        </div>
        <x-jet-input-error for="description" />

    </div>
    <div class="mb-4">
        <div wire:ignore>
            <x-jet-label value="Especificación" />
            <textarea wire:model="specification"
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                cols="30" rows="5" x-data x-init="
        ClassicEditor.create( $refs.miEditor )
        .then(function(editor){
            editor.model.document.on('change:data',() => {
                @this.set('specification', editor.getData())
            })
        })
        .catch( error => {
            console.error( error );
        } );" x-ref="miEditor"></textarea>
        </div>
        <x-jet-input-error for="specification" />

    </div>

    <div class="grid grid-cols-3 gap-6 mb-4">
        <div class="mb-4">
            {{-- Marca --}}
            <x-jet-label value="Marca" />
            <select
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                wire:model="brand_id">
                <option value="" selected disabled>Seleccionar una marca</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="brand_id" />

        </div>
        {{-- Precio --}}
        <div>
            <x-jet-label value="Precio final" />
            <x-jet-input wire:model="price" type="number" class="w-full" step=".01" />
            <x-jet-input-error for="price" />

        </div>

        <div>
            <x-jet-label value="Precio Aumentado para promociones" />
            <x-jet-input wire:model="offer" type="number"  class="w-full" step=".01" />
            <x-jet-input-error for="offer" />

        </div>

    </div>

    @if ($subcategory_id)

        @if (!$this->SubCategory->color && !$this->SubCategory->size)
            <div>
                <x-jet-label value="Cantidad" />
                <x-jet-input wire:model="quantity" type="number" class="w-full" />
                <x-jet-input-error for="quantity" />

            </div>
        @else
        @endif

    @endif

    <div class="flex mt-4">
        <x-jet-button wire:loading.attr="disabled" wire:target="save" wire:click="save" class="ml-auto">
            Crear Producto
        </x-jet-button>
    </div>

</div>
