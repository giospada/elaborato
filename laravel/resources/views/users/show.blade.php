<x-app-layout>
    <div class="container px-5 pt-24 mx-auto">
        <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">{{$user->name}}</h1>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
            </div>
        </div>
    </div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($games as $game)
                <x-gamecard :game="$game"></x-gamecard>
                @endforeach
            </div>
            <div class=" pt-20">
                {{ $games->links() }}
            </div>
        </div>
    </section>
</x-app-layout>