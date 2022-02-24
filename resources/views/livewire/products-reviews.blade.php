<div>
    <div class="card">
        <div class="card-body shadow-xl px-4 py-4">
            <h4 class="my-6 font-medium text-purple-700 text-lg">Valoraciones</h4>
            @auth
                <div>
                    <article>
                        <textarea wire:model="comment" placeholder="Ingrese una reseña del producto"
                            class="border-gray-400 border-opacity-20 border-2" name="" id="" cols="30" rows="4"></textarea>
                        <div class="flex items-center">
                            <button wire:click="store"
                                class="bg-green-800 py-3 px-4 mt-2 text-white rounded-xl mr-3">Comentar</button>

                            <div>
                                <ul class="flex ">
                                    <li class="mr-1 cursor-pointer" wire:click="$set('rating', 1)">
                                        <i
                                            class="fas fa-star text-{{ $rating >= 1 ? 'yellow' : 'gray' }}-400 hover:text-yellow-400"></i>
                                    </li>
                                    <li class="mr-1 cursor-pointer" wire:click="$set('rating', 2)">
                                        <i
                                            class="fas fa-star text-{{ $rating >= 2 ? 'yellow' : 'gray' }}-400 hover:text-yellow-400"></i>
                                    </li>
                                    <li class="mr-1 cursor-pointer" wire:click="$set('rating', 3)">
                                        <i
                                            class="fas fa-star text-{{ $rating >= 3 ? 'yellow' : 'gray' }}-400 hover:text-yellow-400"></i>
                                    </li>
                                    <li class="mr-1 cursor-pointer" wire:click="$set('rating', 4)">
                                        <i
                                            class="fas fa-star text-{{ $rating >= 4 ? 'yellow' : 'gray' }}-400 hover:text-yellow-400"></i>
                                    </li>
                                    <li class="mr-1 cursor-pointer" wire:click="$set('rating', 5)">
                                        <i
                                            class="fas fa-star text-{{ $rating >= 5 ? 'yellow' : 'gray' }}-400 hover:text-yellow-400"></i>
                                    </li>
                                </ul>

                            </div>
                            <div>
                                @switch($rating)
                                    @case(1)
                                        <p>Producto malo</p>
                                    @break
                                    @case(2)
                                        <p>Producto no tan malo</p>
                                    @break
                                    @case(3)
                                        <p>Producto común</p>
                                    @break
                                    @case(4)
                                        <p>Producto bueno</p>
                                    @break
                                    @case(5)
                                        <p>Producto excelente</p>
                                    @break
                                    @default

                                @endswitch
                            </div>
                        </div>

                    </article>
                </div>
                @else

            <p class="text-gray-800 mt-8 mb-4"> Para comentar y dar valoración a algunos de nuestros productos, deberás registrarte a nuestra plataforma</p>
            <a href="{{route('register')}}" class="bg-red-400 text-white font-bold py-2 px-2 rounded-lg">Regístrate aqui</a>


            @endauth
            <p class="text-gray-800 mt-8 mb-4">{{ $product->reviews->count() }} Valoraciones</p>
            <div class="contenspace overflow-auto">
               
                @foreach ($product->reviews as $review)
                    <article class="flex mb-4 text-gray-800">
                        <figure class="mr-4">
                            <img class="h-12 w-12 object-cover rounded-full shadow-lg"
                                src="{{ $review->user->profile_photo_url }}" alt="">
                        </figure>

                        <div class="card flex-1">
                            <div class="card-body bg-gray-100 py-2 px-4">
                                <p><b>{{ $review->user->name }}</b> <i class="fas fa-star text-yellow-400"></i>
                                    ({{ $review->rating }}) </p>
                                    <p class="text-sm">{{$review->created_at->diffForHumans()}}</p>
                                @switch( $review->rating )
                                    @case(1)
                                        <p class="text-blue-700 font-medium py-2">Producto malo</p>
                                    @break
                                    @case(2)
                                        <p class="text-blue-700 font-medium py-2">Producto no tan malo</p>
                                    @break
                                    @case(3)
                                        <p class="text-blue-700 font-medium py-2">Producto común</p>
                                    @break
                                    @case(4)
                                        <p class="text-blue-700 font-medium py-2">Producto bueno</p>
                                    @break
                                    @case(5)
                                        <p class="text-blue-700 font-medium py-2">Producto excelente</p>
                                    @break
                                    @default

                                @endswitch
                                {{ $review->comment }}
                                {{-- <div class="flex float-right">
                                   <p class="hover:text-red-400 cursor-pointer">  <p class="text-end text-sm mx-2 hover:text-red-400 cursor-pointer" wire:click="delete"><i class="fas fa-trash"></i> Eliminar</p></p>
                                    
                                </div> --}}
                            </div>
                            
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</div>
