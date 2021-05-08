<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($games as $game)
                    <x-gamecard :game="$game"></x-gamecard>
                    @if($loop->index%3==2)
                        <div class="flex flex-wrap -m-4">
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
</x-app-layout>