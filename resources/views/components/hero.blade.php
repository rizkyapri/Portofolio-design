<div class="container flex flex-wrap p-8 mx-auto xl:px-0">
    <div class="flex items-center w-full lg:w-1/2">
        <div class="max-w-2xl mb-8 ml-10">
            <p class="text-3xl font-bold leading-snug tracking-tight text-gray-800 lg:text-4xl lg:leading-tight xl:text-6xl xl:leading-tight dark:text-white">
                {{ optional($hero)->title ?? 'Hi, Everyone 👋' }}
            </p>
        
            <!-- Rotating Text with Tailwind animations and responsive adjustments -->
            <div class="py-5 text-xl leading-normal text-gray-500 lg:text-xl xl:text-4xl dark:text-gray-300">
                <span id="rotating-text" class="block h-10 text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-indigo-400 to-indigo-600 font-bold sm:text-2xl md:text-4xl lg:text-4xl glow-effect dark:glow-effect-dark"></span>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center w-full lg:w-1/2">
        <div
            class="relative overflow-hidden w-80 h-80 bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-full shadow-lg transform hover:scale-105 transition-transform duration-300">
            <img src="{{ optional($hero)->image ? asset('storage/' . $hero->image) : 'images/herora.png' }}"
                alt="Hero Illustration" class="w-full h-full object-cover rounded-full filter brightness-25">
        </div>
    </div>
</div>

<script>
    const descriptionString = "{{ $hero['description'] ?? 'Laravel Developer,Open Source Enthusiast,Web Artisan' }}";
    const textArray = descriptionString.split(',').map(item => item.trim());
    let currentIndex = 0;

    function rotateText() {
        const rotatingText = document.getElementById("rotating-text");

        // Add fade-out animation
        rotatingText.classList.remove('animate-fade-in-up');
        rotatingText.classList.add('animate-fade-out-down');

        // Wait until fade-out finishes (0.6s) before changing the text
        setTimeout(() => {
            rotatingText.textContent = textArray[currentIndex];
            currentIndex = (currentIndex + 1) % textArray.length;

            // Remove fade-out and add fade-in animation
            rotatingText.classList.remove('animate-fade-out-down');
            rotatingText.classList.add('animate-fade-in-up');
        }, 600); // This timeout matches the duration of fade-out animation (0.6s)
    }

    // Change text every 3 seconds
    setInterval(rotateText, 4000);
    rotateText(); // Initial call to display the first text
</script>
