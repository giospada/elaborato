<x-app-layout>
    <x-detail>
        <x-slot name="image">
            <img class="h-64 w-64 object-cover object-center rounded" alt="hero" src="/storage/games/{{$game->logo}}">
        </x-slot>

        <x-slot name="titolo">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$game->titolo}}</h1>
        </x-slot>

        <x-slot name="sottotitolo">
            <h2 class="title-font sm:text-2xl text-1xl mb-4 font-medium text-gray-900">Creato da <a class="text-indigo-500" href="/users/{{$user->id}}">{{$user->name}}</a></h2>
        </x-slot>

        <x-slot name="descrizione">
            <p class="mb-8 leading-relaxed">
                {{$game->descrizione}}
            </p>

            <div class="flex justify-center">
                <x-button type="subilmt">
                    Compra {{$game->prezzo}}€
                </x-button>
                @can('update',$game)
                <a href="/games/{{$game->id}}/edit" class="py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 w-4 h-4 inline " viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                    </svg>
                    Modificami
                </a>
                @endcan

            </div>
        </x-slot>

    </x-detail>

    <div class="container mx-auto items-center flex flex-wrap">
        @foreach($game->gameImage()->get() as $image)

        <div class=" xl:w-1/5 sm:w-1/2 md:w-1/3 lg:w-1/4 m-4 ">
            <img src="/storage/gamesimgs/{{$image->path}}" class="rounded-sm w-full h-full object-cover">
        </div>
        @endforeach
    </div>
</x-app-layout>