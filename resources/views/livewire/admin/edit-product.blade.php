<div>

    <header class="bg-white shadow">
        <div class="max-w-7xl py-6 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Productos
                </h1>
                <x-button-enlace href="{{ route('admin.products.create') }}" class="bg-green-800 mx-5 hover:bg-black ml-auto">
                    Agregar más producto
                </x-button-enlace>
                <x-jet-danger-button wire:click="$emit('deleteProduct')">
                    Eliminar
                </x-jet-danger-button>
            </div>
        </div>

    </header>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">

        <h1 class="text-3xl text-center font-semibold mb-8">Complete esta información para crear un producto automaticamente</h1>
        <p class="text-sm">Ingresar como máximo 4 imagenes tiendo en cuenta que la primera sera la que se mostrará en el catálogo</p>
        <p class="text-sm">Tamaño recomendado: 600*650px </p>
        <p class="text-sm">Peso recomendado: menor a 1Mb</p>


        <div class="mb-4" wire:ignore>
            <form action="{{ route('admin.products.files', $product) }}" method="POST" class="dropzone"
                id="my-awesome-dropzone"></form>

        </div>

        @if ($product->images->count())
            <section class="bg-white shadow-xl rounded-lg p-6 mb-4">
                <h1 class="text-2xl text-center font-semibold mb-2">Imagenes del producto</h1>
                <p class="text-sm">Actualizado</p>
                <ul class="flex flex-wrap">
                    @foreach ($product->images as $image)
                        <li class="relative" wire:key="image-{{ $image->id }}">
                            <img class="w-32 h-20 object-cover" src="{{ Storage::url($image->url) }}" alt="">
                            <x-jet-danger-button class="absolute right-2 top-2"
                                wire:click="deleteImage({{ $image->id }})" wire:loading.attr="disabled"
                                wire:target="deleteImage({{ $image->id }})">
                                x
                            </x-jet-danger-button>
                        </li>
                    @endforeach

                </ul>
            </section>
        @endif

        @livewire('admin.status-product', ['product' => $product], key('status-product-'.$product->id))

        <div class="bg-white shadow-xl rounded-lg p-6">
            <div class="grid grid-cols-2 gap-6 mb-4">
                {{-- Categoria --}}
                <div>
                    <x-jet-label valute="Categorias"></x-jet-label>
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
                    <x-jet-label valute="Subcategorias"></x-jet-label>
                    <select wire:model="product.subcategory_id"
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
                <x-jet-label value="Código" />
                <x-jet-input type="text" wire:model="product.code" class="w-full"
                    placeholder="Ingrese el código del producto" />
                <x-jet-input-error for="code" />

            </div>

            {{-- Nombre --}}

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input type="text" wire:model="product.name" class="w-full"
                    placeholder="Ingrese el nombre del producto" />
                <x-jet-input-error for="name" />

            </div>
            {{-- Slug --}}
            <div class="mb-4">
                <x-jet-label value="Slug - Esto ayudara a indexar mas rápido a los navegadores " />
                <x-jet-input disabled type="text" wire:model="slug" class="w-full bg-gray-200"
                    placeholder="Slug del producto" />
                <x-jet-input-error for="slug" />

            </div>

            {{-- Descripcion --}}

            <div class="mb-4">
                <div wire:ignore>
                    <x-jet-label value="Descripción" />
                    <textarea wire:model="product.description"
                        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        cols="30" rows="5" x-data x-init="
            ClassicEditor.create( $refs.miEditor )
            .then(function(editor){
                editor.model.document.on('change:data',() => {
                    @this.set('product.description', editor.getData())
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
                    <textarea wire:model="product.specification"
                        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        cols="30" rows="5" x-data x-init="
            ClassicEditor.create( $refs.miEditor )
            .then(function(editor){
                editor.model.document.on('change:data',() => {
                    @this.set('product.specification', editor.getData())
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
                        wire:model="product.brand_id">
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
                    <x-jet-input wire:model="product.price" type="number" class="w-full" step=".01" />
                    <x-jet-input-error for="price" />

                </div>
                <div>
                    <x-jet-label value="Precio Aumentado para promociones" />
                    <x-jet-input wire:model="product.offer" type="number"  class="w-full" step=".01" />
                    <x-jet-input-error for="offer" />
        
                </div>
            </div>

            @if ($this->subcategory)

                @if (!$this->SubCategory->color && !$this->SubCategory->size)

                    <div>
                        <x-jet-label value="Cantidad" />
                        <x-jet-input wire:model="product.quantity" type="number" class="w-full" />
                        <x-jet-input-error for="product.quantity" />

                    </div>


                @endif

            @endif
            <div class="flex mt-4 justify-end items-center">
                <x-jet-action-message class="mr-3" on="saved">
                    Actualizado
                </x-jet-action-message>
                <x-jet-button wire:loading.attr="disabled" wire:target="save" wire:click="save">
                    Actualizar Producto
                </x-jet-button>
            </div>
        </div>

        @if ($this->subcategory)
            @if ($this->subcategory->size)

                @livewire('admin.size-product', ['product' => $product], key('size-product-'.$product->id))

            @elseif($this->subcategory->color)

                @livewire('admin.color-product', ['product' => $product], key('color-product-'.$product->id))

            @endif
        @endif


    </div>
    @push('script')
        <script>
            Dropzone.options.myAwesomeDropzone = {
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                dictDefaultMessage: "Arrastre una o varias imagenes al recuadro",
                acceptedFiles: 'image/*',
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                complete: function(file) {
                    this.removeFile(file);
                },
                queuecomplete: function() {
                    Livewire.emit('refreshProduct');
                }

            };


            Livewire.on('deleteProduct', () => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.edit-product', 'delete');

                        Swal.fire(
                            'Eliminado!',
                            'Tu archivo ha sido eliminado.',
                            'Éxito'
                        )
                    }
                })

            })

            Livewire.on('deleteSize', sizeId => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.size-product', 'delete', sizeId);

                        Swal.fire(
                            'Eliminado!',
                            'Tu archivo ha sido eliminado.',
                            'Éxito'
                        )
                    }
                })

            })

            Livewire.on('deletePivot', pivot => {
                Swal.fire({
                    title: 'Estas seguro?',
                    text: "¡No podrás revertir esto!.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.color-product', 'delete', pivot);

                        Swal.fire(
                            'Eliminado!',
                            'Tu archivo ha sido eliminado.',
                            'Éxito'
                        )
                    }
                })

            })
            Livewire.on('deleteColorSize', (pivot) => {
                Swal.fire({
                    title: 'Estas seguro?',
                    text: "¡No podrás revertir esto!.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.color-size', 'delete', pivot);

                        Swal.fire(
                            'Eliminado!',
                            'Tu archivo ha sido eliminado.',
                            'Éxito'
                        )
                    }
                })

            })
         
            
        </script>
    @endpush
</div>
