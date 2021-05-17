<x-app-layout>


    <!--- Banner-->
    <section class="text-gray-600 body-font relative block  min-h-screen">
        <div class="absolute inset-0 bg-gray-300 ">
            <img class="w-full h-full object-cover " style="transform: scaleX(-1);" src="images/static/programmatore.jpg" />
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-64   relative z-10 shadow-md">
                <h2 class="text-gray-900 text-5xl mb-1 font-medium title-font">Lusus</h2>
                <p class="pt-2">
                    Siamo un'azienda creata da sviluppatori per sviluppatori.
                    Vogliamo dare un posto per gli sviluppatori di giochi dove pubblicare i loro giochi, scambiarsi consigli e offrire opportunità lavorative.
                </p>
            </div>

    </section>

    <!--- Principi-->
   

    <!--- Contatti-->

    <section class="text-gray-600 body-font flex relative bg-white min-h-screen items-center content-center">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap ">
            <div class="lg:w-2/3 sm:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10  flex items-end justify-start relative">
                <img class="object-cover w-full h-full" src="images/static/azienda.jpg" alt="azienda">
            </div>
            <div class="lg:w-1/3 sm:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contattateci</h2>
                <p class="leading-relaxed mb-5 text-gray-600">se siete un azienda interessata ad assumere sviluppatori, o pubblicizzare i propri giochi contattateci nel seguente form</p>
                <form action="/contacts" method="post" >
                    @csrf
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <x-input type="text" id="name" name="name" class="">
                        </x-input> 
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <x-input type="email" id="email" name="email" class="">
                        </x-input> 
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="input w-full h-32  resize-none "></textarea>
                    </div>
                    <x-button type="subilmt" class="">Manda</x-button>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
