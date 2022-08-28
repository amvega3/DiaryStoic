<article class="flex items-start space-x-6 p-6 " type="button" wire:click="$set('showingModal_answers',true)">

  <img src="" alt="" width="60" height="88" class="flex-none rounded-md bg-slate-100" />
 
  <div class="min-w-0 relative flex-auto ">
 
    <h2 class="font-semibold text-black truncate text-2xl pr-20">
  
    Dia: {{ $answer-> created_at }}
               </h2>
    <dl class="mt-2 flex flex-wrap text-sm leading-6 font-medium">
    
    <div >
        <dt class="sr-only"></dt>
        <dd class="font-bold px-1.5 ring-1 ring-slate-200 rounded  block uppercase tracking-wide text-x  ">Así definiste este día</dd>
      </div>
      
      <div class="flex-none w-full mt-2 font-extrabold block uppercase tracking-wide  font-bold ">
        <dt class="sr-only"></dt>
        <dd class=" text-black">
                    {{$answer-> answer}}
                 
               </dd>
      </div>
    </dl>

  </div>
  <img src="" alt="" width="60" height="88" class="flex-none rounded-md bg-slate-100" />
</article>
