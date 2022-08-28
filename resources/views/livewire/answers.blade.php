<div class ="pt-5"> 
<div class="flex space-x-2 justify-center pb-5">  
<!-- <button  class="px-2 py-2 mx-auto inline-block rounded-full bg-[#FFC600] text-white leading-normal uppercase shadow-md ease-in-out w-9 h-9 " wire:click="$set('showingModal',true)"> <h3>+</h3></button> -->
<!-- <img src="{{ asset('img/plus (1).png') }}" alt="" width="100" height="200" class="px-2 py-2 mx-auto inline-block rounded-full  text-white leading-normal uppercase shadow-md ease-in-out w-9 h-9 " wire:click="$set('showingModal',true)" /> -->
<button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center"> 
<img src="{{ asset('img/plus (1).png') }}" alt="" width="300" height="200" class="px-2 py-2 mx-auto inline-block rounded-full  text-white leading-normal uppercase shadow-md ease-in-out w-9 h-9 " wire:click="$set('showingModal',true)" />
 
<span class="text-[#FFC600]">Agregar nota</span>
</button>
</div> 

<div class="divide-y  rounded-xl divide-slate-100 bg-[#FFC600] mr-40 ml-40 text-black "  >

  <x-list>
    @foreach ($answers as $answer)
    @if( $answer -> question_id  == 5)
      
    <x-list-item :answer="$answer" />

    @endif
    @endforeach
  </x-list>

          
          

</div>

   @include('answers.form');
 

     <x-jet-dialog-modal wire:model="showModal_answers"  >
          
          <x-slot name="title">
               
          </x-slot>

          <x-slot name="content">

          </x-slot>

          
          <x-slot name="footer"> 
          </x-slot>
          </x-jet-dialog-modal>

</div>





