<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
    <a href="/users/{{$user->id}}">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">{{$user->name}}</h2>
                <p class="text-gray-500">{{$user->email}}</p>
            </div>
        </div>
    </a>
</div>