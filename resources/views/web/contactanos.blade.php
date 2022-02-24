<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('img/contacto/slide.jpg') }}')">
        <div
            class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
            <p class="m-0 shdot-text">Para mayor información contáctanos al <br> WhatsApp <br class="block md:hidden"> 948
                147 369 </p>
            <p class="m-0 shdot-text">Horario de atención: <br> Lun-Vie <br class="block md:hidden"> de 12.00 a 23.00 hrs
            </p>
            <p class="m-0 shdot-text">Sáb: 10.00 a 18.00 hrs </p>
            <p class="m-0 shdot-text">Domingos: cerrado</p>
        </div>
    </div>

    <div class="container my-10">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <p class="my-4 colorred text-2xl font-bold">Contáctanos:</p>
                <form action="{{ route('contacto.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input name="name"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nombres*" />
                        @error('name')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="Apellidos"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Apellidos*" />
                        @error('Apellidos')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="correo"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="email" placeholder="Correo electrónico*" />
                        @error('correo')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="celular"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="number" placeholder="Teléfono*" />
                        @error('celular')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <textarea name="mensaje" placeholder="Mensaje*"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"></textarea>
                        @error('mensaje')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="my-2  text-right">
                        <button type="submit"
                            class="  font-bold tracking-wide color_logo text-gray-100 p-3   
                          focus:outline-none focus:shadow-outline">
                            Enviar
                        </button>
                    </div>
                </form>

                <p class="mt-8 colorred text-2xl font-bold">Escríbenos:</p>
                <div class="flex items-center">
                    <img src="{{ asset('img/contacto/tel.png') }}" class="w-8 h-8" alt="">
                    <p class="my-4 colorred text-xs md:text-xl font-bold mx-2">Cel.: 948 147 369</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('img/contacto/msj.png') }}" class="w-8 h-8" alt="">
                    <p class="my-4 colorred text-xs md:text-xl font-bold mx-2">Correo.:
                        pedidos@coqueteosantojitos.com.pe</p>
                </div>

            </div>
            <div class="mapa_contacto px-2 md:px-8 ">
                <iframe class="img_prodct_Detalle"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7389826192025!2d-77.10558468483653!3d-12.0614716914575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbe1f1e721e7%3A0x9347134c0c78dd7c!2sCalle%2053B%2C%20Bellavista%2007011!5e0!3m2!1ses!2spe!4v1627609613218!5m2!1ses!2spe"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif


</x-app-layout>
