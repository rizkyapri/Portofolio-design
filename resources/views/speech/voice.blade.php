<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Voice Transcription</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Tailwind CDN (optional) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen py-10 px-4">
    <div class="absolute top-4 left-4">
        <a href="{{ route('home') }}"
            class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
            Home
        </a>
    </div>
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
                        <th class="border border-gray-300 px-4 py-2 text-left">Text 1 (Sebelum "dan")</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Text 2 (Setelah "dan")</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Waktu</th>
                    </tr>
                </thead>
                <tbody id="transcription-body">
                    <!-- Data akan di-load via JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const startStopBtn = document.getElementById('startStop');
        const resultEl = document.getElementById('result');

        let recognition;
        let isListening = false;
        let currentTranscript = '';

        if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
            recognition = new(window.SpeechRecognition || window.webkitSpeechRecognition)();
            recognition.lang = 'id-ID';
            recognition.interimResults = false;
            recognition.continuous = true;
            recognition.maxAlternatives = 1;

            recognition.onresult = function(event) {
                const lastResultIndex = event.results.length - 1;
                const transcript = event.results[lastResultIndex][0].transcript.trim();

                // Tambahkan hasil ke currentTranscript
                currentTranscript += (currentTranscript ? ' ' : '') + transcript;
                resultEl.textContent = currentTranscript;

                // Cek apakah ada kata "batal" dulu (prioritas clear)
                if (/batal\b/i.test(currentTranscript)) {
                    currentTranscript = '';
                    resultEl.textContent = '';
                    console.log('Transkripsi dibatalkan dan di-clear.');
                    return;
                }

                // Cek apakah ada kata "simpan"
                if (/simpan\b/i.test(currentTranscript)) {
                    let text1 = '';
                    let text2 = '';

                    if (/ dan /i.test(currentTranscript)) {
                        const parts = currentTranscript.split(/ dan /i);
                        // Hapus kata "simpan" dari kedua bagian
                        text1 = parts[0].replace(/simpan\b/i, '').trim();
                        text2 = parts.slice(1).join(' dan ').replace(/simpan\b/i, '').trim();
                    } else {
                        text1 = currentTranscript.replace(/simpan\b/i, '').trim();
                        text2 = '';
                    }

                    // Kirim ke backend
                    fetch('/transcriptions', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            },
                            body: JSON.stringify({
                                text1: text1,
                                text2: text2
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Saved:', data);
                            currentTranscript = '';
                            resultEl.textContent = '';
                            loadTranscriptions();
                        })
                        .catch(error => console.error('Error:', error));
                }
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

        // Fungsi untuk load transcriptions dari API
        function loadTranscriptions() {
            fetch('/api/transcriptions')
                .then(res => res.json())
                .then(data => {
                    const tbody = document.getElementById('transcription-body');
                    tbody.innerHTML = ''; // kosongkan dulu
                    if (data.length === 0) {
                        tbody.innerHTML =
                            `<tr><td colspan="4" class="text-center px-4 py-4 text-gray-500">Belum ada transkripsi</td></tr>`;
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
                                <td class="border border-gray-300 px-4 py-2">${item.text1}</td>
                                <td class="border border-gray-300 px-4 py-2">${item.text2}</td>
                                <td class="border border-gray-300 px-4 py-2">${formattedDate}</td>
                            </tr>
                            `;
                        });
                    }
                })
                .catch(error => {
                    console.error('Error loading transcriptions:', error);
                });
        }

        // Load transcriptions saat halaman dimuat
        loadTranscriptions();

        // Update daftar setiap 3 detik agar realtime
        setInterval(loadTranscriptions, 3000);
    </script>
</body>

</html>
