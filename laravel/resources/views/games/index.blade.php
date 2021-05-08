<x-app-layout>
    
    
    <ul>
    @foreach($games as $game)
       <li>
            {{$game->titolo}} - {{$game->descrizione}}- 
            {{ $game->user()->getResults()->name }}
            
       </li>
    @endforeach
    </ul>
</x-app-layout>