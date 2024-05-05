<x-app-layout>
    <!-- Background 404 -->
    <div class="flex items-center justify-center h-screen bg-opacity-50 relative">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <!-- Text 404 -->
        <div class="text-11xl font-extrabold text-opacity-10 text-white z-10">404</div>

        <!-- Standaard 404-gegevens -->
        <div class="absolute z-20 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center">
            <!-- Voeg hier je standaard 404-gegevens toe -->
            <h1 class="text-5xl font-extrabold mb-4">Page not found</h1>
            <p>The page you want to reach is not available.</p>
            <!-- Voeg meer informatie toe indien nodig -->

            <div class="flex justify-center py-4">
                <a href="/" class="Btn2">
                    <button>Button</button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
