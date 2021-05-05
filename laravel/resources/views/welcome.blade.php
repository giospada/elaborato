@extends('template.first')

@section('content')
<!-- make this a component with  and change it dinamically with auth user-->
<header class="text-gray-600 body-font shadow-md">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-900">Best Dev</a>
            <a class="mr-5 hover:text-gray-900">Games</a>
            <a class="hover:text-gray-900">User</a>
        </nav>
        <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <img class="h-28 md:h-14 py-4 md:py-0 " src="images/icon.svg">
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log in
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</header>


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



@endsection