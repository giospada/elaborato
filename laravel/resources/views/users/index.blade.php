<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-2">
                @foreach($users as $user)
                    <x-usercard :user=$user ></x-usercard>
                @endforeach
            </div>
            <div class=" pt-20">
                {{ $users->links() }}
            </div>
        </div>
    </section>
</x-app-layout>