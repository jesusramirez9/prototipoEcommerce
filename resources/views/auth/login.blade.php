<x-app-layout>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
              <x-jet-authentication-card-logo /> 
            </x-slot>

            <x-jet-validation-errors class="mb-4" />
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 ">
                <div class="alselcent">
                    <div class="flex items-center justify-center text-center pb-6 ">
                        <div>
                            <img src="{{asset('img/logo.png')}}" class="w-16"  alt="">
                        </div>
                        <div>
                          <p class="ml-4 text-xl md:text-3xl verdegreen font-bold">Inicia sesión</p>  
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
        
                        <div>
                            {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                            <x-jet-input id="email" class="block mt-1 w-full inptvrd" placeholder="Correo electrónico" type="email" name="email" :value="old('email')"
                                required autofocus />
                        </div>
        
                        <div class="mt-4">
                            {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                            <x-jet-input id="password" class="block mt-1 w-full inptvrd" placeholder="Contraseña" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>
        
        
        
                        <div class="flex items-center justify-between mt-4">
                            <div class="">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="underline text-xs sm:text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4 items-center text-center">
                            <x-jet-button class="d-blck w-full text-center bg-footer">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </form>
                    <div class="flex mt-4 text-center">
                        <p class="text-xs md:text-base">¿Aún no tienes una cuenta?</p>
                        <a href="{{ route('register') }}" class="text-sm md:text-base ml-2 underline verdegreen font-bold">Regístrate</a>
                    </div>
                </div>
                <div class="jtifyend  imgdsply">
                    <img src="{{asset('images/login_user/fondo.png')}}" width="w-full" alt="">
                </div>
            </div>

            

        </x-jet-authentication-card>
    </x-guest-layout>
</x-app-layout>
