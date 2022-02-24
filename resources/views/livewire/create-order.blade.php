<div class=" mt-8 pb-8 md:pt-8 md:pb-8 container  grid lg:grid-cols-2 xl:grid-cols-5 gap-6">

    <div class="order-2 lg:order-1 lg:col-span-1 xl:col-span-3">
        {{-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div> --}}
        {{-- {{ auth()->user()->name}} --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-4">
                <x-jet-label value="Nombre de contácto" class="colorverderr font-bold" />
                <x-jet-input type="text"
                            wire:model.defer="contact"
                           
                      
                            placeholder="Nombre de la persona que recibirá el producto"
                            class="w-full"/>
                <x-jet-input-error for="contact" />
            </div>

            <div>
                <x-jet-label value="Teléfono de contacto"  class="colorverderr font-bold" />
                <x-jet-input type="text" 
                            maxlength="9"
                            oninput="maxlengthNumber(this);"
                            wire:model.defer="phone"
                            placeholder="Ingrese un número de telefono de contácto"
                            class="w-full"/>

                <x-jet-input-error for="phone" />
            </div>
        </div>

        <div x-data="{ envio_type: @entangle('envio_type') }">
            <p class="mt-6 mb-3 text-xl colorverderr font-bold">Elige un destino</p>
 
            <label class="bg-white rounded-lg shadow px-6 py-4 flex items-center mb-4 cursor-pointer">
                <input x-model="envio_type" type="radio" value="1" name="envio_type" class="text-gray-600">
                <span class="ml-2 colorbroywm font-bold">
                    Recojo en tienda (Calle Falsa 123)
                </span>

                <span class=" colorbroywm font-bold ml-auto">
                    Gratis
                </span>
            </label>  

            <div class="bg-white rounded-lg shadow">
                <label class="px-6 py-4 flex items-center cursor-pointer">
                    <input x-model="envio_type"  type="radio" value="2" name="envio_type" class="text-gray-600" >
                    <span class="ml-2 colorbroywm font-bold">
                        Envío a domicilio
                    </span>

                </label>

                <div class="px-6 pb-6 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 hidden" :class="{ 'hidden': envio_type != 2 }">

                    {{-- Departamentos --}}
                    <div class="col-span-2 md:col-span-1">
                        <x-jet-label class="colorverderr font-bold" value="Departamento" />

                        <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" wire:model="department_id">

                            <option value="" disabled selected>Seleccione un Departamento</option>

                            @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>

                        <x-jet-input-error for="department_id" />
                    </div>

                    {{-- Ciudades --}}
                    <div class="col-span-2 md:col-span-1">
                        <x-jet-label class="colorverderr font-bold" value="Ciudad" />

                        <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" wire:model="city_id">

                            <option value="" disabled selected>Seleccione una ciudad</option>

                            @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>

                        <x-jet-input-error for="city_id" />
                    </div>


                    {{-- Distritos --}}
                    <div class="col-span-2 md:col-span-1">
                        <x-jet-label class="colorverderr font-bold" value="Distrito" />

                        <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" wire:model="district_id">

                            <option value="" disabled selected>Seleccione un distrito</option>

                            @foreach ($districts as $district)
                                <option value="{{$district->id}}">{{$district->name}}</option>
                            @endforeach
                        </select>

                        <x-jet-input-error for="district_id" />
                    </div>

                    <div class="col-span-2 md:col-span-1">
                        <x-jet-label class="colorverderr font-bold" value="Dirección" />
                        <x-jet-input class="w-full" wire:model="address" type="text" />
                        <x-jet-input-error for="address" />
                    </div>

                    <div class="col-span-2">
                        <x-jet-label class="colorverderr font-bold" value="Referencia" />
                        <x-jet-input class="w-full" wire:model="references" type="text" />
                        <x-jet-input-error for="references" />
                    </div>

                </div>
            </div>

        </div>

        <div>
            <x-jet-button
                wire:loading.attr="disabled"
                wire:target="create_order"
                class="mt-6 mb-4 bgvrdff" 
                wire:click="create_order">
                Continuar con la compra
            </x-jet-button>

            <hr>

            <p class="text-sm text-gray-700 mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam atque quo, labore facere placeat illo consequatur hic ut sapiente exercitationem, architecto iure, consequuntur impedit ex iusto ipsa voluptas laudantium iste <a href="" class="font-semibold text-orange-500">Políticas y privacidad</a></p>
        </div>

    </div>

    <div class="order-1 lg:order-2 lg:col-span-1 xl:col-span-2">
        <div class="bgresumencompra rounded-lg shadow p-6">
            <ul>
                <p class="colorverderr font-bold">Resumen de la compra</p>
                <hr class="mb-3 hrgreen">
                @forelse (Cart::content() as $item)
                    <li class="flex p-2 border-b border-gray-200">
                        <img class="h-15 w-20 object-cover mr-4" src="{{$item->options->image}}" alt="">

                        <article class="flex-1">
                            <h1 class="font-bold">{{$item->name}}</h1>

                            <div class="flex">
                                <p>Cant: {{$item->qty}}</p>
                                @isset($item->options['color'])
                                    <p class="mx-2">- Color: {{__($item->options['color'])}}</p>
                                @endisset

                                @isset($item->options['size'])
                                    <p>{{$item->options['size']}}</p>
                                @endisset

                            </div>

                            <p>S/ {{$item->price}}</p>
                        </article>
                    </li>
                @empty
                    <li class="py-6 px-4">
                        <p class="text-center text-gray-700">
                            No tiene agregado ningún item en el carrito
                        </p>
                    </li>
                @endforelse
            </ul>

            <hr class="mt-4 mb-3 hrgreen">

            <div class="colorverderr font-bold">
                <p class="flex justify-between items-center">
                    Subtotal
                    <span class="colorplomor font-semibold">S/ {{Cart::subtotal()}}</span>
                </p>
                <p class="flex justify-between items-center">
                    Envío
                    <span class="colorplomor font-semibold">
                        @if ($envio_type == 1 || $shipping_cost == 0)
                            Gratis
                        @else
                          S/ {{$shipping_cost}}
                        @endif
                    </span>
                </p>

                <hr class="mt-4 mb-3 hrgreen">

                <p class="flex justify-between items-center font-semibold">
                    <span class="text-lg">Total</span>
                    @if ($envio_type == 1)
                       S/ {{Cart::subtotal()}} 
                    @else
                        S/ {{Cart::subtotal() + $shipping_cost}} 
                    @endif
                </p>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            function maxlengthNumber (obj){
                if (obj.value.length > obj.maxLength) {
                    obj.value = obj.value.slice(0, obj.maxLength);
                }
            }
        </script>
    @endpush
</div>
