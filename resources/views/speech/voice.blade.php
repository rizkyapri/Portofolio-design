<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Voice Transcription</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN (optional) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen py-10 px-4">

    <div class="flex flex-col items-center space-y-10">

        <!-- Voice to Text Box -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">🎤 Voice to Text</h1>

            <button id="startStop" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
                Start Talking
            </button>

            <p class="mt-4 text-gray-600"><strong>Result:</strong></p>
            <div id="result" class="mt-2 p-3 border border-gray-300 rounded bg-gray-50 text-gray-800 min-h-[50px]">
            </div>
        </div>

        <!-- Table Box -->
        <div class="w-full max-w-4xl bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">📜 Daftar Transkripsi</h1>

            <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Transkripsi</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Waktu</th>
                    </tr>
                </thead>
                <tbody id="transcription-body">
                    {{-- @forelse ($transcriptions as $transcription)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $transcription->text }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                {{ $transcription->created_at->format('d M Y H:i') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center px-4 py-4 text-gray-500">Belum ada transkripsi</td>
                        </tr>
                    @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const startStopBtn = document.getElementById('startStop');
        const resultEl = document.getElementById('result');

        let recognition;
        let isListening = false;

        if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
            recognition = new(window.SpeechRecognition || window.webkitSpeechRecognition)();
            recognition.lang = 'id-ID';
            recognition.interimResults = false;
            recognition.continuous = true; // <-- agar tetap aktif meski diam sebentar
            recognition.maxAlternatives = 1;

            recognition.onresult = function(event) {
                const lastResultIndex = event.results.length - 1;
                const transcript = event.results[lastResultIndex][0].transcript.trim();
                resultEl.textContent = transcript;

                // Kirim ke Laravel
                fetch('/transcriptions', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: JSON.stringify({
                            text: transcript
                        }),
                    })
                    .then(response => response.json())
                    .then(data => console.log('Saved:', data))
                    .catch(error => console.error('Error:', error));
            };

            recognition.onerror = function(event) {
                console.error('Speech recognition error:', event.error);
            };
        } else {
            alert('Browser Anda tidak mendukung Speech Recognition.');
        }

        startStopBtn.addEventListener('click', () => {
            if (!isListening) {
                recognition.start();
                startStopBtn.textContent = 'Stop Listening';
                startStopBtn.classList.remove('bg-green-500');
                startStopBtn.classList.add('bg-red-500', 'hover:bg-red-600');
                isListening = true;
            } else {
                recognition.stop();
                startStopBtn.textContent = 'Start Talking';
                startStopBtn.classList.remove('bg-red-500', 'hover:bg-red-600');
                startStopBtn.classList.add('bg-green-500');
                isListening = false;
            }
        });
    </script>
    {{-- FETCH DATA --}}
    <script>
        function loadTranscriptions() {
            fetch('/api/transcriptions')
                .then(res => res.json())
                .then(data => {
                    const tbody = document.getElementById('transcription-body');
                    tbody.innerHTML = ''; // kosongkan dulu
                    if (data.length === 0) {
                        tbody.innerHTML =
                            `<tr><td colspan="3" class="text-center px-4 py-4 text-gray-500">Belum ada transkripsi</td></tr>`;
                    } else {
                        data.forEach((item, index) => {
                            const createdAt = new Date(item.created_at);
                            const formattedDate = createdAt.toLocaleString('id-ID', {
                                day: '2-digit',
                                month: 'short',
                                year: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit'
                            });

                            tbody.innerHTML += `
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">${index + 1}</td>
                                <td class="border border-gray-300 px-4 py-2">${item.text}</td>
                                <td class="border border-gray-300 px-4 py-2">${formattedDate}</td>
                            </tr>
                        `;
                        });
                    }
                });
        }

        // Panggil langsung saat halaman dimuat
        loadTranscriptions();

        // Set interval untuk update realtime (misal tiap 3 detik)
        setInterval(loadTranscriptions, 3000);
    </script>

</body>

</html>
