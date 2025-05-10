<div class="flex w-full flex-col mt-4 p-8 items-center justify-center text-center">
    <div class="text-sm font-bold tracking-wider text-indigo-600 uppercase" data-aos="flip-up" data-aos-delay="200">
        Prolog
    </div>

    <h2 data-aos="zoom-in-up" data-aos-delay="400"
        class="max-w-2xl mt-3 text-3xl font-bold leading-snug tracking-tight text-gray-800 lg:leading-tight lg:text-4xl dark:text-white">
        {{-- Who's Rizky Apriansyah? --}} {{ optional($prolog)->title ?? "null" }}
    </h2>

    <p data-aos="fade-right" data-aos-delay="500" class="max-w-2xl py-4 text-lg leading-normal text-gray-500 lg:text-xl xl:text-xl dark:text-gray-300">
        {{-- Information Systems Student from Gunadarma University, has sufficient administrative skills and is proficient in
        using Microsoft Office and is familiar with various web developer applications such as Adobe Dreamweaver, VSCode
        or Xampp, Laragon, DBeaver. --}}
        {{ optional($prolog)->description ?? "null" }}

    </p>
</div>
