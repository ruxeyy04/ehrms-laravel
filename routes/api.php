<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('empverifyaddform', [EmployeeController::class, 'empverifyaddform'])->name('empverifyaddform');

Route::post('checbusinesscode', [EmployeeController::class, 'checkBusinessCode'])->name('checkBusinessCode');


Route::post('showreportingmanager', [EmployeeController::class, 'showReportingManager'])->name('showReportingManager');

Route::post('savemployee', [EmployeeController::class, 'saveEmployee'])->name('saveEmployee');

Route::get('getemployee', [EmployeeController::class, 'getUsers'])->name('getemployee');
Route::get('getspecificuser', [EmployeeController::class, 'getSpecificUser'])->name('getspecificuser');
Route::get('getbusinessunit', [AdminController::class, 'getBusinessUnit'])->name('getBusinessUnit');

// Admin Controller
Route::get('getdepartmentlist', [AdminController::class, 'getDepartmentList'])->name('getDepartmentList');

Route::get('getjobtitle', [AdminController::class, 'getJobTitle'])->name('getJobTitle');
Route::get('getsalary', [AdminController::class, 'getSalary'])->name('getSalary');

Route::post('savebusinessunit', [AdminController::class, 'saveBusinessUnit'])->name('saveBusinessUnit');
Route::post('editbusinessunit', [AdminController::class, 'editBusinessUnit'])->name('editBusinessUnit');
Route::get('fetchbusinessunit', [AdminController::class, 'fetchBusinessUnit'])->name('fetchBusinessUnit');

Route::post('savedepartment', [AdminController::class, 'saveDepartment'])->name('saveDepartment');
Route::delete('deletebusinessunit', [AdminController::class, 'deleteBusinessUnit'])->name('deleteBusinessUnit');
Route::get('fetchdepartment', [AdminController::class, 'fetchDepartment'])->name('fetchDepartment');
Route::post('editdeptdata', [AdminController::class, 'editDepartmentData'])->name('editdeptdata');
Route::delete('deletedepartment', [AdminController::class, 'deleteDepartment'])->name('deletedepartment');

Route::get('fetchjobtitle', [AdminController::class, 'fetchJobTitle'])->name('fetchJobTitle');
Route::post('savejobtitle', [AdminController::class, 'saveJobTitle'])->name('saveJobTitle');
Route::post('editjobtitle', [AdminController::class, 'editJobTitle'])->name('editJobTitle');
Route::delete('deletejobtitle', [AdminController::class, 'deleteJobTitle'])->name('deleteJobTitle');

Route::get('fetchsalary', [AdminController::class, 'fetchSalary'])->name('fetchSalary');
Route::post('savesalary', [AdminController::class, 'saveSalary'])->name('saveSalary');
Route::post('editsalary', [AdminController::class, 'editSalary'])->name('editSalary');
Route::delete('deletesalary', [AdminController::class, 'deleteSalary'])->name('deleteSalary');


// Profile


// PSDS
Route::get('getpsds', [EmployeeController::class, 'getPSDS'])->name('getPSDS');

// School Head
Route::get('getschoolhead', [EmployeeController::class, 'getSchoolHead'])->name('getSchoolhead');
Route::post('showpsds', [EmployeeController::class, 'showPSDS'])->name('showPSDS');

