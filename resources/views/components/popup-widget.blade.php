<div id="popup-widget" class="fixed z-50 bottom-5 right-5">
    <button id="toggle-btn"
        class="z-50 flex items-center justify-center transition duration-300 bg-indigo-500 rounded-full shadow-lg w-14 h-14 focus:outline-none hover:bg-indigo-600 focus:bg-indigo-600 ease">
        <span class="sr-only">Open Contact form Widget</span>
        <svg id="icon-open" class="w-6 h-6 text-white" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
        <svg id="icon-close" class="w-6 h-6 text-white hidden" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>

    <div id="popup-panel"
        class="fixed z-50 bottom-5 right-5 hidden bg-white border border-gray-300 shadow-2xl rounded-md w-full sm:w-[350px] min-h-[250px] sm:h-[600px] overflow-hidden">
        <div class="flex flex-col items-center justify-center h-32 p-5 bg-indigo-600">
            <h3 class="text-lg text-white">How can we help?</h3>
            <p class="text-white opacity-50">We usually respond in a few hours</p>
        </div>
        <div class="flex-grow h-full p-6 overflow-auto bg-gray-50">
            <form id="contact-form" action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
                <input type="hidden" name="subject" value="Someone sent a message from Nextly">
                <input type="hidden" name="from_name" value="Nextly Template">
                <input type="checkbox" name="botcheck" class="hidden">

                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600">Full Name</label>
                    <input type="text" id="full_name" name="name" placeholder="John Doe"
                        class="w-full px-3 py-2 text-gray-600 placeholder-gray-300 bg-white border border-gray-300 rounded-md">
                    <div id="name-error" class="mt-1 text-sm text-red-400 hidden">Full name is required</div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm text-gray-600">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="you@company.com"
                        class="w-full px-3 py-2 text-gray-600 placeholder-gray-300 bg-white border border-gray-300 rounded-md">
                    <div id="email-error" class="mt-1 text-sm text-red-400 hidden">Enter a valid email</div>
                </div>

                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm text-gray-600">Your Message</label>
                    <textarea rows="4" id="message" name="message" placeholder="Your Message"
                        class="w-full px-3 py-2 text-gray-600 placeholder-gray-300 bg-white border border-gray-300 rounded-md h-28"></textarea>
                    <div id="message-error" class="mt-1 text-sm text-red-400 hidden">Enter your Message</div>
                </div>

                <div class="mb-3">
                    <button type="submit" id="submit-btn"
                        class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Send
                        Message</button>
                </div>
                <p class="text-xs text-center text-gray-400">
                    Powered by <a href="https://Web3Forms.com" class="text-gray-600" target="_blank"
                        rel="noopener noreferrer">Web3Forms</a>
                </p>
            </form>

            <div id="success-message" class="hidden text-center text-white">
                <svg width="60" height="60" class="text-green-300" viewBox="0 0 100 100" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M26.6666 50L46.6666 66.6667L73.3333 33.3333M50 96.6667C43.8716 96.6667 37.8033 95.4596 32.1414 93.1144C26.4796 90.7692 21.3351 87.3317 17.0017 82.9983C12.6683 78.6649 9.23082 73.5204 6.8856 67.8586C4.54038 62.1967 3.33331 56.1283 3.33331 50C3.33331 43.8716 4.54038 37.8033 6.8856 32.1414C9.23082 26.4796 12.6683 21.3351 17.0017 17.0017C21.3351 12.6683 26.4796 9.23084 32.1414 6.88562C37.8033 4.5404 43.8716 3.33333 50 3.33333C62.3767 3.33333 74.2466 8.24998 82.9983 17.0017C91.75 25.7534 96.6666 37.6232 96.6666 50C96.6666 62.3768 91.75 74.2466 82.9983 82.9983C74.2466 91.75 62.3767 96.6667 50 96.6667Z"
                        stroke="currentColor" stroke-width="3"></path>
                </svg>
                <h3 class="py-5 text-xl text-green-500">Message sent successfully</h3>
                <p id="success-text" class="text-gray-700">Your message has been sent successfully.</p>
                <button id="go-back-btn" class="mt-6 text-indigo-600">Go back</button>
            </div>

            <div id="error-message" class="hidden text-center text-white">
                <svg width="60" height="60" viewBox="0 0 97 97" class="text-red-400" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.9995 69C43.6205 53.379 52.3786 44.621 67.9995 29M26.8077 29L67.9995 69M48.2189 95C42.0906 95 36.0222 93.7929 30.3604 91.4477C24.6985 89.1025 19.554 85.6651 15.2206 81.3316C10.8872 76.9982 7.44975 71.8538 5.10454 66.1919C2.75932 60.53 1.55225 54.4617 1.55225 48.3333C1.55225 42.205 2.75932 36.1366 5.10454 30.4748C7.44975 24.8129 10.8872 19.6685 15.2206 15.3351C19.554 11.0017 24.6985 7.56431 30.3604 5.2191C36.0222 2.87389 42.0906 1.66683 48.2189 1.66683C60.5956 1.66683 72.4292 7.76835 81.0991 16.4383C89.769 25.1082 95.8706 36.9307 95.8706 48.3333C95.8706 59.292 89.3404 69.7221 81.0991 77.4402C72.8577 85.1582 60.598 91.6668 48.2189 91.6668Z"
                        stroke="currentColor" stroke-width="3"></path>
                </svg>
                <h3 class="py-5 text-xl text-red-500">Oops! Something went wrong</h3>
                <p id="error-text" class="text-gray-700">There was an error sending your message. Please try again
                    later.</p>
                <button id="retry-btn" class="mt-6 text-indigo-600">Retry</button>
            </div>
        </div>
    </div>
</div>
