<x-guest-layout>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <div class="max-w-7xl mx-auto h-auto">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden font-robot uppercase border-b p-1 fixed top-0 right-0 px-6 pt-4 sm:block">
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
                <div class="w-full h-screen  bg-[#FFC600]">
                    <div class=" h-4/5 bg-black border-transparent shadow-lg shadow-cyan-200   border-[1.5px] z-20 mt-12 p-1 mx-2 rounded-md">
                        <h1 class="font-robot text-center mt-2 p-2 text-cyan-100 animate-pulse uppercase tracking-wide font-bold text-4xl">
                            FILOSOFÍA ESTOICA
                        </h1>
                        <x-carousel-item/>
                    </div>
                </div>
                <div class="w-full h-screen bg-[#000000] shadow-xl shadow-white">
                    <img class="mt-32 pt-6 mx-auto" src="{{ asset('storage/images/welcome01.png') }}" alt="sin img" srcset="">

                </div>

            </div>
        </div>
    </div>

</x-guest-layout>
