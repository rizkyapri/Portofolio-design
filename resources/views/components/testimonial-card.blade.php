<!-- Testimonials Section -->

{{-- {{ 'https://' . $project->link . '.my.id' }} --}}
<div class="container mx-auto px-4 py-12">
    <div class="grid gap-10 lg:grid-cols-2 xl:grid-cols-3">
        @foreach ($projects as $project)
            <div class="lg:col-span-2 xl:col-auto">
                <div
                    class="flex flex-col justify-between w-full h-full bg-gray-300 px-14 rounded-2xl py-14 dark:bg-trueGray-800 dark:text-white">
                    <a href="{{ route('project.show', ['id' => $project->id]) }}">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image"
                            class="w-full h-48 object-cover rounded-t-2xl mb-4" />
                    </a>                    

                    <a href="{{ route('project.show', ['id' => $project->id]) }}" class="text-2xl leading-normal text-center">
                        <mark
                            class="text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4 dark:ring-indigo-900 dark:bg-indigo-900 dark:text-indigo-200">{{ $project->title }}</mark>
                    </a>

                    <div class="flex items-center mt-8 space-x-3">
                        <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                            <img src="{{ asset('storage/' . $project->logo) }}" width="40" height="40" alt="Avatar"
                                class="object-cover" />
                        </div>
                        <div>
                            <div class="text-lg font-medium dark:text-white">{{ $project->company }}</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ $project->posisi }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
