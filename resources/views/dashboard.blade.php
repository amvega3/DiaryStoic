<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('INICIO') }}
        </h2>
    </x-slot>
    <div>
        <div class="w-full mx-auto   ">
            <div class="w-full  bg-black">
                <div class="shadow-xl sm:rounded-lg mb-20 pb-10">
                    @livewire('post')


                </div>
            </div>

        </div>
    </div>
</x-app-layout>
