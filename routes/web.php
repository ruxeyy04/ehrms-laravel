<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRController;
use App\Http\Controllers\PSDSController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LearnDevController;
use App\Http\Controllers\PrincipalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    
})->middleware(['auth', 'roleredirect'])->name('home');

Route::middleware(['auth', 'systemadmin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('filemanager', [AdminController::class, 'fileManager'])->name('admin.filemanager');
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('account', [ProfileController::class, 'account'])->name('admin.account');
        Route::get('settings', [ProfileController::class, 'settings'])->name('admin.settings');
        Route::get('business', [AdminController::class, 'business_dept'])->name('admin.business_dept');
        Route::get('job_salary', [AdminController::class, 'job_salary'])->name('admin.job_salary');
        Route::get('schoolhead', [AdminController::class, 'schoolhead'])->name('admin.schoolhead');
        Route::match(['get', 'post'], 'employee', [AdminController::class, 'employee'])->name('admin.employee');
        Route::get('users', [AdminController::class, 'user'])->name('admin.user');
        Route::get('activity-log', [AdminController::class, 'act_log'])->name('admin.activity_log');
        Route::get('notes-todo', [AdminController::class, 'notes_todo'])->name('admin.notes_todo');
        Route::get('demographicsummary', [AdminController::class, 'demographicsummary'])->name('admin.demographicsummary');
        Route::get('cbc', [AdminController::class, 'cbc'])->name('admin.cbc');
        Route::get('satt', [AdminController::class, 'satt'])->name('admin.satt');
        Route::get('satmt', [AdminController::class, 'satmt'])->name('admin.satmt');
        Route::get('atotal', [AdminController::class, 'atotal'])->name('admin.atotal');
        Route::get('quarterly', [AdminController::class, 'quarterly'])->name('admin.quarterly');
        Route::get('grade', [AdminController::class, 'grade'])->name('admin.grade');
        Route::get('subjectarea', [AdminController::class, 'subjectarea'])->name('admin.subjectarea');
        Route::get('skillsbyteacher', [AdminController::class, 'skillsbyteacher'])->name('admin.skillsbyteacher');
        Route::get('skillsbymasterteacher', [AdminController::class, 'skillsbymasterteacher'])->name('admin.skillsbymasterteacher');
        Route::get('links', [AdminController::class, 'links'])->name('admin.links');
        Route::get('fco', [AdminController::class, 'fco'])->name('admin.fco');
        Route::get('psds', [AdminController::class, 'psds'])->name('admin.psds');
        Route::get('planningLesson', [AdminController::class, 'planningLesson'])->name('admin.planningLesson');
        Route::get('presentingLesson', [AdminController::class, 'presentingLesson'])->name('admin.presentingLesson');
        Route::get('classroomManagement', [AdminController::class, 'classroomManagement'])->name('admin.classroomManagement');
        Route::get('assessmentLearning', [AdminController::class, 'assessmentLearning'])->name('admin.assessmentLearning');
        Route::get('overallAssessment', [AdminController::class, 'overallAssessment'])->name('admin.overallAssessment');
        Route::get('cot', [AdminController::class, 'cot'])->name('admin.cot');
        Route::get('cotplanningLesson', [AdminController::class, 'cotplanningLesson'])->name('admin.cotplanningLesson');
        Route::get('cotpresentingLesson', [AdminController::class, 'cotpresentingLesson'])->name('admin.cotpresentingLesson');
        Route::get('cotclassroomManagement', [AdminController::class, 'cotclassroomManagement'])->name('admin.cotclassroomManagement');
        Route::get('cotassessmentLearning', [AdminController::class, 'cotassessmentLearning'])->name('admin.cotassessmentLearning');
        Route::get('cotoverallAssessment', [AdminController::class, 'cotoverallAssessment'])->name('admin.cotoverallAssessment');

    })->name('adminlinks');
});

