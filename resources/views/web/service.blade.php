<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('img/servicio/slide2.jpg') }}')">
        <div
            class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
            <p class="m-0 shdot-text">Te invitamos a echar un vistazo a nuestra variedad de productos,</p>
            <p class="m-0 shdot-text">estamos seguros querrás probarlos cuanto antes. </p>
            <p class="m-0 shdot-text">Estamos para servirte.</p>
        </div>
    </div>
    <div class="my-16">
        @livewire('show-service')

    </div>
</x-app-layout>
