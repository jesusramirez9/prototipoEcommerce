<x-app-layout>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
            </x-slot>

            <x-jet-validation-errors class="mt-2 mb-4" />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 ">
                <div class="alselcent">
                    <div class="flex items-center justify-center text-center pb-6 ">
                        <div>
                            <img src="{{asset('img/logo.png')}}" class="w-16"  alt="">
                        </div>
                        <div>
                            <p class="ml-4 text-xl md:text-2xl verdegreen font-bold">Crea tu cuenta</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
        
                        <div>
                            {{-- <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
                            <x-jet-input id="name" class="block mt-1 w-full inptvrd" placeholder="Nombres y apellidos*" type="text" name="name" :value="old('name')"
                                required autofocus autocomplete="name" />
                        </div>
        
                        <div class="mt-4">
                            {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                            <x-jet-input id="email" class="block mt-1 w-full inptvrd" placeholder="Correo electrónico*" type="email" name="email" :value="old('email')"
                                required />
                        </div>
        
                        <div class="mt-4">
                            {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                            <x-jet-input id="password" class="block mt-1 w-full inptvrd" placeholder="Contraseña*" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>
        
                        <div class="mt-4">
                            {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full inptvrd" placeholder="Repetir Contraseña*"  type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>
        
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms" />
        
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                              'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600                                   hover:text-gray-900">' . __('Terms of Service') . '</a>',
                                              'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600                                hover:text-gray-900">' . __('Privacy Policy') . '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
        
                        <div class="mt-4 w-full">
                            <x-jet-button class=" d-blck w-full text-center bg-footer">
                                {{ __('Register') }}
                            </x-jet-button>
                        </div>
                    </form>
                    <div class="mt-4 flex justify-center text-center">
                        <p>¿Ya tienes tu cuenta?</p>
                        <a href="{{ route('login') }}" class="ml-2 underline verdegreen font-bold">Inicia sesión</a>
                    </div>
                </div>
                <div class="jtifyend imgregisterdp">
                    <img src="{{asset('images/login_user/fondo.png')}}" width="w-full" alt="">
                </div>
            </div>

            
        </x-jet-authentication-card>
    </x-guest-layout>
</x-app-layout>
