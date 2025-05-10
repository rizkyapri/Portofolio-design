<div class="relative">
    <div class="container mx-auto px-4">
        <div
            class="grid max-w-screen-xl grid-cols-1 gap-10 pt-10 mx-auto mt-5 border-t border-gray-100 dark:border-trueGray-700 lg:grid-cols-5">
            <div class="lg:col-span-2">
                <div>
                    <a href="/"
                        class="flex items-center space-x-2 text-2xl font-medium text-indigo-500 dark:text-gray-100">
                        <img src="{{ asset('images/Logo R.svg') }}" alt="N" width="32" height="32"
                            class="w-8">
                        <span>Raps</span>
                    </a>
                </div>

                <div class="max-w-md mt-4 text-gray-500 dark:text-gray-400">
                    This portfolio highlights my experience and skills as an Information Systems graduate. I’m open to collaboration and new opportunities in technology and design.
                </div>
            </div>

            <div>
                <div class="flex flex-wrap w-full -mt-2 -ml-3 lg:ml-0">
                    <a href="{{ route('certificate') }}"
                        class="w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-trueGray-700">Certification</a>
                    <a href="{{ route('project') }}"
                        class="w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-trueGray-700">Project</a>
                    <a href="/blogs"
                        class="w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-trueGray-700">Blog</a>
                </div>
            </div>

            {{-- <div>
                <div class="flex flex-wrap w-full -mt-2 -ml-3 lg:ml-0">
                    <a href="/"
                        class="w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-trueGray-700">Terms</a>
                    <a href="/"
                        class="w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-trueGray-700">Privacy</a>
                    <a href="/"
                        class="w-full px-4 py-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:focus:bg-trueGray-700">Legal</a>
                </div>
            </div> --}}

            <div>
                <div class="text-sm font-medium text-gray-900 dark:text-gray-300">Follow us</div>
                <div class="flex mt-5 space-x-5 text-gray-400 dark:text-gray-500">
                    <a href="https://www.linkedin.com/in/aprizky" target="_blank" rel="noopener">
                        <span class="sr-only">LinkedIn</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 20h-3v-10h3v10zm-1.5-11.33c-.97 0-1.75-.8-1.75-1.75s.78-1.75 1.75-1.75 1.75.8 1.75 1.75-.78 1.75-1.75 1.75zm13.5 11.33h-3v-5.5c0-1.33-.02-3.05-1.86-3.05-1.86 0-2.14 1.45-2.14 2.95v5.6h-3v-10h2.88v1.36h.04c.4-.75 1.39-1.53 2.87-1.53 3.07 0 3.64 2.02 3.64 4.65v5.52z" />
                        </svg>
                    </a>

                    <a href="https://instagram.com/Lost_Skyyy" target="_blank" rel="noopener">
                        <span class="sr-only">Instagram</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M16.98 0a6.9 6.9 0 0 1 5.08 1.98A6.94 6.94 0 0 1 24 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0 1 16.94 24H7.06a7.06 7.06 0 0 1-5.03-1.89A6.96 6.96 0 0 1 0 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 0 0-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 0 0 3.53 1.25h9.88a5 5 0 0 0 3.53-1.25 4.73 4.73 0 0 0 1.4-3.54V7.02a5 5 0 0 0-1.3-3.49 4.82 4.82 0 0 0-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 0 1-12.4 0 6.2 6.2 0 0 1 6.2-6.2zm0 2.22a3.99 3.99 0 0 0-3.97 3.97A3.99 3.99 0 0 0 12 15.92a3.99 3.99 0 0 0 3.97-3.97A4.07 4.07 0 0 0 12 7.98zm6.4-.9c0 .76-.62 1.38-1.4 1.38a1.41 1.41 0 0 1 0-2.8c.78 0 1.4.62 1.4 1.4z" />
                        </svg>
                    </a>

                    <a href="https://github.com/rizkyapri" target="_blank" rel="noopener">
                        <span class="sr-only">GitHub</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.38.6.11.82-.26.82-.58v-2.24c-3.34.73-4.04-1.41-4.04-1.41-.55-1.4-1.34-1.77-1.34-1.77-1.09-.75.09-.73.09-.73 1.2.08 1.83 1.24 1.83 1.24 1.07 1.83 2.81 1.3 3.5.99.11-.77.42-1.3.76-1.6-2.67-.3-5.47-1.34-5.47-5.97 0-1.32.47-2.4 1.24-3.25-.12-.31-.54-1.54.12-3.22 0 0 1.01-.32 3.3 1.23.95-.26 1.98-.4 3-.4 1.02 0 2.05.14 3 .4 2.3-1.55 3.3-1.23 3.3-1.23.66 1.68.24 2.91.12 3.22.77.85 1.24 1.93 1.24 3.25 0 4.64-2.81 5.66-5.48 5.96.43.37.81 1.11.81 2.25v3.33c0 .32.21.69.83.57C20.56 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>

        <div class="mt-10 mb-8 text-sm text-center text-gray-600 dark:text-gray-400">
            Copyright © <span id="year"></span>. Made by
            <a href="https://web3templates.com/" target="_blank" rel="noopener">Rizky Apriansyah.</a>
        </div>
    </div>
</div>
