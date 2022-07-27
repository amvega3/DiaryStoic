<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('INICIO') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto">
            <div class="w-full  h-screen bg-gradient-to-r from-indigo-500 via-orange-500 to-emerald-600">
                <div class="overflow-hidden h-screen shadow-xl sm:rounded-lg">
                    @livewire('home')
                 </div>
            </div>

        </div>
    </div>
</x-app-layout>
