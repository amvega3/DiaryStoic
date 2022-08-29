<div class="h-screen">
    <button class="bg-green-900 px-2 py-2 mx-auto border border-black rounded-xl " wire:click="$set('showingModal',true)">Ver</button>

    <x-jet-dialog-modal wire:model="showingModal">
        <x-slot name="title">
            Modal custom title
        </x-slot>

        <x-slot name="content">



            <!-- pregunta1  -->
            <div class="form-group">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="answer">

                    ¿Qué he hecho mal hoy?

                </label>

                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control"
                    type="text" name="answer" wire:model='answers1' id="answer"><br>
                <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
            </div>
            <!-- pregunta 2 -->
            <div class="form-group">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="answer">

                    ¿Qué he hecho bien hoy?

                </label>

                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control"
                    type="text" name="answer" wire:model='answers2' id="answer"><br>
                <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
            </div>
            <!-- pregunta3 -->
            <div class="form-group">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="answer">

                    ¿Qué podría haber hecho de otra manera?

                </label>

                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control"
                    type="text" name="answer" wire:model='answers3' id="answer"><br>
                <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
            </div>
            <!-- pregunta 4 -->


            <div class="form-group">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="answer">

                    Define tu dia en una frase o palabra

                </label>

                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control"
                    type="text" name="answer" wire:model='answers4' id="answer"><br>
                <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
            </div>
            <!-- pregunta 5 -->

            <div class="form-group">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="answer">

                    Pon lo que tu quieras

                </label>

                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control"
                    type="text" name="answer" wire:model='answers5' id="answer"><br>
                <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id) ? $answer->qiestion_id : '' }}" id="question_id"><br> -->
            </div>
            <div class="flex items-center justify-between">

                <button class=" px-2 py-2 m-2 bg-blue-800 text-black rounded-md border " type="button" wire:click="store"> sjdnfjsdn</button>

            </div>


        </x-slot>


        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>

</div>
