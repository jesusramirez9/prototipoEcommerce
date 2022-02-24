<div class="container py-12">
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Crear nueva subcategoría
        </x-slot>
        <x-slot name="description">
            Complete la información necesaria para poder crear una subcategoría
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1">

                </x-jet-input>
                <x-jet-input-error for="createForm.name" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100">

                </x-jet-input>
                <x-jet-input-error for="createForm.slug" />
            </div>
            {{-- <div class="col-span-6 sm:col-span-4">
                <div class="flex items-center">
                    <p>¿Esta subcategoría necesita especificar color?</p>
                    <div class="ml-auto">
                        <label>
                            <input type="radio" name="color" value="1" id="" wire:model.defer="createForm.color">
                            Si
                        </label>
                        <label>
                            <input type="radio" name="color" value="0" id="" wire:model.defer="createForm.color">
                            No
                        </label>
                    </div>
                </div>
                <x-jet-input-error for="createForm.color" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <div class="flex items-center">
                    <p>¿Esta subcategoría necesita especificar talla?</p>
                    <div class="ml-auto">
                        <label>
                            <input type="radio" name="size" value="1" id="" wire:model.defer="createForm.size">
                            Si
                        </label>
                        <label>
                            <input type="radio" name="size" value="0" id="" wire:model.defer="createForm.size">
                            No
                        </label>
                    </div>
                </div>
                <x-jet-input-error for="createForm.size" />
            </div> --}}


        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Categoría creada
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

    </x-jet-form-section>

    <x-jet-action-section>
        <x-slot name="title">
            Lista de subcategorías
        </x-slot>
        <x-slot name="description">
            Aquí encontraras todas las subcategorias agregadas que servirán para el filtro
        </x-slot>
        <x-slot name="content">
            <table class="text-gray-600">
                <thead class="border-b border-gray-300">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre</th>
                        <th class="py-2">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <td class="py-2">

                                <span class="uppercase ">
                                    {{ $subcategory->name }}
                                </span>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                        wire:click="edit('{{ $subcategory->id }}')">Editar</a>
                                    <a class="pl-2 hover:text-red-600 cursor-pointer"
                                        wire:click="$emit('deleteSubcategory','{{ $subcategory->id }}')">Eliminar</a>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>

    </x-jet-action-section>

    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar subcategoría
        </x-slot>
        <x-slot name="content">
            <div class="space-y-3">

                <div>
                    <x-jet-label>
                        Nombre
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1">

                    </x-jet-input>
                    <x-jet-input-error for="editForm.name" />
                </div>
                <div>
                    <x-jet-label>
                        Slug
                    </x-jet-label>
                    <x-jet-input disabled wire:model="editForm.slug" type="text" class="w-full mt-1 bg-gray-100">

                    </x-jet-input>
                    <x-jet-input-error for="editForm.slug" />
                </div>
                {{-- <div>
                    <div class="flex items-center">
                        <p>¿Esta subcategoría necesita especificar color?</p>
                        <div class="ml-auto">
                            <label>
                                <input type="radio" name="color" value="1" id="" wire:model.defer="editForm.color">
                                Si
                            </label>
                            <label>
                                <input type="radio" name="color" value="0" id="" wire:model.defer="editForm.color">
                                No
                            </label>
                        </div>
                    </div>
                    <x-jet-input-error for="editForm.color" />
                </div>
                <div>
                    <div class="flex items-center">
                        <p>¿Esta subcategoría necesita especificar talla?</p>
                        <div class="ml-auto">
                            <label>
                                <input type="radio" name="size" value="1" id="" wire:model.defer="editForm.size">
                                Si
                            </label>
                            <label>
                                <input type="radio" name="size" value="0" id="" wire:model.defer="editForm.size">
                                No
                            </label>
                        </div>
                    </div>
                    <x-jet-input-error for="createForm.size" />
                </div> --}}

            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>


    </x-jet-dialog-modal>

    @push('script')

        <script>
            livewire.on('deleteSubcategory', subcategoryId => {
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

                        Livewire.emitTo('admin.show-category', 'delete', subcategoryId);

                        Swal.fire(
                            'Eliminado!',
                            'Ha sido eliminado con éxito.',
                            'Éxito'
                        )
                    }
                })
            })
        </script>

    @endpush
</div>
