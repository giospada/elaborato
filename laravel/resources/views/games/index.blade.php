<x-app-layout>
    <ul>
    @foreach($games as $game)
       <li>
            {{$game->titolo}} - {{$game->descrizione}}- 
            
       </li>
    @endforeach
    </ul>
</x-app-layout>