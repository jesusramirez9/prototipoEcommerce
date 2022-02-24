<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <x-table>
            <div class="px-6 py-4 flex items-center">
                {{-- <input type="text" wire:model='search'> --}}
                <div class="flex items-center">
                    <span class="mr-3">Mostrar</span>
                    <select class="mx-5 form-control" wire:model="cant">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="ml-3">entradas</span>
                </div>
                <x-jet-input class="flex-1 mx-4" placeholder="Escriba lo que quiere buscar" type="text"
                    wire:model='search' />
                @livewire('admin.create-service')  
                
             
            </div>
            @if (count($posts))
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 w-24 cursor-pointer py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('id')">
                                Id
                                {{-- Sort --}}

                                @if ($sort == 'id')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif

                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th scope="col"
                                class="px-6 cursor-pointer py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('title')">
                                Titulo

                                {{-- Sort --}}

                                @if ($sort == 'title')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif

                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif

                            </th>
                            <th scope="col"
                                class="px-6 cursor-pointer py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('description')">
                                Contenido
                                @if ($sort == 'description')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif

                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            {{-- Sort --}}
                            <th scope="col" class="text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acción
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($posts as $item)
                            
                            <tr class="bg-{{$item->status==1 ? 'red' : 'green'}}-200 ">
                                <td class="px-6 py-4 ">
                                    <div class="text-sm text-gray-900 font-semibold"> {{$loop->index + 1}} </div>
                                </td>
                                <td class="px-6 py-4 ">
                                    <div class="text-sm text-gray-900 capitalize">{{ $item->title }}</div>
                                </td>
                                <td class="px-6 py-4 ">
                                    <div class="text-sm text-gray-900 capitalize">{{ $item->description }}</div>
                                </td>
                                <td class="px-6 py-4 flex text-sm font-medium">
                                    {{-- @livewire('edit-post', ['post' => $post], key($post->id)) --}}
                                    <a class="btn btn-green" wire:click="edit({{ $item }})">
                                        <i class="fas fa-edit"></i></a>
                                    <a class="btn btn-red ml-2" wire:click="$emit('delete',{{ $item->id }})">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                </table>
                @if ($posts->hasPages())
                    <div class="px-6 py-3">
                        {{ $posts->links() }}
                    </div>
                @endif

            @else
                <div class="px-6 py-4">
                    No existe ningún registro coincidente
                </div>

            @endif

        </x-table>
    </div>

    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title">
            Editar el servicio
        </x-slot>
        <x-slot name="content">

            <div wire:loading wire:target="image"
                class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                <strong class="font-bold">
                    Imagen Cargando
                </strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado..</span>
            </div>

            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" class="mb-4" alt="">

            @else
                <img src="{{ Storage::url($post->image) }}" alt="">
            @endif

            <div class="mt-4">
                <x-jet-label value="Titulo del servicio" />
                <x-jet-input wire:model="post.title" type="text" class="w-full" />
            </div>

            <div>
                <x-jet-label value="Contenido del servicio" />
                <textarea wire:model="post.description" class="w-full form-control" rows="6"></textarea>
            </div>
            <div class="bg-white shadow-xl rounded-lg p-6 mb-4">
                <p class="font-semibold mb-2">Estado del servicio</p>
            
                <div class="flex">
                    <label class="mr-6">
                        <input wire:model="post.status" type="radio" name="status" value="1">
                        Oculto
                    </label>
                    <label>
                        <input wire:model="post.status" type="radio" name="status" value="2">
                        Publicado
                    </label>
                </div>
            
            </div>
            <div class="mb-4">
                <input type="file" wire:model="image" id="{{ $identificador }}">
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open_edit', false)" class="mr-4">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update" wire:loadin.attr="disabled:opacity-25">
                Actualizar Post
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>


</div>

