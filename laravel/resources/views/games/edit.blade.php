<x-app-layout>

    <form action="/games" method="post">
        
        <input type="hidden" name="id" value="">
        <x-game-detail>

            <x-slot name="titolo">
                <x-input>Input</x-input>
            </x-slot>
            <x-slot name="image">

            </x-slot>

            <x-slot name="username">
            <x-input>Input</x-input>

            </x-slot>

            <x-slot name="descrizione">
                <textarea class="input"></textarea>
            </x-slot>

        </x-game-detail>
    </form>

</x-app-layout>