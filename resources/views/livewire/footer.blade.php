<footer class="fondo_bg  pb-10">
    <div class="container">
        <div class="hidden md:flex justify-between mx-28 lg:mx-48 xl:mx-72 py-8">
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('/') ? 'active text-yellow-500 underline' : '' }}" href="/">Bienvenido</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('conocenos') ? 'active text-yellow-500 underline' : '' }}" href="{{route('conocenos')}}">Conócenos</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('categories/*') ? 'active text-yellow-500 underline' : '' }}" href="http://127.0.0.1:8000/categories/coqueteos-y-antojitos">Catálago</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('servicios') ? 'active text-yellow-500 underline' : '' }}" href="{{route('servicios')}}">Servicios</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('contactanos') ? 'active text-yellow-500 underline' : '' }}" href="{{route('contacto')}}">Escríbenos</a>
        </div>
        <div class="grid grid-cols-1 justify-items-center md:flex items-center text-white font-bold text-2xl justify-between">
            <div class="mt-10 md:mt-0">
                <p>Somos la mejor</p>
                <p class="colorosa">Pastelería</p>
            </div>
            <div class="py-5 md:py-0">
                <img src="{{asset('img/logo_foot1.jpg')}}" alt="">
            </div>
            <div>
                <p>Llámanos al:</p>
                <p class="text-yellow-400 mb-4">948 147 369</p>
            </div>
        </div>
    </div>
</footer>