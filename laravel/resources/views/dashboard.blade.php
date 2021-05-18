<x-app-layout>
    <x-detail>
        <x-slot name="titolo">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">{{$user->name}}</h1>
        </x-slot>
        <x-slot name="image">
            <img class="h-48 w-48 object-cover object-center rounded" src="/storage/logos/{{$user->logo}}">
        </x-slot>
        <x-slot name="descrizione">

            <a href="/games/create"><x-button class="mt-8" >Nuovo Gioco</x-button></a>
        </x-slot>
    </x-detail>

    <div class="pt-24">
        <x-gameslist :games="$games" :link="'/edit'">
        </x-gameslist>
    </div>
</x-app-layout>