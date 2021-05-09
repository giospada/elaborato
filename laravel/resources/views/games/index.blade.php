<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-24 mx-auto">
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