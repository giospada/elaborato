<x-app-layout>
    <x-game-detail>
        <x-slot name="image">
            <img class="object-cover object-center rounded" alt="hero" src="/storage/games/{{$game->logo_path}}">
        </x-slot>

        <x-slot name="titolo">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$game->titolo}}</h1>
        </x-slot>

        <x-slot name="username">
            <h2 class="title-font sm:text-2xl text-1xl mb-4 font-medium text-gray-900">Creato da <a class="text-indigo-500" href="/users/{{$user->id}}">{{$user->name}}</a></h2>
        </x-slot>

        <x-slot name="descrizione">
            <p class="mb-8 leading-relaxed">
                {{$game->descrizione}}
            </p>
            <div class="flex justify-center">
                <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Compra {{$game->prezzo}}€</button>
            </div>
        </x-slot>

        <x-slot name="images">

        <div class="container mx-auto items-center flex flex-wrap">
            @foreach($game->gameImage()->get() as $image)

                <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                    <img src="/storage/gamesimgs/{{$image->path}}" class="rounded-sm w-full h-full object-cover">
                </div>
            @endforeach
            <div>
        </x-slot>
    </x-game-detail>
</x-app-layout>