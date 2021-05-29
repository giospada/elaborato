<x-app-layout>
    <form action="/games/" method="post" enctype="multipart/form-data">
        @csrf
        <x-detail>
            <x-slot name="image">
                <div class="w-64 h-64 bg-gray-300 flex items-center justify-center rounded-md">
                    <input class="m-5" name="logo" type="file">
                </div>
            </x-slot>

            <x-slot name="titolo">
                <x-auth-validation-errors class="mb-5" :errors="$errors" />
                <label class="text-gray-500">Titolo:</label>
                <x-input name="titolo"></x-input>
            </x-slot>


            <x-slot name="sottotitolo">
                <label class="mt-4 text-gray-500">Descrizione:</label>
                <textarea name="descrizione" class="input w-full h-32  resize-none "></textarea>
                <label class="mt-4 text-gray-500">Prezzo:</label>
                <x-input name="prezzo" step="0.01" type="number"></x-input>
                
                <div class="mt-8 flex gap-3 items-center">
                    <a href="{{route('dashboard')}}" class="text-gray-500">Back</a>
                    <x-button>
                        SAVE
                    </x-button>
                </div>
            </x-slot>

            <x-slot name="descrizione">
            </x-slot>
        </x-detail>
        <div x-data="{images:new Set(),i:0,refresh:0}" class="container mx-auto items-center justify-center flex  flex-wrap">
            <template x-for="img in images">
                <div class="relative h-60 w-full xl:w-1/5 sm:w-1/2 md:w-1/3 lg:w-1/4 m-4  bg-gray-300 flex items-center justify-center rounded-md" :for="img">
                    <button type="button" @click="refresh=1-refresh;images.delete(img);" class="absolute top-2 right-2 inline-flex rounded-full h-6 w-6 bg-red-500 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-50 w-4 h-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="4" y1="7" x2="20" y2="7"></line>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                        </svg>

                    </button>
                    <input class="m-10" type="file" name="img[]">
                </div>
            </template>
            <div class=" h-60 xl:w-1/5 sm:w-1/2 md:w-1/3 lg:w-1/4 m-4 bg-gray-300">
                <x-button class="w-full h-full  justify-center" type="button" @click="images.add(i++);">Agguingi immagine</x-button>
            </div>

        </div>

    </form>

</x-app-layout>