
<x-jet-dialog-modal wire:model="showModal_answers" >
@foreach($answers -> $answer)
<x-slot name="title">
     Notal del dia {{$answer -> created_at}}
</x-slot>

<x-slot name="content">



  

</x-slot>

@endforeach
<x-slot name="footer"> 
</x-slot>
</x-jet-dialog-modal>