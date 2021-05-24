<x-app-layout>
    <form action="/games/{{$game->id}}" method="post">
        @method('PATCH')
        @csrf
        <x-detail>
            <x-slot name="image">
                <img class="h-64 w-64 object-cover object-center rounded" alt="hero" src="/storage/games/{{$game->logo}}">
            </x-slot>
            <x-slot name="titolo">
                <x-auth-validation-errors class="mb-5" :errors="$errors" />
                <label class="text-gray-500">Titolo:</label>
                <x-input name="titolo">{{$game->titolo}}</x-input>
            </x-slot>


            <x-slot name="sottotitolo">
                <label class="mt-4 text-gray-500">Descrizione:</label>
                <textarea name="descrizione" class="input w-full h-32  resize-none ">{{$game->descrizione}}</textarea>
                <label class="mt-4 text-gray-500">Prezzo:</label>
                <x-input name="prezzo" step="0.01" type="number">{{$game->prezzo}}</x-input>
            </x-slot>

            <x-slot name="descrizione">

                <div class="mt-6 flex justify-center items-center gap-4">
                    <a href="{{route('dashboard')}}" class="text-gray-500">Back</a>
                    <x-button type="subilmt">
                        Salva
                    </x-button>


                </div>
            </x-slot>

        </x-detail>
    </form>
    <div class="mt-6 flex justify-center items-center gap-4">
        <form action="/games/{{$game->id}}" method="post">
            @method('DELETE')
            @csrf
            <x-button type="subilmt" class="bg-red-500 hover:bg-red-600 border-red-600 focus:border-red-700 ring-red-300">
                Rimuovi
            </x-button>
        </form>
    </div>
    <div class="container mx-auto items-center xl:grid-cols-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 grid ">
        @foreach($game->gameImage()->get() as $image)

        <div x-data="{full:false}" class="  m-4 ">
            <div :class="(full ?'p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75':'')" @click="full=!full;">
                <img src="/storage/gamesimgs/{{$image->path}}" :class="'rounded-sm  object-cover '+(full?'max-h-screen max-w-screen':'w-full h-full')">
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>