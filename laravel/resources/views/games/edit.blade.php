<x-app-layout>
    <x-detail>
        <x-slot name="image">
            <img class="object-cover object-center rounded" alt="hero" src="/storage/games/{{$game->logo}}">
        </x-slot>

        <x-slot name="titolo">
            <x-input></x-input>
        </x-slot>

        <x-slot name="sottotitolo">
        </x-slot>

        <x-slot name="descrizione">
            <p class="mb-8 leading-relaxed">
                {{$game->descrizione}}
            </p>
            <div class="flex justify-center">
                <x-input></x-input>
            </div>
        </x-slot>

        </x-game-detail>

</x-app-layout>