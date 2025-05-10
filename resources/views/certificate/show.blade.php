<div class="container mx-auto px-4">
    <div class="flex justify-center items-center gap-4 mt-8 justify-center items-center">
        <div
            class="flex flex-col items-center bg-white justify-center border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full">
            <div class="flip-card-3D-wrapper max-w-full sm:max-w-xs md:max-w-xl w-full">
                <div id="flip-card">
                    <div class="flip-card-front relative">
                        <img src="{{ asset('storage/' . $certificate->image) }}"
                            class="object-cover h-full w-full cursor-pointer"
                            onclick="openModal('{{ asset('storage/' . $certificate->image) }}')">
                        <button id="flip-card-btn-turn-to-back"
                            class="absolute bottom-2 right-2 bg-gray-200 px-2 py-1 rounded-md text-sm">flip</button>
                    </div>
                    <div class="flip-card-back relative">
                        <img src="{{ asset('storage/' . $certificate->image1) }}"
                            class="object-cover h-full w-full cursor-pointer"
                            onclick="openModal('{{ asset('storage/' . $certificate->image1) }}')">
                        <button id="flip-card-btn-turn-to-front"
                            class="absolute bottom-2 right-2 bg-gray-200 px-2 py-1 rounded-md text-sm">flip</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between p-4 leading-normal w-full md:w-auto">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white md:text-center">
                    {{ $certificate->title }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                    {{ $certificate->description }}</p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 hidden bg-black bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl w-full max-h-screen relative">
            <!-- Close Button -->
            <button onclick="closeModal()"
                class="absolute top-2 right-2 bg-indigo-500 text-white px-4 py-2 rounded-lg z-50">X</button>
            <!-- Image Container -->
            <div class="p-4 overflow-auto max-h-[80vh]">
                <img id="modal-image" src="" class="object-contain w-full max-h-[75vh]">
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('modal');
        const modalImage = document.getElementById('modal-image');
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.add('hidden');
    }
</script>
