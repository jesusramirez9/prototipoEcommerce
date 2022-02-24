<x-app-layout>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        {{-- <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div> --}}

        @if (session('status'))
            <div class="mb-4 font-medium text-sm verdegreen">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 ">
            <div class="alselcent">
                <div class="flex items-center justify-center text-center pb-6 ">
                    <div>
                        <img src="{{asset('img/logo.png')}}" class="w-16"  alt="">
                    </div>
                    <div>
                        <p class="ml-4 text-xl md:text-3xl verdegreen text-left font-bold">He olvidado <br>mi contraseña </p>
                    </div>
                </div>   
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
        
                    <div class="block">
                        {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                        <x-jet-input id="email" class="block mt-1 w-full inptvrd" placeholder="Ingresa tu correo electrónico" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="mt-4 w-full">
                        <x-jet-button class="d-blck w-full text-center bg-footer">
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
            <div class="jtifyend hidden md:block ">
                <img src="{{asset('images/login_user/fondo.png')}}" width="w-full" alt="">
            </div>

        </div>

       
    </x-jet-authentication-card>
</x-guest-layout>
</x-app-layout>