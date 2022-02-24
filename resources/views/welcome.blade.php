<x-app-layout>

    {{-- <div class="container py-8">
        @foreach ($categories as $category)
        
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{$category->name}}
                    </h1>

                    <a href="{{route('categories.show', $category)}}" class="text-orange-500 hover:text-orange-400 hover:underline ml-2 font-semibold">Ver más</a>

                </div>

                @livewire('category-products', ['category' => $category])
            </section>

        @endforeach
    </div> --}}
    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
            <div
                class="absolute text-left max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-36 xl:px-32 text-white font-bold  md:lr">
                <p class="m-0 shdot-text colorred text-xl md:text-4xl">CONTAMOS CON LOS</p>
                <p class="m-0 shdot-text colorosa text-xl md:text-4xl">MEJORES ANTOJITOS</p> <br>
                <div class="flex-1 hidden xl:block text-black">
                    @livewire('search')
                </div>
                <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl">Un antojito que coquetea con tu paladar</p>
                <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl">Todo lo hacemos con el amor de casa</p>
                <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl">Nada mejor que un postre para compartir en
                    familia.
                </p>
                <div class="flex text-base font-normal mt-6">
                    <a href=""
                        class="bg-yellow-50 text-gray-700 p-3 rounded-md font-bold hover:bg-red-400 hover:text-white transition-transform">Pedidos
                        aquí</a>
                    <a href=""
                        class="bg-red-400 p-3 rounded-md font-bold ml-8 hover:bg-yellow-50 hover:text-black ">Escríbenos</a>
                </div>
            </div>
        </div>

        <div class="relative container bg-gray-100 py-12 my-8">
            <div class="catalogslide">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                        <div>
                            <div>
                                <img src="{{ asset('img/home/sli2.jpg') }}" class="w-full rounded-md" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="mb-2 md:mb-6 colorosa font-bold text-lg">Torta húmeda de Chocolate</h3>
                            <p class="mb-8 px-6 md:px-0 text-gray-700 font-semibold">Delicioso queque húmedo de
                                chocolate
                                embebido en un almíbar de chocolate, rellena con dos capas de fudge, cubierta con fudge.
                                Super
                                chocolatosa!!!. Pídela desde su versión mini (10 porciones). Previous
                            </p>
                            <a
                                class="cursor-pointer bg-red-400 p-3 rounded-md font-bold hover:bg-yellow-50 hover:text-black">Ver
                                Antojitos</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                        <div>
                            <div>
                                <img src="{{ asset('img/home/sli3.jpg') }}" class="w-full rounded-md" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="mb-2 md:mb-6 colorosa font-bold text-lg">Crema Volteada</h3>
                            <p class="mb-8 px-6 md:px-0 text-gray-700 font-semibold">Un postre tradicional que gusta a
                                todos, la más cremosa versión la tenemos nosotros. Pídela desde 22cms
                            </p>
                            <a
                                class="cursor-pointer bg-red-400 p-3 rounded-md font-bold hover:bg-yellow-50 hover:text-black">Ver
                                Antojitos</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                        <div>
                            <div>
                                <img src="{{ asset('img/home/sli1.jpg') }}" class="w-full rounded-md" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="mb-2 md:mb-6 colorosa font-bold text-lg">Tres Leches</h3>
                            <p class="mb-8 px-6 md:px-0 text-gray-700 font-semibold">Un suave bizcochuelo de vainilla o
                                chocolate, embebido en nuestra deliciosa preparación de tres leches, rellena y cubierta
                                de chantilly y envuelta en una deliciosa corona de chocolate bitter. Pídela desde su
                                versión mini (10 porciones)
                            </p>
                            <a
                                class="cursor-pointer bg-red-400 p-3 rounded-md font-bold hover:bg-yellow-50 hover:text-black">Ver
                                Antojitos</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                        <div>
                            <div>
                                <img src="{{ asset('img/home/sli1.jpg') }}" class="w-full rounded-md" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="mb-2 md:mb-6 colorosa font-bold text-lg">Enrrollados Frutales</h3>
                            <p class="mb-8 px-6 md:px-0 text-gray-700 font-semibold">Delicioso y húmedo bizcochuelo de
                                vainilla, relleno con tres capas, mermelada o manjar, chantilly y fruta en trozos,
                                envueltos. Pídelo en su versión de 6 a 8 porciones, con la fruta que desees (chirimoya,
                                fresas, mango, lúcuma, etc.).
                            </p>
                            <a
                                class="cursor-pointer bg-red-400 p-3 rounded-md font-bold hover:bg-yellow-50 hover:text-black">Ver
                                Antojitos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="btn arrow_prev1 absolute prev11 p-4 rounded-lg bg-white opacity-50 hover:bg-purple-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-left text-xl hover:text-white font-bold"></i>
            </div>
            <div
                class="btn arrow_next1 absolute prev21 p-4 rounded-lg bg-white opacity-50 hover:bg-purple-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-right text-xl hover:text-white font-bold"></i>
            </div>
        </div>

        <div class="relative my-8 ">
            <div class="cardss">
                <div>
                    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
                        style="background-image: url('{{ asset('img/home/sli3.jpg') }}')">
                        <div
                            class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
                            <p class="m-0 shdot-text">Mesa de postres</p>
                            <p class="m-0 shdot-text">Riquísimos mini postres para hacer de tus celebraciones algo
                                especial.</p>

                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
                        style="background-image: url('{{ asset('img/home/bocadito.jpg') }}')">
                        <div
                            class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">

                            <p class="m-0 shdot-text">Bocaditos</p>
                            <p class="m-0 shdot-text">Preparados artesanalmente para deleitar al más exigente paladar.
                            </p>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
                        style="background-image: url('{{ asset('img/contacto/slide.jpg') }}')">
                        <div
                            class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
                            <p class="m-0 shdot-text">Cupcakes</p>
                            <p class="m-0 shdot-text">Dilo con cupcakes y envía ese mensaje “especial”</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="btn arrow_prev absolute prev1 p-4 rounded-lg bg-white opacity-50 hover:bg-purple-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-left text-xl hover:text-white font-bold"></i>
            </div>
            <div
                class="btn arrow_next absolute prev2 p-4 rounded-lg bg-white opacity-50 hover:bg-purple-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-right text-xl hover:text-white font-bold"></i>
            </div>
        </div>

        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">BOCADITOS</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">BOCADITOS</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">BODA</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">BODA</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">TORTAS</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">TORTAS</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">PROMOCIONES</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>
                <div class="bg_home1 bg_iniwidth w-full h-80"
                    style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
                    <div class="cursor-pointer text-center text-white">
                        <div
                            class="bg_hovrbgfuc opacity-70 w-full h-80 hover:opacity-0 transition-all ease-out efectoeas">
                            <h5 class="text-xl pt-32 text-white font-bold tracking-widest">PROMOCIONES</h5>
                            <p class="text-sm">TARTARA</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-10  container px-0 md:px-2 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-5 md:gap-8">
                <div class="md:col-span-2">
                    <img src="{{ asset('img/home/a.jpg') }}" class="w-full" alt="">
                </div>
                <div class=" col-span-3  bg-center bg-cover w-full object-cover object-center"
                    style="background-image: url('{{ asset('img/home/b.jpg') }}')">
                    <div class="py-8 px-8 ">
                        <p class="text-white font-bold text-4xl">SOMOS LOS MEJORES</p>
                        <p class="text-justify text-white">En nuestro rubro existen muchas opciones, sin embargo,
                            podemos
                            afirmar que nuestro trabajo es uno de los mejores debido a que nos esforzamos para que el
                            cliente sienta, en cada bocado, el amor con el que nuestros productos son preparados,
                            remontándolos a la sensación de disfrutarlos como hechos en casa.</p>
                    </div>
                </div>

                <div class="col-span-3  bg-center bg-cover w-full object-cover object-center"
                    style="background-image: url('{{ asset('img/home/c.jpg') }}')">
                    <div class="py-16 px-8">
                        <p class="text-white font-bold text-4xl">100% NATURAL</p>
                        <p class="text-justify text-white">Nuestros productos son elaborados bajo la más estricta
                            supervisión y uso de productos naturales, no usamos preservantes; solo ingredientes frescos
                            de
                            temporada, por ello, trabajamos solo bajo pedido garantizando así la frescura de nuestras
                            preparaciones, debido a esto nuestros clientes siguen confiando en nosotros desde nuestros
                            inicios.</p>
                    </div>
                </div>
                <div class="col-span-2">
                    <div>
                        <img src="{{ asset('img/home/d.jpg') }}" alt="">
                    </div>
                    <div class="mt-6">
                        <img src="{{ asset('img/home/e.jpg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div >
        @livewire('show-flayer')
    </div>




    @push('script')
        <script>
            Livewire.on('glider', function(id) {

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },

                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },

                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });

            });
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $('.cardss').slick({
                prevArrow: '.arrow_prev',
                nextArrow: '.arrow_next',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <script>
            $('.catalogslide').slick({
                prevArrow: '.arrow_prev1',
                nextArrow: '.arrow_next1',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        
    @endpush

</x-app-layout>
