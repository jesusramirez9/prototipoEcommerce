<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('img/nosotros/slide2.jpg') }}')">
        <div class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
            <p class="m-0 shdot-text">Coqueteos Antojitos postres y tortas hechos en casa,</p>
            <p class="m-0 shdot-text">Un antojito que coquetea con tu paladar. </p>
         
        </div>
    </div>

    <div class="container mt-12 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-1 h-full lg:h-4/5">
                <div class=" text-justify py-12">
                    <div class="text-center">
                        <img src="{{ asset('img/servicio/torta.png') }}" class="d-initial" alt="">
                    </div>
                    <h3 class="text-center text-3xl text-white font-bold my-6">Sobre nosotros</h3>
                    <p class="text-white font-semibold text-lg xl:text-xl px-6  lg:px-12 ">Coqueteos antojitos nace en Agosto 2016 preparando postres, luego nos extendimos con tortas para cumpleaños, complementando con bocaditos hechos en casa. Actualmente ofrecemos Mesas Temáticas, Mesas de postres para bodas y celebraciones especiales, así como el alquiler de mobiliario y accesorios ofreciendo paquetes completos de atención.</p>
                </div>
            </div>
            <div>
                <img src="{{asset('img/nosotros/conocenos.jpg')}}" alt="">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-12">
            <div>
                <h1 class="text-black font-bold text-2xl lg:text-5xl px-6 md:px-0">Misión</h1>
                <p class="text-justify text-gray-800 font-semibold px-6 md:px-0">
                    Nuestra pequeña aventura surge ante la necesidad de unirse para compartir, cuando se desea celebrar una fecha especial con la familia y las amistades, agasajar a un grupo reducido o mayor de personas, organizar un evento corporativo, o, simplemente, atender a alguien especial, ofrecemos una atención personalizada con garantía de satisfacción.
                </p>
            </div>
            <div class="text-center hidden md:block">
                <img src="{{asset('img/nosotros/linea-diagonal.png')}}"class="d-initial" alt="">
            </div>
            <div>
                <h1 class="text-black font-bold text-2xl lg:text-5xl px-6 md:px-0">Visión</h1>
                <p class="text-justify text-gray-800 font-semibold px-6 md:px-0">
                    Convertirnos en un apoyo para tus eventos, ofreciendo nuestros servicios completos y permitiendo que disfrutes simplemente sin preocupaciones, todo nuestro trabajo se realiza con dedicación, cariño y delicadeza garantizando productos de primera calidad y recién elaborados, cuidamos cada detalle pues lo hacemos como si fuera para nosotros mismos.
                </p>
            </div>
        </div>
    </div>

</x-app-layout>