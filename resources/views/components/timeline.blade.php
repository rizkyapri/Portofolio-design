<div class="container mx-auto p-10">
    <h3 data-aos="flip-up"
        class="text-center mt-1 text-3xl font-bold leading-snug tracking-tight text-gray-800 lg:leading-tight lg:text-4xl dark:text-white">
        Competency Certificate
    </h3>
    <ol class="relative border-s border-gray-200 dark:border-gray-700">
        @foreach ($sertif as $certificate)
            <li class="mb-10 ms-4">
                <div data-aos="fade-up"
                    class="absolute w-3 h-3 bg-indigo-500 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                </div>
                <time data-aos="fade-left" data-aos-delay="400"
                    class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ \Carbon\Carbon::parse($certificate->start_date)->format('F Y') }}
                    -
                    {{ \Carbon\Carbon::parse($certificate->end_date)->format('F Y') }}
                </time>
                <h3 data-aos="fade-left" data-aos-delay="500" class="text-lg font-semibold text-gray-900 dark:text-white">{{ $certificate->title }}</h3>
                <p data-aos="fade-left" data-aos-delay="600" class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                    {{ $certificate->description }} {{-- Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages. --}}
                </p>
                <a data-aos="fade-left" data-aos-delay="600" href="{{ route('certificate.show', ['id' => $certificate->id]) }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-indigo-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                    more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg></a>
            </li>
        @endforeach
        {{-- <li class="mb-10 ms-4">
            <div
                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first
                designed in Figma and we keep a parity between the two versions even as we update the project.</p>
        </li>
        <li class="ms-4">
            <div
                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components
                and
                interactive elements built on top of Tailwind CSS.</p>
        </li> --}}
    </ol>
</div>
