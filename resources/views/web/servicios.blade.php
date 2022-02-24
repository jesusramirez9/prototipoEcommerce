<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('img/servicio/slide2.jpg') }}')">
        <div class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
            <p class="m-0 shdot-text">Te invitamos a echar un vistazo a nuestra variedad de productos,</p>
            <p class="m-0 shdot-text">estamos seguros querrás probarlos cuanto antes. </p>
            <p class="m-0 shdot-text">Estamos para servirte.</p>
        </div>
    </div>

    <div class="container mt-10 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
            <div class="bg-1 ">
                <div class=" text-justify pt-4 lg:pt-12 pb-4 lg:pb-12">
                    <div class="text-center">
                        <img src="{{ asset('img/servicio/torta.png') }}" class="d-initial" alt="">
                    </div>
                    <h3 class="text-center text-2xl xl:text-3xl text-white font-bold my-6">Mesas de Postres y Bocaditos</h3>
                    <p class="text-white font-semibold text-lg lg:text-xl px-6 md:px-12 ">Todo tipo de mini postres y bocaditos para tus eventos familiares, de amistades, corporativos o
                        académicos, Catering. Solicita nuestra carta.</p>
                </div>
            </div>
            <div class="">
                <img src="{{ asset('img/servicio/mesasdepostresybocaditos1.jpg') }}" alt="">
            </div>
            <div class="bg-2">
                <div class=" text-justify pt-4 lg:pt-12 pb-4 lg:pb-12">
                    <div class="text-center">
                        <img src="{{ asset('img/servicio/torta.png') }}" class="d-initial" alt="">
                    </div>
                    <h3 class="text-center text-2xl xl:text-3xl text-white font-bold my-6">Temáticas y mobiliario</h3>
                    <p class="text-white font-semibold text-lg lg:text-xl px-6 md:px-12 ">Temáticas infantiles, todo tipo de dulces tematizados y ambientación para la presentación de los
                        mismos. Contamos con mobiliario para alquilar y hacer de tu fiesta algo inolvidable.</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/servicio/tematicasymobiliario.jpg') }}" alt="">
            </div>
            <div  class="bg-3">
                <div class=" text-justify pt-4 lg:pt-12 pb-4 lg:pb-12">
                    <div class="text-center">
                        <img src="{{ asset('img/servicio/torta.png') }}" class="d-initial" alt="">
                    </div>
                    <h3 class="text-center text-2xl xl:text-3xl text-white font-bold my-6">Tortas y postres</h3>
                    <p class="text-white font-semibold text-lg lg:text-xl px-6 md:px-12 ">Elaboración de tortas tematizadas para celebraciones, así como postres tradicionales y derivados
                        para compartir con los tuyos.</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/servicio/tortasypostres.jpg') }}" alt="">
            </div>
        </div>
    </div>

</x-app-layout>
