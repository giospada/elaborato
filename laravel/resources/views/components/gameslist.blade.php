<section class="text-gray-600 body-font">
    <div class="container px-5  mx-auto">
        <div class="flex flex-wrap -m-4">
            @foreach($games as $game)
            <x-gamecard :game="$game" :link="$link ?? ''"></x-gamecard>
            @endforeach
        </div>
        <div class=" pt-20">
            {{ $games->links() }}
        </div>
    </div>
</section>