<div  {{ $attributes->merge([ 'class' => 'p-4']) }}>
    <a href="/games/{{$game->id}}{{$link}}">
        <div class="h-full  flex md:flex-row flex-col items-center md:justify-start justify-center text-center md:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center md:mb-0 mb-4" src="{{'/storage/games/'.$game->logo}}">
            <div class="flex-grow md:pl-8 ">
                <h2 class="title-font font-medium text-lg text-gray-900">{{$game->titolo}}</h2>
                <p class="mb-4 max-h-36 overflow-hidden">{{$game->descrizione}}</p>
                <span class="inline-flex">
                    {{$game->prezzo}}€
                </span>
            </div>
        </div>
    </a>
</div>
