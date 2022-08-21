<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('INICIO') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto">
            <div class="w-full  h-screen bg-black">
                <div class="overflow-hidden h-screen shadow-xl sm:rounded-lg">
                    @livewire('home')

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
