<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagerController;



Route::get('/calculate-used-space', [FileManagerController::class, 'calculateUsedSpace'])->name('filestorage-info');
Route::match(['get', 'post'], '/file-storage', [FileManagerController::class, 'fileManager'])->name('fileManager');
