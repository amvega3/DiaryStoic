<div class="flex justify-center items-center h-screen"wire:init='cargadoListo'>

    @if (!$readyToLoad)
        <button type="button" class="bg-transparent mx-auto" disabled>
            <svg class="animate-spin text-yellow-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4335 4335" width="200" height="200">
                <path fill="#008DD2"
                    d="M3346 1077c41,0 75,34 75,75 0,41 -34,75 -75,75 -41,0 -75,-34 -75,-75 0,-41 34,-75 75,-75zm-1198 -824c193,0 349,156 349,349 0,193 -156,349 -349,349 -193,0 -349,-156 -349,-349 0,-193 156,-349 349,-349zm-1116 546c151,0 274,123 274,274 0,151 -123,274 -274,274 -151,0 -274,-123 -274,-274 0,-151 123,-274 274,-274zm-500 1189c134,0 243,109 243,243 0,134 -109,243 -243,243 -134,0 -243,-109 -243,-243 0,-134 109,-243 243,-243zm500 1223c121,0 218,98 218,218 0,121 -98,218 -218,218 -121,0 -218,-98 -218,-218 0,-121 98,-218 218,-218zm1116 434c110,0 200,89 200,200 0,110 -89,200 -200,200 -110,0 -200,-89 -200,-200 0,-110 89,-200 200,-200zm1145 -434c81,0 147,66 147,147 0,81 -66,147 -147,147 -81,0 -147,-66 -147,-147 0,-81 66,-147 147,-147zm459 -1098c65,0 119,53 119,119 0,65 -53,119 -119,119 -65,0 -119,-53 -119,-119 0,-65 53,-119 119,-119z" />
            </svg>
            <br> <span class="font-semibold mx-auto uppercase text-4xl text-green-50"> {{ $sms }} </span>
        </button>
    @else
    <div>
        <button class="bg-green-900 px-2 py-2 mx-auto border border-black rounded-xl " wire:click="$set('active',true)">Ver</button>
    </div>
    <div>
        <x-jet-dialog-modal wire:model="active">
            <x-slot name="title">
                {{ __('Delete Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}


                </div>
            </x-slot>

            <x-slot name="footer">
               hey

            </x-slot>
        </x-jet-dialog-modal>
    <span></span>
    </div>

    @endif


</div>

