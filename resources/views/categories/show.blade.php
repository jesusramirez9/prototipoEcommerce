<x-app-layout>
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/servicio/slide3.jpg') }}')">
            <div
                class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
                <p class="m-0 shdot-text">Coqueteos antojitos... un antojito que coquetea con tu paladar...</p>
                <p class="m-0 shdot-text">si te provoca, sólo pídelo, garantizamos tu satisfacción.</p>
            </div>
        </div>
    </div>
    <div class="container  pt-6 md:pt-14 pb-14">
        {{-- <figure class="mb-4">
            <img class="w-full h-80 object-cover object-center"  src="{{Storage::url($category->image)}}" alt="">
        </figure> --}}

        @livewire('category-filter', ['category' => $category])
    </div>

</x-app-layout>
