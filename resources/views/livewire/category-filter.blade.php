<div>
    <div class="bg-white rounded-lg shadow-lg mb-10">
        <div class="px-6 py-2 grid grid-cols-3">
            <h1 class="font-semibold text-gray-700 uppercase">Descarga nuestros catálogos: </h1>
           <div>
               <a href="{{asset('catalogo/bodas.pdf')}}" class="bg-red-500 hover:bg-red-600 hover:px-5  cursor-pointer py-2 px-4 text-white font-semibold rounded-lg"  download="bodas.pdf"  target="_blank">Bodas</a>     
           </div>
           
        </div>
    </div> 

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 xl:gap-8">
        <div class="text-center btn_filter_rp">
            <button class="bg-green-600 hover:bg-green-700 px-3 py-1 rounded text-white show-modal">
                Filtrar
            </button>
        </div>
        <aside class="category_filter_web">
            <div id="container-main">
                <div class="accordion-container">
                    <a class="accordion-titulo open">Categorías<span class="toggle-icon"></span></a>
                    <div class="accordion-content block">
                        <ul class="divide-y divide-gray-200">
                            @foreach ($category->subcategories as $subcategory)
                                {{-- <li class="py-2 text-sm ">
                                    <a class="cursor-pointer rronmaa hover:text-orange-500 font-semibold capitalize {{ $subcategoria == $subcategory->slug ? 'rronmaa font-semibold' : '' }} "
                                        wire:click="$set('subcategoria','{{ $subcategory->slug }}')">{{ $subcategory->name }}</a>
                                </li> --}}
                                <li class="py-2 text-sm rronmaa font-semibold">
                                    <a class="cursor-pointer  hover:text-orange-500 capitalize {{ $subcategoria == $subcategory->slug ? 'text-orange-500  font-semibold' : '' }}"
                                        wire:click="$set('subcategoria', '{{ $subcategory->slug }}')">{{ $subcategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a class="accordion-titulo open">Precio<span class="toggle-icon"></span></a>
                    <div class="accordion-content block">
                        <ul class="divide-y divide-gray-200">
                            @foreach ($precio_product as $precioitem)
                                <li class="py-2 text-sm rronmaa font-semibold">
                                    <a class="cursor-pointer hover:text-orange-500 capitalize {{ $precio == $precioitem['id'] ? 'text-orange-500 font-semibold' : '' }} "
                                        wire:click="$set('precio','{{ $precioitem['id'] }}')">{{ $precioitem['min'] }}
                                        - {{ $precioitem['max'] }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- <div class="accordion-container">
                    <a class="accordion-titulo open">Colores<span class="toggle-icon"></span></a>
                    <div class="accordion-content block">

                        <ul class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4 ">
                            @foreach ($colors_product as $coloritem)
                                <li class=" py-2 text-sm rronmaa font-semibold">
                                    
                                    <a class="cursor-pointer  hover:text-orange-500 capitalize {{ $color == $coloritem->id ? 'text-orange-500 font-semibold' : '' }} "
                                        wire:click="$set('color','{{ $coloritem->id }}')">
                                        
                                        <span class="ml-2 text-gray-700 capitalize bg_clds" style="background-color:{{$coloritem->name}} ">
                            
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a class="accordion-titulo open">Tallas<span class="toggle-icon"></span></a>
                    <div class="accordion-content block">
                        <ul class="divide-y divide-gray-200">
                            @foreach ($talla_product as $itemtalla)
                                <li class="py-2 text-sm rronmaa font-semibold">
                                    <a class="cursor-pointer hover:text-orange-500 capitalize {{ $talla == $itemtalla->name ? 'text-orange-500 font-semibold' : '' }} "
                                        wire:click="$set('talla','{{ $itemtalla->name }}')">{{ $itemtalla->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div> --}}
            </div>


            <x-jet-button class="mt-4" wire:click="limpiar">
                Eliminar filtros
            </x-jet-button>
        </aside>
        <div class="md:col-span-2 lg:col-span-4">
            <div>

            </div>
            @if ($view == 'grid')
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($products as $product)
                        <li class="bg-white  ">
                            <article class="zoomcatalg ">
                                
                                <a href="{{ route('products.show', $product) }}">
                                    <figure class="relative">
                                        <div class="absolute z-30">
                                            @if ($product->offer == 0)
                                                
                                            @else
                                            <div class="bg-red-800 text-white px-2 py-1 w-20 rounded-xl z-50">
                                                <p class="text-center">
                                                    - {{ intval((($product->offer - $product->price)/$product->offer)*100)}} %
        
                                                </p>
                                            </div>
        
                                            @endif
                                        </div>
                                        @if ($product->images->count())
                                            <img class="h-80 w-full object-cover object-center scrollflow -slide-bottom -opacity"
                                                src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                        @else
                                            <img class="h-80 w-full object-cover object-center"
                                                src="https://images.pexels.com/photos/5082560/pexels-photo-5082560.jpeg?cs=srgb&dl=pexels-cottonbro-5082560.jpg&fm=jpg"
                                                alt="">
                                        @endif
                                        
                                    </figure>
                                    <div class="py-2 px-2">
                                        <p class="text-green-700 text-center uppercase"> {{$product->subcategory->name}}</p>
                                       
                                        <h1 class="text-lg  text-center font-semibold scrollflow -slide-bottom -opacity">

                                            {{ Str::limit($product->name,40, '...') }}

                                        </h1>
                                        <p class="font-bold text-center text-green-700 scrollflow -slide-bottom -opacity">S/ {{ $product->price }}</p>
                                      @if ($product->offer != 0)
                                        <p class="text-center text-gray-300 line-through">S/ {{$product->offer}}</p>
                                          
                                      @else
                                          
                                      @endif
                                   
                                    </div>
                                </a>
                            </article>
                        </li>
                    @empty

                    <li class="md:col-span-2 lg:col-span-4">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Upss!</strong>
                            <span class="block sm:inline">No existe ningún producto con ese filtro.</span>
                        </div>
                    </li>
                    @endforelse
                </ul>
            @else
                <ul>
                    @forelse ($products as $product)
                        <x-product-list :product="$product" />
                    @empty
                       
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Upss!</strong>
                        <span class="block sm:inline">No existe ningún producto con ese filtro.</span>
                    </div>
                    @endforelse
                </ul>
            @endif

          <div class="mt-4 links_mds">
                {{ $products->links() }}
            </div>
        </div>
    </div>

    <div
        class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <!-- modal -->
        <div class="bg-white rounded shadow-lg tamaniomodal w-1/2">
            <!-- modal header -->
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg">Filtros</h3>
                <button class="text-black close-modal">&cross;</button>
            </div>
            <!-- modal body -->
            <div class="p-3 body_modal">

                <aside class="category_filter_rp">
                    <div id="container-main">
                        <div class="accordion-container">
                            <a class="accordion-titulo open">Categorías<span class="toggle-icon"></span></a>
                            <div class="accordion-content block">
                                <ul class="divide-y divide-gray-200">
                                    @foreach ($category->subcategories as $subcategory)
                                        {{-- <li class="py-2 text-sm ">
                                            <a class="cursor-pointer rronmaa hover:text-orange-500 font-semibold capitalize {{ $subcategoria == $subcategory->slug ? 'rronmaa font-semibold' : '' }} "
                                                wire:click="$set('subcategoria','{{ $subcategory->slug }}')">{{ $subcategory->name }}</a>
                                        </li> --}}
                                        <li class="py-2 text-sm rronmaa font-semibold">
                                            <a class="cursor-pointer  hover:text-orange-500 capitalize {{ $subcategoria == $subcategory->slug ? 'text-orange-500  font-semibold' : '' }}"
                                                wire:click="$set('subcategoria', '{{ $subcategory->slug }}')">{{ $subcategory->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <a class="accordion-titulo open">Precio<span class="toggle-icon"></span></a>
                            <div class="accordion-content block">
                                <ul class="divide-y divide-gray-200">
                                    @foreach ($precio_product as $precioitem)
                                        <li class="py-2 text-sm rronmaa font-semibold">
                                            <a class="cursor-pointer hover:text-orange-500 capitalize {{ $precioitem == $precioitem['id'] ? 'text-orange-500 font-semibold' : '' }} "
                                                wire:click="$set('precio','{{ $precioitem['id'] }}')">{{ $precioitem['min'] }}
                                                - {{ $precioitem['max'] }} </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="accordion-container">
                            <a class="accordion-titulo open">Colores<span class="toggle-icon"></span></a>
                            <div class="accordion-content block">
                                <ul class="grid grid-cols-6 md:grid-cols-4 lg:grid-cols-4 gap-2 ">
                                    @foreach ($colors_product as $coloritem)
                                        <li class=" py-2 text-sm rronmaa font-semibold">
                                            
                                            <a class="cursor-pointer  hover:text-orange-500 capitalize {{ $color == $coloritem->id ? 'text-orange-500 font-semibold' : '' }} "
                                                wire:click="$set('color','{{ $coloritem->id }}')">
                                                
                                                <span class="ml-2 text-gray-700 capitalize bg_clds" style="background-color:{{$coloritem->name}} ">
                                    
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> --}}
                        {{-- <div class="accordion-container">
                            <a class="accordion-titulo open">Tallas<span class="toggle-icon"></span></a>
                            <div class="accordion-content block">
                                <ul class="divide-y divide-gray-200">
                                    @foreach ($talla_product as $itemtalla)
                                        <li class="py-2 text-sm rronmaa font-semibold">
                                            <a class="cursor-pointer hover:text-orange-500 capitalize {{ $talla == $itemtalla->name ? 'text-orange-500 font-semibold' : '' }} "
                                                wire:click="$set('talla','{{ $itemtalla->name }}')">{{ $itemtalla->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </aside>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <x-jet-button class="mr-6" wire:click="limpiar">
                    Eliminar filtros
                </x-jet-button>
                <button
                    class="bg-orange-600 hover:bg-orange-700 px-3 py-1 rounded text-white mr-1 close-modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        const modal = document.querySelector('.modal');

        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden')
        });

        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden')
            });
        });

        $(".accordion-titulo").click(function() {

            var contenido = $(this).next(".accordion-content");

            if (contenido.css("display") == "none") { //open		
                contenido.slideDown(250);
                $(this).addClass("open");
            } else { //close		
                contenido.slideUp(250);
                $(this).removeClass("open");
            }

        });
    </script>
@endpush
