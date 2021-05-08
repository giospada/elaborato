
<header class="text-gray-600 body-font shadow-md">
    <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
             <a class="mr-5 hover:text-gray-900 {{request()->routeIs("games")?"border-blue-500 border-b-2":""}}" href="{{route('games')}}">Games</a>
            
            <a class="hover:text-gray-900 {{request()->routeIs("users")?"border-blue-500 border-b-2":""}}" href="{{route('users')}}">User</a>

            <!--
                <a class="hover:text-gray-900 {{request()->routeIs("dashboard")?"":"text-red-100"}}" href="{{route('users')}}">User</a>
        -->
        </nav>
        
        <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center " href="/">
            <x-application-logo class="h-28 md:h-14 py-4 md:py-0 " />
        </a>
        @auth
        <div class="lg:w-2/5 inline-flex lg:justify-end md:ml-5 lg:ml-0">
            <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="sublimt" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0" >
                        {{ __('Log out') }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
                    </button>
            </form>    
        </div>
        @endauth

        @guest
        <div class="lg:w-2/5 inline-flex lg:justify-end md:ml-5 lg:ml-0">
            <a href="{{route('login')}}" class="mr-2 inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Log in
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                
            </a>
            
            <a href="{{route('register')}}" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Sing up
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                
            </a>
        </div>
        @endguest
        
    </div>
</header>

