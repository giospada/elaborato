<x-app-layout>


<section class="text-gray-600 body-font relative">
    <form action="" method="post">
    @csrf
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Prova upload Imag</h1>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="p-2 w-full">
                <div class="relative">
                <input name="image" type="file"/>
                </div>
            </div>
            <div class="p-2 w-full">
                <button type="subilmt" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
            </div>
        </div>
    </div>
    </form>
</section>

</x-app-layout>
