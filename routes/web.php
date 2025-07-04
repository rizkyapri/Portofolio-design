<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranscriptionController;
use App\Models\Transcription;

// Route::get('/', function () {
//     return view('landing');
// })->name('landing');

Route::get('/certificate', function () {
    return view('certificate');
})->name('certificate');


Route::get('/', [HeroController::class, 'index'])->name('landing');

Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/project/show/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate');
Route::get('/certificate/show/{id}', [CertificateController::class, 'show'])->name('certificate.show');

//speech using web speech API
Route::get('/speech', function () {
    return view('speech.speech');
})->name('speech');

// speech to text using  https://github.com/syl22-00/pocketsphinx.js/tree/master/doc/AudioRecorder
Route::get('/transcriptions', [TranscriptionController::class, 'index'])->name('voice');
Route::post('/transcriptions', [TranscriptionController::class, 'store'])->name('transcriptions.store');
Route::get('/api/transcriptions', function () {
    return Transcription::latest()->get();
});