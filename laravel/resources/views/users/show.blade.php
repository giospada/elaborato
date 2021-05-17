<x-app-layout>
    <x-detail>
        <x-slot name="titolo">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">{{$user->name}}</h1>
        </x-slot>
    </x-detail>

    <div class="container px-5  mx-auto">
        <div class="text-center mb-20">
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
            </div>
        </div>
    </div>
    <x-gameslist :games="$games">
    </x-gameslist>
</x-app-layout>