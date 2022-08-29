<div>
    <!-- <button class="bg-green-900 px-2 py-2 mx-auto border fixed left-0 flex justify-center items-center border-black rounded-xl " wire:click="$set('showingModal',true)">Ver</button> -->
    <x-jet-dialog-modal wire:model="showingModal">
        <x-slot name="title" class="bg-black">
            <h2 class="text-[#FFC600]"> Nota del dia</h2>
        </x-slot>

        <x-slot name="content">
            <div class="bg-black">
                <!-- pregunta1  -->
                <div class="form-group ">
                    <label class="block uppercase tracking-wide text-[#FFC600] text-xs font-bold mb-2" for="answer">

                        ¿Qué he hecho mal hoy?

                    </label>
                </div>
                <input
                    class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                    type="text" name="answer" wire:model='answers1' id="answer"><br>
                <!-- <input class="appearance-none block w-full bg-[#FFC600] text-[#FFC600] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->

                <!-- pregunta 2 -->
                <div class="form-group">
                    <label class="block uppercase tracking-wide  text-[#FFC600] text-xs font-bold mb-2" for="answer">

                        ¿Qué he hecho bien hoy?

                               </label>

                    <input
                        class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                        type="text" name="answer" wire:model='answers2' id="answer"><br>
                    <!-- <input class="appearance-none block w-full bg-[#FFC600] text-[#FFC600] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
                </div>
                <!-- pregunta3 -->
                <div class="form-group">
                    <label class="block uppercase tracking-wide text-[#FFC600]  text-xs font-bold mb-2" for="answer">

                        ¿Qué podría haber hecho de otra manera?

                               </label>

                    <input
                        class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                        type="text" name="answer" wire:model='answers3' id="answer"><br>
                    <!-- <input class="appearance-none block w-full bg-[#FFC600] text-[#FFC600] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
                </div>
                <!-- pregunta 4 -->


                <div class="form-group">
                    <label class="block uppercase tracking-wide text-[#FFC600] text-xs font-bold mb-2" for="answer">

                        Define tu dia en una frase o palabra

                               </label>

                    <input
                        class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                        type="text" name="answer" wire:model='answers4' id="answer"><br>
                    <!-- <input class="appearance-none block w-full bg-[#FFC600] text-[#FFC600] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
                </div>
                <!-- pregunta 5 -->

                <div class="form-group">
                    <label class="block uppercase tracking-wide text-[#FFC600] text-xs font-bold mb-2" for="answer">

                        Pon lo que tu quieras

                               </label>

                    <input
                        class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                        type="text" name="answer" wire:model='answers5' id="answer"><br>
                    <!-- <input class="appearance-none block w-full bg-[#FFC600] text-[#FFC600] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
                </div>


            </div>




        </x-slot>


        <x-slot name="footer">
            <div class="flex items-center justify-between">

                <button class=" px-2 py-2 m-2 bg-[#FFC600] text-black text-center align-text-bottom rounded border "
                    type="button" wire:click="store"> Guardar Nota</button>

            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
