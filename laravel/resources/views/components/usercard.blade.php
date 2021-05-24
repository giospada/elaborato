<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
    <a href="/users/{{$user->id}}">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="/storage/logos/{{$user->logo}}">
            <div class="flex-grow overflow-hidden">
                <h2 class="text-gray-900 title-font font-medium">{{$user->name}}</h2>
                <p class="text-gray-500">{{$user->email}}</p>
            </div>
        </div>
    </a>
</div>
