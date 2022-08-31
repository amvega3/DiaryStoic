<x-guest-layout>
    <x-jet-authentication-card>
       

        <x-jet-validation-errors class="mb-4 w-52 h-52" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <x-slot name="logo">
            <x-application-logo />
        </x-slot>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label class="text-black text-xl text-xs font-bold mb-2" for="email" value="{{ __('Correo electronico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-black text-xl text-xs font-bold mb-2" for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-black text-xl">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-black text-x" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste la contraseña?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 text-[#FFC600] text-xs font-bold mb-2" >
                    {{ __('Iniciar sesión') }}
                </x-jet-button>

            </div>
            <div class="flex items-center justify-start mt-4">
                <a href="{{ url('auth/google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
