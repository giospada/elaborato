<div class="p-4 lg:w-1/2">
    <a href="/games/{{$game->id}}">
        <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="{{'/storage/games/'.$game->logo_path}}">
            <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">{{$game->titolo}}</h2>
                <p class="mb-4">{{$game->descrizione}}</p>
                <span class="inline-flex">
                    {{$game->prezzo}}€
                </span>
            </div>
        </div>
    </a>
</div>