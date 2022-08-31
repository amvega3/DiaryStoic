<div>
<article class="flex items-start space-x-6 p-5 rounded-xl" >

<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" class="w-7 h-7" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
  </svg>
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
  
  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cat" class="w-5 h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path fill="currentColor" d="M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.36 32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.29 2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"></path>
  </svg>
  <br>
  
 
</article>
</div>