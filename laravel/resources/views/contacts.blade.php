<x-app-layout>

    <div class="flex flex-col text-center object-center h-48 w-screen">

        <h1 class="py-10 text-3xl">
            Richiesta Mandata
            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </h1>
        <p class="pb-10 text-gray-500">
            ti risponderemo al più presto
        </p>
        <div class="flex justify-center w-screen">
            <a href="{{route('welcome')}}" class="btn w-40 justify-center">torna alla home</a>
        </div>

    </div>

</x-app-layout>