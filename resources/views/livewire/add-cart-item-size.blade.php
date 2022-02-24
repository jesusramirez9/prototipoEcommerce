<div x-data>
    <div class="text-xl text-gray-700">
        <p class="sizecol mb-4">Elige tu talla:  </p>
        <div wire:model="size_id" class="divsize">
            @foreach ($sizes as $size)
               

                <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" value="{{ $size->id }}" name="size" id="{{ $size->name }}"
                        autocomplete="off"  >
                    <label class="btn btn-outline-primary mr-3 btn_talla" for="{{ $size->name }}"
                        >{{ $size->name }}</label>
                </div>

            @endforeach
        </div>
        
    

    </div>

    <div class="text-xl text-gray-700 mt-4">
        <p class="sizecol mt-8 mb-4">Elige tu color:</p>

        <div wire:model="color_id" class="divsize">
            {{-- @foreach ($colors as $color)

              <option class="capitalize" value="{{ $color->id }}">{{ __($color->name) }}</option> 

                <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" value="{{ $color->id }}" name="color" id="{{ __($color->name) }}"
                        autocomplete="off" checked>
                    <label class="btn btn-outline-primary mr-3 btn_talla" for="{{ __($color->name) }}"
                        >{{ __($color->name) }}</label>
                </div>

            @endforeach --}}
            
            @forelse ($colors as $color)    

            <div class="btn-group" role="group">
                <input type="radio" class="btn-check" value="{{ $color->id }}" name="color" id="{{ __($color->name) }}"
                    autocomplete="off" >
                <label class="btn btn-outline-primary mr-3 btn_talla btn_color" for="{{ __($color->name) }}"
                  style="background-color: {{ $color->name }}" ></label>
            </div>
            
            @empty
                <p class="text-sm">Elige una talla para elegir un color</p>
                
            @endforelse

            {{-- <span><a class="ml-4 underline font-bold cursor-pointer colorbrown">Tabla de tallas</a></span> --}}
        </div>

        {{-- <select wire:model="color_id"
            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <option value="" selected disabled>Seleccione un color</option>
            @foreach ($colors as $color)
                <option class="capitalize" value="{{ $color->id }}">{{ __($color->name) }}</option>
            @endforeach
        </select> --}}
      
    </div>
    <hr class="mt-8 mb-4 hrgreen">
    <p class="text-gray-700 my-4"> <span class="text-lg font-semibold">Stock disponible: </span>
        @if ($quantity)
            {{ $quantity }}
        @else
            {{ $product->stock }}
        @endif
    </p>

    <div class="flex ">
        <div class="mr-4 bordradiu">
            <x-jet-secondary-button class="btn_menmas" disabled x-bind:disabled="$wire.qty <= 1"
                wire:loading.attr="disabled" wire:target="decrement" wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-gray-700 qtydad">{{ $qty }}</span>
            <x-jet-secondary-button class="btn_menmas" x-bind:disabled="$wire.qty >= $wire.quantity"
                wire:loading.attr="disabled" wire:target="increment" wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">

            <div class="itemcolbtnweb">
                <x-button x-bind:disabled="!$wire.quantity" x-bind:disabled="$wire.qty > $wire.quantity"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem" color="orange"
                    class="w-full">
                    Agregar a la bolsa
                </x-button>
            </div>
            <div class="itemcolorbtn">
                <x-button x-bind:disabled="!$wire.quantity" x-bind:disabled="$wire.qty > $wire.quantity"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem" color="orange"
                    class="w-full">
                    Agregar
                </x-button>
            </div>
           



            {{-- <button x-bind:disabled="!$wire.quantity" x-bind:disabled="$wire.qty > $wire.quantity"
                wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem" color="orange" type="button" class="btn_grupe w-full divide-x divide-gray-700">
                <span class="button__img">
                    <img src="{{asset('images/catalogoproductos/3.png')}}" class=" "  alt="">
                </span>
                <span class="button__text">
                    Agregar a la bolsa
                </span>
            </button> --}}
        </div>
       
    </div>
    <div>
      <p class="uppercase text-gray-300 font-semibold">SKU:  {{$product->code}}</p> 
      <p class=" text-gray-300 font-semibold">Categoría: <span class="uppercase"> {{$product->subcategory->name}}</span> </p> 

    </div>
</div>
