<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::middleware('guest')->group(function () {
  Route::get('signin', [AuthController::class, 'login'])->name('auth.login');
  Route::post('login', [AuthController::class, 'store'])->name('loginform');
});
Route::middleware('auth')->group(function () {
  Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
});

Route::put('changepass', [ProfileController::class, 'updatePassword'])->name('password.update');
Route::put('updateuserprofile', [ProfileController::class, 'updateUserProfile'])->name('updateUserProfile');
Route::post('profchecbusinesscode', [ProfileController::class, 'checkBusinessCode'])->name('ProfCheckBusinessCode');
// Settings
Route::post('updatesetting', [ProfileController::class, 'updateToolSettings'])->name('updatesettings');
Route::put('updatepersonalinfo', [ProfileController::class, 'updatePersonalInfo'])->name('updatePersonalInfo');
Route::put('updatecontactinfo', [ProfileController::class, 'updateContactInfo'])->name('updateContactInfo');

// Profile
Route::get('getfamily', [ProfileController::class, 'getFamily'])->name('getfamily');
Route::post('addfamily', [ProfileController::class, 'addFamily'])->name('addFamily');

