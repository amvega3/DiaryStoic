<div class="bg-black">
    <div class="mx-auto max-w-7xl p-2">
        <div class="bg-transparent	rounded-full h-3.5 flex	items-center mt-3 justify-center">
            <button wire:click='$set("add",true)'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white hover:text-green-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="34px" fill="#92929D">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
            </svg> --}}
        </div>
        @foreach ($posts as $post)
            <div>
                <main class="w-full bg-transparent flex items-center justify-center">
                    <div class="border max-w-screen-md bg-transparent mt-6 rounded-2xl p-4">

                        <div class="flex items-center	justify-between">
                            <div class="gap-3.5	flex items-center ">
                                @if ($post->user->profile_photo_path == null)
                                    <img src="{{ $post->user->profile_photo_url }}" class="object-cover bg-yellow-500 rounded-full w-10 h-10}}" />
                                @else
                                    <img src="{{ asset('$post->user->profile_photo_path') }}" class="object-cover bg-yellow-500 rounded-full w-10 h-10}}" />
                                @endif

                                <div class="flex text-sky-300 flex-col">
                                    <b class="mb-2 capitalize">{{ $post->user->name }}</b>
                                    <time datetime="06-08-21" class="text-gray-400 text-xs">{{ $post->created_at }}
                                    </time>
                                </div>
                            </div>
                            <div class="bg-transparent	rounded-full h-3.5 flex	items-center mt-3 justify-center">
                                <button wire:click='destroy({{$post}})'>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white hover:text-red-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>

                                </button>
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="34px" fill="#92929D">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                                </svg> --}}
                            </div>

                        </div>
                        <div class="whitespace-pre-wrap text-gray-200 mt-7">{{ $post->descripcion }}</div>

                        <div class="mt-5 flex gap-2	 justify-center border-b pb-4 flex-wrap	">
                            <img alt="404" src="{{ asset('storage/images/'.$post->path_image) }}" class="bg-transparent bg-cover rounded-2xl w-1/3 object-cover h-96 flex-auto" alt="photo">

                        </div>
                        <div class=" h-16 border-b text-green-100  flex items-center justify-around	">
                            <div class="flex items-center	gap-3	">
                                <svg width="20px" height="19px" viewBox="0 0 20 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Square_Timeline" transform="translate(-312.000000, -746.000000)">
                                            <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                                <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                    <g transform="translate(30.000000, 21.000000)" id="Comment">
                                                        <g>
                                                            <g id="ic_comment-Component/icon/ic_comment">
                                                                <g id="Comments">
                                                                    <polygon id="Path" points="0 0 24 0 24 25 0 25"></polygon>
                                                                    <g id="iconspace_Chat-3_25px" transform="translate(2.000000, 3.000000)" fill="#92929D">
                                                                        <path
                                                                            d="M10.5139395,15.2840977 L6.06545155,18.6848361 C5.05870104,19.4544672 3.61004168,18.735539 3.60795568,17.4701239 L3.60413773,15.1540669 C1.53288019,14.6559967 0,12.7858138 0,10.5640427 L0,4.72005508 C0,2.11409332 2.10603901,0 4.70588235,0 L15.2941176,0 C17.893961,0 20,2.11409332 20,4.72005508 L20,10.5640427 C20,13.1700044 17.893961,15.2840977 15.2941176,15.2840977 L10.5139395,15.2840977 Z M5.60638935,16.5183044 L9.56815664,13.4896497 C9.74255213,13.3563295 9.955971,13.2840977 10.1754888,13.2840977 L15.2941176,13.2840977 C16.7876789,13.2840977 18,12.0671403 18,10.5640427 L18,4.72005508 C18,3.21695746 16.7876789,2 15.2941176,2 L4.70588235,2 C3.21232108,2 2,3.21695746 2,4.72005508 L2,10.5640427 C2,12.0388485 3.1690612,13.2429664 4.6301335,13.28306 C5.17089106,13.297899 5.60180952,13.7400748 5.60270128,14.2810352 L5.60638935,16.5183044 Z"
                                                                            id="Path"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="text-sm	"> {{ $title }}</div>
                            </div>

                            <div class="flex items-center text-white	gap-3">

                                <button wire:click='updateLike({{$post}})'>
                                    @if (!$like)
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 {{ $like ? 'text-purple-500' : 'text-red-50' }}">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 {{ $like ? 'text-purple-500' : 'text-red-50' }}" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    @endif
                                </button>
                                <div class="text-sm"> {{$post->like}} likes</div>
                            </div>

                            <div class="flex items-center	gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                  </svg>

                                <div class="text-sm">{{$post->subtitulo}}</div>
                            </div>
                            <div class="flex items-center	gap-3">
                                <svg width="17px" height="22px" viewBox="0 0 17 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Square_Timeline" transform="translate(-787.000000, -745.000000)">
                                            <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                                <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                    <g transform="translate(30.000000, 21.000000)" id="Saved">
                                                        <g transform="translate(473.000000, 1.000000)">
                                                            <g id="ic_Saved-Component/icon/ic_Saved">
                                                                <g id="Saved">
                                                                    <circle id="Oval" cx="12" cy="12" r="12"></circle>
                                                                    <g id="Group-13-Copy" transform="translate(5.000000, 2.000000)" fill="#92929D">
                                                                        <path
                                                                            d="M2.85714286,-0.952380952 L12.1428571,-0.952380952 C14.246799,-0.952380952 15.952381,0.753200953 15.952381,2.85714286 L15.952381,18.2119141 C15.952381,19.263885 15.09959,20.116746 14.047619,20.116746 C13.6150601,20.116746 13.1953831,19.9694461 12.8576286,19.6992071 L7.5,15.4125421 L2.14237143,19.6992071 C1.32096217,20.3564207 0.122301512,20.2233138 -0.534912082,19.4019046 C-0.805151112,19.0641501 -0.952380952,18.644473 -0.952380952,18.2119141 L-0.952380952,2.85714286 C-0.952380952,0.753200953 0.753200953,-0.952380952 2.85714286,-0.952380952 Z M2.85714286,0.952380952 C1.80517191,0.952380952 0.952380952,1.80517191 0.952380952,2.85714286 L0.952380952,18.2119141 L6.31000952,13.9252491 C7.00569973,13.3686239 7.99430027,13.3686239 8.68999048,13.9252491 L14.047619,18.2119141 L14.047619,2.85714286 C14.047619,1.80517191 13.1948281,0.952380952 12.1428571,0.952380952 L2.85714286,0.952380952 Z"
                                                                            id="Rectangle-92"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="text-sm">Saved</div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <img src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                class="bg-yellow-500 rounded-full w-10 h-10 object-cover border">
                            <div class="flex items-center	justify-between	 bg-gray-50 h-11 w-11/12 border rounded-2xl	 overflow-hidden px-4 " <input type="text"
                                class="h-full w-full bg-gray-50 outline-none " placeholder="Write your comment..." name="comment">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            {{-- <x-post_-component :post="$post" :like="$like" /> --}}
        @endforeach
    </div>
    @if ($add)
        <x-dialog-modal-black wire:model="add">
            <x-slot name="title">
                <h2 class="text-white">Nuevo Post</h2>
            </x-slot>
            <x-slot name="content">
                <div class="bg-black">
                    <!-- pregunta1  -->
                    <div class="form-group ">
                        <label class="block uppercase tracking-wide text-[#FFC600] text-xs font-bold mb-2" for="answer">
                            Título
                        </label>
                    </div>
                    <input
                        class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                        type="text" name="answer" wire:model='title' id="answer">
                        @error('title') <span class="error text-red-700">{{ $message }}</span> @enderror
                    <div class="form-group ">
                        <label class="block uppercase tracking-wide text-[#FFC600] text-xs font-bold mb-2" for="answer">
                            Subtítulo
                        </label>
                    </div>
                    <input
                        class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                        type="text" name="answer" wire:model='subtitle' id="answer">
                        @error('subtitle') <span class="error text-red-700">{{ $message }}</span> @enderror
                    <label class="block uppercase tracking-wide text-[#FFC600] text-xs font-bold mb-2" for="answer">
                        Descripcion
                    </label>
                    <input
                        class="appearance-none block w-full bg-[#FFC600] font-bold text-amber-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-black focus:border-gray-500 form-control"
                        type="text" name="answer" wire:model='description' id="answer">
                        @error('description') <span class="error text-red-700">{{ $message }}</span> @enderror
                    <label class="block uppercase tracking-wide text-[#FFC600] text-xs font-bold mb-2" for="answer">
                        Imagen
                    </label>
                    <form wire:submit.prevent="save">
                        @if ($photo)
                            <h1 class="text-white ">Vista Previa:</h1>
                            <img class="w-full h-3/6 bg-cover" src="{{ $photo->temporaryUrl() }}">
                        @endif
                        <input class="my-1 p-1 file:bg-transparent file:text-white file:border-white file:rounded" type="file" wire:model="photo">


                        @error('photo')
                            <span class="error text-red-700">{{ $message }}</span>
                        @enderror
                        <br>

                        <button class="bg-transparent border-[#FFC600] border text-white m-2 hover:bg-[#FFC600] hover:text-black hover:border-black  px-2 py-2 rounded-xl" type="submit">Guardar</button>
                    </form>
                </div>

            </x-slot>


            <x-slot name="footer">
            </x-slot>
        </x-dialog-modal-black>
    @endif
</div>
