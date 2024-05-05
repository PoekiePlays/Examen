<x-app-layout>
    <div class="py-32">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8">
                <!-- Tekst links -->
                <div class="mt-20"> <!-- Voeg een margin-top toe -->
                    <h2 class="text-5xl font-bold mb-4 text-white">Get in touch</h2>
                    <p class="text-m mb-8 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum viverra donec viverra at mauris arcu pulvinar tellus quam enim nulla risus in convallis feugiat diam duis tristi.</p>
                    <!-- Box voor Email -->
                    <div class="bg-input py-2 px-3 rounded-large mb-4 max-w-xs flex items-center">
                        <img src="image/email.png" class="h-16 w-16 mr-2" alt="Email Icon">
                        <p class="text-xl font-bold text-white">contact@example.com</p>
                    </div>

                    <!-- Box voor Phone Number -->
                    <div class="bg-input py-2 px-3 rounded-large mb-4 max-w-xs flex items-center">
                        <img src="image/phone.png" class="h-16 w-16 mr-2" alt="Email Icon">
                        <p class="text-lg font-bold text-white">06-81627241</p>
                    </div>

                </div>
                <!-- Formulier rechts -->
                <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="{{ route('submit') }}" method="POST" class="p-6 text-white flex items-center justify-between">
                        @csrf
                        <div class="bg-card p-12 rounded-xl w-full">
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <input type="text" name="fullname" id="fullname" autocomplete="name" class="mt-1 block w-full shadow-sm text-lg border-card rounded-large bg-input" placeholder="Full Name" required>
                                </div>
                                <div>
                                    <input type="email" name="email" id="email" autocomplete="email" class="mt-1 block w-full shadow-sm text-lg border-card rounded-large bg-input" placeholder="Email Address" required>
                                </div>
                                <div class="col-span-1">
                                    <input type="tel" name="phonenumber" id="phonenumber" autocomplete="tel" class="mt-1 block w-full shadow-sm text-lg border-card rounded-large bg-input" placeholder="Phone Number" required>
                                </div>
                                <div class="col-span-1">
                                    <input type="text" name="subject" id="subject" autocomplete="subject" class="mt-1 block w-full shadow-sm text-lg border-card rounded-large bg-input" placeholder="Subject" required>
                                </div>
                                <div class="col-span-2">
                                    <textarea id="description" name="description" rows="5" class="mt-1 block w-full shadow-sm text-lg border-card rounded-large bg-input" placeholder="Please enter your message..." required></textarea>
                                </div>
                            </div>
                            <div class="flex mt-6">
                                <button type="store" class="Btn3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
