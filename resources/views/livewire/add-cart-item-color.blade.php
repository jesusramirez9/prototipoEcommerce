<div x-data>
    <p class="text-xl text-gray-700 ">Color:</p>
    <select wire:model="color_id"
        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <option value="" selected disabled>Seleccionar un color</option>
        @foreach ($colors as $color)
            <option class="capitalize" value="{{ $color->id }}">{{ __($color->name) }}</option>
        @endforeach
    </select>
    <p class="text-gray-700 my-4">
        <span class="text-lg font-semibold">Stock disponible: </span>
        @if ($quantity)
            {{ $quantity }}
        @else
            {{ $product->stock }}
        @endif
    </p>
    <div class="flex mt-4">
        <div class="mr-4 bordradiu">
            <x-jet-secondary-button class="btn_menmas" disabled x-bind:disabled="$wire.qty <= 1"
                x-bind:disabled="$wire.qty > $wire.quantity" wire:loading.attr="disabled" wire:target="decrement"
                wire:click="decrement">
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
                <x-button wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem"
                    x-bind:disabled="!$wire.quantity" color="orange" class="w-full">
                    Agregar a la bolsa
                </x-button>
            </div>
            <div class="itemcolorbtn">
                <x-button wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem"
                    x-bind:disabled="!$wire.quantity" color="orange" class="w-full">
                    Agregar
                </x-button>
            </div>


        </div>
    </div>
    <div>
        <p class="uppercase text-gray-300 font-semibold">SKU:  {{$product->code}}</p> 
        <p class=" text-gray-300 font-semibold">Categoría: <span class="uppercase"> {{$product->subcategory->name}}</span> </p> 
  
      </div>
</div>
