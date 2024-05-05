<x-app-layout>
    <div class="py-32">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white flex items-center justify-between">
                    <div class="flex items-center">
                        <a href="" class="mr-4">
                            <img src="/image/PFP.png" class="rounded-full h-24 w-24 mb-4" alt="Profielfoto">
                        </a>
                        <div class="flex flex-col">
                            <div class="font-extrabold text-3xl mb-4">Koen Vergeer</div>
                            <div class="flex flex-wrap">
                                <div class="w-full md:w-2/3 pr-4 mb-4 md:mb-0">
                                    I create videos about technology, gadgets, cameras, and much more.
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="https://twitch.tv/poekieplays" class="Btn" target="_blank">
                        <button>Button</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
{{--    <br>--}}
{{--    <br>--}}
{{--    <br>--}}
{{--    <br>--}}
{{--    <br>--}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white flex items-center justify-between">
        <div class="font-extrabold text-3xl">Latest articles</div>
        <a href="#" class="text-white flex items-center">
            Browse articles
            <img src="Image/Arrow92.png" class="h-4 ml-1" alt="Arrow icon">
        </a>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Card1 -->

            <div class="bg-a-card bg-card rounded-3xl shadow-lg relative">
                <div class="h-48 bg-cover bg-center rounded-t-3xl rounded-b-3xl mt-5 mx-5" style="background-image: url('image/Iphone.png');"></div>
                <div class="p-6 text-white font-extrabold text-2xl">
                    Iphone 15 My opinion, Better or Worst then my old phone?
                </div>
                <div class="absolute bottom-0 left-0 left-0 p-6 text-center">
                    <a href="#" class="text-white">Read more...</a>
                </div>
            </div>

        <!-- Card2 -->
        <div class="bg-a-card bg-card rounded-3xl shadow-lg relative">
            <div class="h-48 bg-cover bg-center rounded-t-3xl rounded-b-3xl mt-5 mx-5" style="background-image: url('image/Iphone2.png');"></div>
            <div class="p-6 text-white font-extrabold text-2xl">
                Iphone 14 Pro against the 15 Pro is it worth it?!
            </div>
            <div class="absolute bottom-0 left-0 left-0 p-6 text-center"> <!-- Aanpassing van 'p-3' en 'text-center', en toevoeging van 'absolute bottom-0 left-0 right-0' -->
                <a href="#" class="text-white">Read more...
                </a>
            </div>
            <br>
        </div>

        <!-- Card3 -->
        <div class="bg-a-card bg-card rounded-3xl shadow-lg relative">
            <div class="h-48 bg-cover bg-center rounded-t-3xl rounded-b-3xl mt-5 mx-5" style="background-image: url('image/Airpods.png');"></div>
            <div class="p-6 text-white font-extrabold text-2xl">
                Testing Airpods 2 Pro's Better then galaxy buds
            </div>
                <br>
            <div class="absolute bottom-0 left-0 left-0 p-6 text-center"> <!-- Aanpassing van 'p-3' en 'text-center', en toevoeging van 'absolute bottom-0 left-0 right-0' -->
                <a href="#" class="text-white">Read more...</a>
            </div>
            <br>
        </div>
    </div>
    <hr class="my-4 border-gray-700 w-4/5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">

    <div class="bg-black py-8">

        <div class="bg-black py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 items-center">

                <div class="p-6 text-white font-extrabold text-3xl col-span-1">
                    Lorem ipsum dolor sit amet consectetur adipiscing.
                    <p class="mt-4 text-base text-gray-400">Lorem ipsum dolor sit amet consectetur adipiscing elit massa consectetur in molestie augue sed sed augue nibh et quis nibh faucibus sem non cursus lectus nibh volutpat aliquam sed est nibh adipiscing hendrerit rhoncus, sed dolor tortor pellentesque quis molestie volutpat volutpat euismod sit non sit sed.</p><br>
                    <a href="aboutme" class="Btn1">
                        <button>Button</button>
                    </a>
                </div>

                <div class="p-6 col-span-1 flex justify-end relative"> <!-- Voeg 'relative' toe aan de container om absolute positionering mogelijk te maken -->
                    <div>
                        <img src="image/HomePhoto1.png" class="rounded-t-3xl rounded-b-3xl max-w-lg h-160 relative z-0"> <!-- Voeg 'relative' en 'z-10' toe voor z-index om de stackvolgorde te beheren -->
                    </div>
                    <div class="absolute bottom-0 left-0">
                        <img src="image/HomePhoto2.png" class="rounded-t-3xl rounded-b-3xl max-w-80 h-160 -mb-8 ml-8"> <!-- Voeg negatieve marges toe om de overlap te creëren -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


