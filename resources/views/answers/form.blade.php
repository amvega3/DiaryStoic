@foreach($questions as $question)
<div class="form-group">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="answer">
            
            {{$question->question}}
    
         </label>

    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" type="text" name="answer" value="{{ isset($answer->answer)?$answer->answer:'' }}" id="answer"><br>
    <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" type="num" name="question_id" value="{{ isset($answer->question_id)?$answer->qiestion_id:'' }}" id="question_id"><br> -->
</div>  
@endforeach
<div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Guardar Nota">
        Enviar
      </button>
      
    </div>



<!-- <div>
           
           <form class="w-full max-w-lg" action="{{ url('/cliente') }}" method="post">
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
           </div> -->