Route::middleware(['auth', 'employee'])->group(function () {
    Route::prefix('employee')->group(function () {
        Route::get('/', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
        Route::get('filemanager', [EmployeeController::class, 'fileManager'])->name('employee.filemanager');
        Route::get('account', [ProfileController::class, 'account'])->name('employee.account');
        Route::get('settings', [ProfileController::class, 'settings'])->name('employee.settings');
    })->name('employeelinks');
});

Route::middleware(['auth', 'hrmanager'])->group(function () {
    Route::prefix('hr')->group(function () {
        Route::get('/', [HRController::class, 'dashboard'])->name('hr.dashboard');
    })->name('hrlinks');
});
Route::middleware(['auth', 'rm'])->group(function () {
    Route::prefix('rm')->group(function () {
        // Route::get('/', [RMController::class, 'dashboard'])->name('rm.dashboard');
    })->name('rmlinks');
});

Route::middleware(['auth', 'psds'])->group(function () {
    Route::prefix('psds')->group(function () {
        Route::get('account', [ProfileController::class, 'account'])->name('psds.account');
        Route::get('settings', [ProfileController::class, 'settings'])->name('psds.settings');
        Route::get('/', [PSDSController::class, 'dashboard'])->name('psds.dashboard');
        Route::get('fco', [PSDSController::class, 'fco'])->name('psds.fco');
        Route::get('planningLesson', [PSDSController::class, 'planningLesson'])->name('psds.planningLesson');
        Route::get('presentingLesson', [PSDSController::class, 'presentingLesson'])->name('psds.presentingLesson');
        Route::get('classroomManagement', [PSDSController::class, 'classroomManagement'])->name('psds.classroomManagement');
        Route::get('assessmentLearning', [PSDSController::class, 'assessmentLearning'])->name('psds.assessmentLearning');
        Route::get('overallAssessment', [PSDSController::class, 'overallAssessment'])->name('psds.overallAssessment');
    })->name('psdslinks');
});


// Learning and Development
Route::get('learndev', function () {
    return view('learndev/dashboard');
});

Route::prefix('learndev')->group(function () {
    Route::get('/', [LearnDevController::class, 'dashboard'])->name('learndev.dashboard'); // dashboard
    Route::get('profile', [LearnDevController::class, 'profile'])->name('learndev.profile'); // dashboard

});


// Route::get('events', function () {
//     return view('admin.events');
// })->name('admin.events');

Route::get('/viewsession', function () {
    $cookies = request()->session()->all();
    $authUser = Auth::user();
    return response()->json(["hrid" => Auth::id() ,'session' => $cookies, 'authUser' => $authUser, 'rolename' => Auth::user()->role->role_name ?? null,  Auth::user()->salary ?? null, Auth::user()->org_pos->businessUnit]);
});

//RM
Route::get('principal', function () {
    return view('principal/dashboard');
});

Route::prefix('principal')->group(function () {
    Route::get('/', [PrincipalController::class, 'dashboard'])->name('principal.dashboard');
    Route::get('cot', [PrincipalController::class, 'cot'])->name('principal.cot');
    Route::get('cotassessmentLearning', [PrincipalController::class, 'cotassessmentLearning'])->name('principal.cotassessmentLearning');
    Route::get('cotclassroomManagement', [PrincipalController::class, 'cotclassroomManagement'])->name('principal.cotclassroomManagement');
    Route::get('cotoverallAssessment', [PrincipalController::class, 'cotoverallAssessment'])->name('principal.cotoverallAssessment');
    Route::get('cotplanningLesson', [PrincipalController::class, 'cotplanningLesson'])->name('principal.cotplanningLesson');
    Route::get('cotpresentingLesson', [PrincipalController::class, 'cotpresentingLesson'])->name('principal.cotpresentingLesson');
    Route::get('opcrf', [PrincipalController::class, 'opcrf'])->name('principal.opcrf');
    Route::get('kra1', [PrincipalController::class, 'kra1'])->name('principal.kra1');
    Route::get('kra2', [PrincipalController::class, 'kra2'])->name('principal.kra2');
    Route::get('kra3', [PrincipalController::class, 'kra3'])->name('principal.kra3');
    Route::get('kra4', [PrincipalController::class, 'kra4'])->name('principal.kra4');
    Route::get('kra5', [PrincipalController::class, 'kra5'])->name('principal.kra5');
    Route::get('proficient', [PrincipalController::class, 'proficient'])->name('principal.proficient');
    Route::get('higlyProficient', [PrincipalController::class, 'highlyProficient'])->name('principal.highlyProficient');
    Route::get('total', [PrincipalController::class, 'total'])->name('principal.total');
    Route::get('quarterly', [PrincipalController::class, 'quarterly'])->name('principal.quarterly');
    Route::get('grade', [PrincipalController::class, 'grade'])->name('principal.grade');
    Route::get('subjectarea', [PrincipalController::class, 'subjectarea'])->name('principal.subjectarea');
    Route::get('skillsbyteacher', [PrincipalController::class, 'skillsbyteacher'])->name('principal.skillsbyteacher');
    Route::get('skillsbymasterteacher', [PrincipalController::class, 'skillsbymasterteacher'])->name('principal.skillsbymasterteacher');
    Route::get('profile', [PrincipalController::class, 'profile'])->name('principal.profile');
});

Route::post('/update-profile-img', [ProfileController::class, 'updateProfileImg'])->name('updateProfileImg');

require __DIR__ . '/auth.php';
require __DIR__ . '/filemanager.php';
