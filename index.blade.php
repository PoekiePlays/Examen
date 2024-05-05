<x-app-layout>
    <div class="py-52">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-white text-5xl font-bold mb-4">Posts & Resources</h1>
                    <p class="text-gray-300 text-base">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                </div>
                <div class="flex items-center">
{{--                    <input type="text" name="searchbar" id="searchbar" autocomplete="search" class="mt-1 block w-full shadow-sm text-lg border-card rounded-large bg-input h-14" placeholder="Search post" required>--}}
                </div>
            </div>
            <div class="grid grid-cols-2 gap-0 mt-12"> <!-- Adjust gap and mt values as needed -->
                <!-- Card 1 -->
                <div class="rounded-3xl shadow-lg relative max-w-md overflow-hidden hover:overflow-visible"> <!-- Adjust max-w value as needed -->
                    <div class="h-72 bg-cover bg-center rounded-t-3xl rounded-b-3xl transition-transform duration-300 transform hover:scale-105" style="background-image: url('/storage/{{ $latestPost->image }}');"></div>
                    <div class="p-4 text-white font-extrabold text-3xl">
                        {{ $latestPost->name }}
                    </div>
                    <div class="p-4 text-white font-extrabold text-base mt-auto">
                        <a href="#" class="text-white">Read more...</a>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4">

                    <div class="flex items-center rounded-3xl shadow-lg relative overflow-hidden max-w-md">
                        <div class="h-32 w-60 bg-cover bg-center rounded-3xl" style="background-image: url('/storage/{{ $posts[1]->image }}');"></div>
                        <div class="flex flex-col justify-center ml-4">
                            <div class="p-1 text-white font-extrabold text-2xl">
                                {{ $posts[1]->name }}
                            </div>
                            <div class="p-1 text-white font-extrabold text-sm mt-auto">
                                <a href="#" class="text-white">Read more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center rounded-3xl shadow-lg relative overflow-hidden max-w-md">
                        <div class="h-32 w-60 bg-cover bg-center rounded-3xl" style="background-image: url('/storage/{{ $posts[2]->image }}');"></div>
                        <div class="flex flex-col justify-center ml-4">
                            <div class="p-1 text-white font-extrabold text-2xl">
                                {{ $posts[2]->name }}
                            </div>
                            <div class="p-1 text-white font-extrabold text-sm mt-auto">
                                <a href="#" class="text-white">Read more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center rounded-3xl shadow-lg relative overflow-hidden max-w-md">
                        <div class="h-32 w-60 bg-cover bg-center rounded-3xl" style="background-image: url('/storage/{{ $posts[3]->image }}');"></div>
                        <div class="flex flex-col justify-center ml-4">
                            <div class="p-1 text-white font-extrabold text-2xl">
                                {{ $posts[3]->name }}
                            </div>
                            <div class="p-1 text-white font-extrabold text-sm mt-auto">
                                <a href="#" class="text-white">Read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
