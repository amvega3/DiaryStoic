<div class="pt-5">
    <div class="divide-y divide-slate-100 bg-[#FFC600] mr-40 ml-40 text-black ">

        <x-list>
            @foreach ($answers as $answer)
                @if ($answer->question_id == 5)
                    <x-list-item :answer="$answer" />
                @endif
            @endforeach
        </x-list>
    </div>
    @include('answers.form');

    <x-jet-dialog-modal wire:model="showModal_answers">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">





        </x-slot>


        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>

</div>
