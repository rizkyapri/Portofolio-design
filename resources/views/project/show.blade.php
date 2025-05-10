<!-- Product section-->
<h2 class="font-bold text-center mt-7 text-xl md:text-2xl">
    <span class="text-black dark:text-white capitalize font-extrabold ">{{ $project->title }}</span>
</h2>
<div class="container mx-auto px-4">
<div class="grid max-w-screen-xl grid-cols-1 gap-10 pt-10 mx-auto mt-5 border-t border-gray-100 dark:border-trueGray-700 lg:grid-cols-5"></div>
</div>
{{-- <hr class="my-3"> --}}

<section id="isirumah">
    <div class="container mx-auto px-4  mt-2">
        <div class="flex flex-wrap py-5">
            <!-- Slide Atas -->
            <div class="w-full md:w-1/2 mt-3">
                <div class="slide-atas grid grid-cols-1 gap-2">
                    <div class="rumah">
                        <img src="{{ Storage::url($project->image1) }}" class="w-full h-auto object-contain max-h-80" alt="">
                    </div>
                    <div class="rumah">
                        <img src="{{ Storage::url($project->image2) }}" class="w-full h-auto object-contain max-h-80" alt="">
                    </div>
                    <div class="rumah">
                        <img src="{{ Storage::url($project->image3) }}" class="w-full h-auto object-contain max-h-80" alt="">
                    </div>
                    <div class="rumah">
                        <img src="{{ Storage::url($project->image4) }}" class="w-full h-auto object-contain max-h-80" alt="">
                    </div>
                    <div class="rumah">
                        <img src="{{ Storage::url($project->image5) }}" class="w-full h-auto object-contain max-h-80" alt="">
                    </div>
                    <div class="rumah">
                        <img src="{{ Storage::url($project->image6) }}" class="w-full h-auto object-contain max-h-80" alt="">
                    </div>
                    <div class="rumah">
                        <img src="{{ Storage::url($project->image7) }}" class="w-full h-auto object-contain max-h-80" alt="">
                    </div>
                </div>
                <!-- Slide Bawah -->
                <div class="slide-bawah mt-4 flex justify-center space-x-2">
                    <div class="rumah1">
                        <img src="{{ Storage::url($project->image1) }}" class="w-20 h-20 md:w-28 md:h-28 object-cover" alt="">
                    </div>
                    <div class="rumah1">
                        <img src="{{ Storage::url($project->image2) }}" class="w-20 h-20 md:w-28 md:h-28 object-cover" alt="">
                    </div>
                    <div class="rumah1">
                        <img src="{{ Storage::url($project->image3) }}" class="w-20 h-20 md:w-28 md:h-28 object-cover" alt="">
                    </div>
                    <div class="rumah1">
                        <img src="{{ Storage::url($project->image4) }}" class="w-20 h-20 md:w-28 md:h-28 object-cover" alt="">
                    </div>
                    <div class="rumah1">
                        <img src="{{ Storage::url($project->image5) }}" class="w-20 h-20 md:w-28 md:h-28 object-cover" alt="">
                    </div>
                    <div class="rumah1">
                        <img src="{{ Storage::url($project->image6) }}" class="w-20 h-20 md:w-28 md:h-28 object-cover" alt="">
                    </div>
                    <div class="rumah1">
                        <img src="{{ Storage::url($project->image7) }}" class="w-20 h-20 md:w-28 md:h-28 object-cover" alt="">
                    </div>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="w-full md:w-1/2">
                <div class="isiketerangan">
                    <div class="flex items-center  space-x-3">
                        <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                            <img src="{{ asset('storage/' . $project->logo) }}" width="40" height="40" alt="Avatar"
                                class="object-cover" />
                        </div>
                        <div>
                            <div class="text-lg text-black font-medium dark:text-white">{{ $project->company }}</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ $project->posisi }}</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ \Carbon\Carbon::parse($project->start_date)->format('F Y') }}
                                -
                                {{ \Carbon\Carbon::parse($project->end_date)->format('F Y') }}</div>
                            <a href="{{ 'https://'. $project->link. '.my.id'}}" target="_blank" class="text-gray-600 dark:text-gray-400">{{ 'https://'. $project->link. '.my.id'}}</a>
                        </div>
                    </div>
                    {{-- <h1 class="pt-2 font-bold leading-none capitalize text-xl md:text-2xl text-black dark:text-white">{{ $project->title }}</h1> --}}
                    <hr class="grid max-w-screen-xl grid-cols-1mx-auto py-2 border-t border-gray-100 dark:border-trueGray-700 lg:grid-cols-5">
                    <p class="text-left text-sm text-black dark:text-white">{{ $project->description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- isirumah -->

{{-- <div class="w-full max-w-5xl mx-auto mt-24 overflow-hidden">
    <ul class="flex h-80 md:h-96">
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 w-full text-white p-4">
                <a href="#">KungFu Panda</a>
            </div>
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image) }}"
                    alt="KungFu Panda" />
            </a>
        </li>
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 w-full text-white p-4">
                <a href="#">Toy Story 2</a>
            </div>
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image1 ) }}"
                    alt="Toy Story 2" />
            </a>
        </li>
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image2 ) }}"
                    alt="Car" />
            </a>
        </li>
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image3 ) }}" alt="Image 4" />
            </a>
        </li>
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image4 ) }}"
                    alt="Call of Duty" />
            </a>
        </li>
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image5 ) }}"
                    alt="Call of Duty" />
            </a>
        </li>
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image6 ) }}"
                    alt="Call of Duty" />
            </a>
        </li>
        <li class="relative flex-1 transition-all duration-500 ease-in-out hover:flex-[10] flex-[2] overflow-hidden">
            <a href="#">
                <img class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $project->image7 ) }}"
                    alt="Call of Duty" />
            </a>
        </li>
    </ul>
</div> --}}
