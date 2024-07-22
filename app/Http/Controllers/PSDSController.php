<?php

namespace App\Http\Controllers;

use App\Models\Prefix;
use App\Models\Suffix;
use App\Models\JobTitle;
use App\Models\RoleInfo;
use App\Models\HrUserinfo;
use App\Models\OfficeInfo;
use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use App\Models\EmpOrgPosInfo;
use App\Models\MonthlySalary;
use App\Models\DepartmentInfo;
use App\Models\EmploymentStatus;
use App\Models\ModeOfEmployement;
use Illuminate\Support\Facades\Auth;
class PSDSController extends Controller
{
    public function dashboard()
    {
        return  view('psds.dashboard');
    }
    public function account()
    {
        return view('profile.account');
    }
    public function settings()
    {
        $prefixes = Prefix::all();
        $suffixes = Suffix::all();
        $offices = OfficeInfo::all();
        $businesses = BusinessUnit::all();
        $jobtitles = JobTitle::all();
        $modeofemps = ModeOfEmployement::all();
        $empstats = EmploymentStatus::all();
        $departments = DepartmentInfo::where('business_code', '=',Auth::user()->org_pos->business_code)->get();
        return view('profile.settings', compact('prefixes', 'suffixes', 'offices',  'businesses', 'jobtitles', 'modeofemps', 'empstats','departments'));
    }
    public function fco()
    {
        return view('psds.fco');
    }
    public function planningLesson()
    {
        return view('psds.planningLesson');
    }
    public function presentingLesson()
    {
        return view('psds.presentingLesson');
    }
    public function classroomManagement()
    {
        return view('psds.classroomManagement');
    }
    public function assessmentLearning()
    {
        return view('psds.assessmentLearning');
    }
    public function overallAssessment()
    {
        return view('psds.overallAssessment');
    }
    public function fileManager() {
        $hruserinfo = HrUserinfo::all();
        return view('profile.filemanager', compact('hruserinfo'));
    }
}
