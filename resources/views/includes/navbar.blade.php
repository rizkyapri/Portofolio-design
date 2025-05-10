<div class="w-full">
    <nav class="container relative flex flex-wrap items-center justify-between p-8 mx-auto lg:justify-between xl:px-14">
        <!-- Logo -->
        <div class="flex flex-wrap items-center justify-between w-full lg:w-auto">
            <a href="/">
                <span class="flex items-center space-x-2 text-2xl font-medium text-indigo-500 dark:text-gray-100">
                    <span>
                        <img src="{{ asset('images/Logo R.svg') }}" alt="N" width="32" height="32"
                            class="w-8" />
                    </span>
                    <span>RA</span>
                </span>
            </a>

            <!-- Dark Mode Switch & Hamburger Menu for Mobile -->
            <div class="flex items-center space-x-3 lg:hidden">
                <!-- Dark Mode Switch -->
                <button id="theme-toggle" class="text-gray-300 rounded-full outline-none focus:outline-none"
                    onclick="toggleTheme()">
                    <span class="sr-only">Light Mode</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                    </svg>
                </button>
                <button id="theme-toggle-dark" class="hidden text-gray-500 rounded-full outline-none focus:outline-none"
                    onclick="toggleTheme()">
                    <span class="sr-only">Dark Mode</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5" />
                        <path
                            d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                    </svg>
                </button>

                <!-- Hamburger Menu -->
                <button aria-label="Toggle Menu" id="hamburger"
                    class="px-2 py-1 text-gray-500 rounded-md lg:hidden hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:text-gray-300 dark:focus:bg-trueGray-700">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4 5h16v2H4V5zm0 6h16v2H4v-2zm0 6h16v2H4v-2z" />
                    </svg>
                </button>
            </div>

            <div id="mobileMenu" class="hidden flex flex-wrap w-full my-5 lg:hidden">
                <a href="{{ route('landing') }}"
                    class="inline-block w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 dark:focus:bg-gray-800 focus:outline-none">
                    Home
                </a>
                <a href="{{ route('certificate') }}"
                    class="inline-block w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 dark:focus:bg-gray-800 focus:outline-none">
                    Certification
                </a>
                <a href="{{ route('project') }}"
                    class="inline-block w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 dark:focus:bg-gray-800 focus:outline-none">
                    Project
                </a>
                <a href="/blogs"
                    class="inline-block w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 dark:focus:bg-gray-800 focus:outline-none">
                    Blog
                </a>
                <a href="/admin/login"
                    class="inline-block w-full px-6 py-2 mt-3 text-center text-white bg-indigo-600 rounded-md lg:ml-5">Login</a>

            </div>
        </div>

        <!-- Menu -->
        <div class="hidden text-center lg:flex lg:items-center">
            <ul class="items-center justify-end flex-1 pt-6 list-none lg:pt-0 lg:flex">
                <li class="mr-3 nav__item">
                    <a href="{{ route('landing') }}"
                        class="inline-block px-4 py-2 text-lg font-normal no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-gray-800 
          {{ request()->is('/') ? 'border-b-2 border-indigo-500 text-indigo-500' : 'text-gray-800' }}">
                        Home
                    </a>
                </li>
                <li class="mr-3 nav__item">
                    <a href="{{ route('certificate') }}"
                        class="inline-block px-4 py-2 text-lg font-normal no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-gray-800 
          {{ request()->is('certificate') ? 'border-b-2 border-indigo-500 text-indigo-500' : 'text-gray-800' }}">
                        Certification
                    </a>
                </li>
                <li class="mr-3 nav__item">
                    <a href="{{ route('project') }}"
                        class="inline-block px-4 py-2 text-lg font-normal no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-gray-800 
          {{ request()->is('project') ? 'border-b-2 border-indigo-500 text-indigo-500' : 'text-gray-800' }}">
                        Project
                    </a>
                </li>
                <li class="mr-3 nav__item">
                    <a href="/blogs"
                        class="inline-block px-4 py-2 text-lg font-normal no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-gray-800 
          {{ request()->is('blogs') ? 'border-b-2 border-indigo-500 text-indigo-500' : 'text-gray-800' }}">
                        Blog
                    </a>
                </li>
            </ul>
        </div>


        <!-- Get Started & Dark Mode -->
        <div class="flex items-center space-x-4 hidden lg:inline-block">
            <a href="/admin/login"
                class="hidden px-6 py-2 text-center text-white bg-indigo-600 rounded-md lg:inline-block">Login</a>
            <button id="theme-toggle-desk" class="text-gray-300 rounded-full outline-none focus:outline-none"
                onclick="toggleThemeDesk()">
                <span class="sr-only">Light Mode</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            </button>
            <button id="theme-toggle-dark-desk"
                class="hidden text-gray-500 rounded-full outline-none focus:outline-none" onclick="toggleThemeDesk()">
                <span class="sr-only">Dark Mode</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" />
                    <path
                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                </svg>
            </button>
        </div>

        <script>
            const hamburger = document.getElementById('hamburger');
            const mobileMenu = document.getElementById('mobileMenu');
            const themeToggle = document.getElementById('theme-toggle');
            const themeToggleDark = document.getElementById('theme-toggle-dark');
            const themeToggleDesk = document.getElementById('theme-toggle-desk');
            const themeToggleDarkDesk = document.getElementById('theme-toggle-dark-desk');

            // Toggle mobile menu
            hamburger.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Function to toggle the theme
            const toggleTheme = () => {
                const currentTheme = document.documentElement.classList.toggle('dark');
                if (currentTheme) {
                    themeToggle.classList.add('hidden');
                    themeToggleDark.classList.remove('hidden');
                    localStorage.setItem('theme', 'dark'); // Save the theme preference
                } else {
                    themeToggle.classList.remove('hidden');
                    themeToggleDark.classList.add('hidden');
                    localStorage.setItem('theme', 'light'); // Save the theme preference
                }
            };

            // Function to toggle theme on desktop
            const toggleThemeDesk = () => {
                const currentTheme = document.documentElement.classList.toggle('dark');
                if (currentTheme) {
                    themeToggleDesk.classList.add('hidden');
                    themeToggleDarkDesk.classList.remove('hidden');
                    localStorage.setItem('theme', 'dark'); // Save the theme preference
                } else {
                    themeToggleDesk.classList.remove('hidden');
                    themeToggleDarkDesk.classList.add('hidden');
                    localStorage.setItem('theme', 'light'); // Save the theme preference
                }
            };

            // Set initial theme based on user's preference in localStorage
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
                themeToggle.classList.add('hidden');
                themeToggleDark.classList.remove('hidden');
                themeToggleDesk.classList.add('hidden');
                themeToggleDarkDesk.classList.remove('hidden');
            } else {
                document.documentElement.classList.remove('dark');
                themeToggle.classList.remove('hidden');
                themeToggleDark.classList.add('hidden');
                themeToggleDesk.classList.remove('hidden');
                themeToggleDarkDesk.classList.add('hidden');
            }
        </script>

    </nav>
</div>
