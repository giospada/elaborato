<x-app-layout>
    <section class="text-gray-600 body-font">
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 flex justify-center">
                    <img class="object-cover object-center rounded" alt="hero" src="/images/games/{{$game->logo_path}}">
                </div>
                <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$game->titolo}}</h1>

                    <h2 class="title-font sm:text-2xl text-1xl mb-4 font-medium text-gray-900">Creato da <a class="text-indigo-500" href="/users/{{$user->id}}">{{$user->name}}</a></h2>
                    <p class="mb-8 leading-relaxed">
                        {{$game->descrizione}}
                    <div class="flex justify-center">

                        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Compra {{$game->prezzo}}€</button>
                    </div>
                </div>
            
            </div>
        </section>
</x-app-layout>