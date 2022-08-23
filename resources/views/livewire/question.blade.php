
   <button class="bg-green-900 px-2 py-2 mx-auto border border-black rounded-xl " wire:click="$set('showingModal',true)">Ver</button>

    <x-jet-dialog-modal wire:model="showingModal" >
        <x-slot name="title">
            Modal custom title
        </x-slot>

        <x-slot name="content">

        <div class="container">

        <form action="{{ url('/questions') }}" method="post">
            @csrf
            @include('answers.form');
        </form>
    </div>
  
        </x-slot>

        
        <x-slot name="footer">
            
            </x-slot>
    </x-jet-dialog-modal>





