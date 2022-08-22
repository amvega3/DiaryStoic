
   <button class="bg-green-900 px-2 py-2 mx-auto border border-black rounded-xl " wire:click="$set('showingModal',true)">Ver</button>

    <x-jet-dialog-modal wire:model="showingModal" >
        <x-slot name="title">
            Modal custom title
        </x-slot>

        <x-slot name="content">

           <div>
           
           <form class="w-full max-w-lg">
           @foreach($questions as $question)
            <div class="flex flex-wrap -mx-3 mb-6">
            
            <div class="w-full md:w-full px-">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            
            {{$question->question}}
    
         </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="q1" type="text" placeholder=".....">
    </div>
  </div>
  @endforeach
  <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Enviar
      </button>
      
    </div>
 
  </div>


</form>
           </div>

  
        </x-slot>

        
        <x-slot name="footer">
            
            </x-slot>
    </x-jet-dialog-modal>





