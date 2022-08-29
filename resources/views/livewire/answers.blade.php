<div class="pt-5">
    <div class="flex space-x-2 justify-center pb-5">
        <!-- <button  class="px-2 py-2 mx-auto inline-block rounded-full bg-[#FFC600] text-white leading-normal uppercase shadow-md ease-in-out w-9 h-9 " wire:click="$set('showingModal',true)"> <h3>+</h3></button> -->
        <!-- <img src="{{ asset('img/plus (1).png') }}" alt="" width="100" height="200" class="px-2 py-2 mx-auto inline-block rounded-full  text-white leading-normal uppercase shadow-md ease-in-out w-9 h-9 " wire:click="$set('showingModal',true)" /> -->
        <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center" wire:click="$set('showingModal',true)">
            <img src="{{ asset('img/plus (1).png') }}" alt="" width="300" height="200"
                class="px-2 py-2 mx-auto inline-block rounded-full  text-white leading-normal uppercase shadow-md ease-in-out w-9 h-9 " wire:click="$set('showingModal',true)" />

            <span class="text-[#FFC600]">Agregar nota</span>
        </button>
    </div>

    <div class="divide-y  rounded-xl divide-slate-100 bg-[#FFC600] mr-40 ml-40 text-black ">

        <x-list>
            @foreach ($answers as $answer)
                @if ($answer->question_id == 1)
                    <div wire:click="showAllAnswers({{ $answer }})">
                        <x-list-item :answer="$answer" />
                    </div>
                @endif
            @endforeach
        </x-list>

    </div>


    @include('answers.form');
    <!-- @include('answers.allAnswers') -->

    @if ($showingModal_answers == true)
        <x-jet-dialog-modal wire:model="showingModal_answers">

            <x-slot name="title">
                Notal del dia -

            </x-slot>

            <x-slot name="content">

                @foreach ($data as $answer)
                    {{ $answer->id }}
                @endforeach





            </x-slot>

            <x-slot name="footer">
            </x-slot>

        </x-jet-dialog-modal>
    @endif
</div>
