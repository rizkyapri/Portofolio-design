<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">
        @foreach ($certificates as $sertif)
            <div class="card bg-gray-300 dark:bg-gray-800 dark:border-gray-700 max-w-sm w-full mx-auto shadow-xl flex flex-col justify-between h-full border border-gray-200">
                <figure class="h-48 w-full overflow-hidden">
                    <img class="object-cover h-full w-full" src="{{ asset('storage/' . $sertif->image) }}" alt="{{ $sertif->title }}" />
                </figure>
                <div class="card-body flex-grow">
                    <h2 class="card-title text-gray-900 dark:text-gray-100">{{ $sertif->title }}</h2>
                </div>
                <div class="card-actions justify-end mt-auto p-4">
                    <a href="{{ route('certificate.show', ['id' => $sertif->id]) }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
