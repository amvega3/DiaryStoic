<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('INICIO') }}
        </h2>
    </x-slot>

        <div class="max-w-7xl mx-auto h-auto">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden font-mont uppercase fixed top-0 right-0 px-6 pt-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-300 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-base text-gray-300 dark:text-gray-500">Entrar</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-base text-gray-300 dark:text-gray-500">Registrar</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="w-full  h-screen grid -mb-4 grid-cols-2">
                    <div class="w-full h-screen bg-[#FFC600]"></div>
                    <div class="w-full h-screen bg-[#000000]"></div>

                </div>

            </div>
        </div>

</x-guest-layout>
