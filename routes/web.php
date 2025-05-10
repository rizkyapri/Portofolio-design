<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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