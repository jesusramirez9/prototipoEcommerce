<x-app-layout>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 ">
            <div class="alselcent">
                <div class="flex items-center justify-center text-center pb-6 ">
                    <div>
                        <img src="{{asset('img/logo.png')}}" class="w-16"  alt="">
                    </div>
                    <div>
                        <p class="ml-2 text-xl md:text-2xl txtbrde font-bold">Verificación de cuenta</p>
                    </div>
                </div>
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
        
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <div class="mt-4  items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
        
                        <div>
                            <x-jet-button type="submit" class="bg-footer">
                                {{ __('Resend Verification Email') }}
                            </x-jet-button>
                        </div>
                    </form>
        
                    <form method="POST" action="{{ route('logout') }}" class="text-center">
                        @csrf
        
                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 mt-4 text-center">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
            <div class="jtifyend imgregisterdp">
                <img src="{{asset('images/login_user/fondo.png')}}" width="w-full" alt="">
            </div>
        </div>

        
    </x-jet-authentication-card>
</x-guest-layout>
</x-app-layout>