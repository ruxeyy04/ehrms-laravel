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

class AdminController extends Controller
{
    // Admin View
    public function fileManager() {
        $hruserinfos = HrUserinfo::all();
        return view('profile.filemanager', compact('hruserinfos'));
    }
    public function dashboard()
    {
        return  view('admin.dashboard');
    }
    public function business_dept()
    {
        $businessunits = BusinessUnit::all();
        return view('admin.business-dept', compact('businessunits'));
    }
    public function act_log()
    {
        return view('admin.act-log');
    }
    public function employee(Request $request)
    {
        $prefixes = Prefix::all();
        $suffixes = Suffix::all();
        $offices = OfficeInfo::all();
        $businesses = BusinessUnit::all();
        $roles = RoleInfo::where('role_name', '!=', 'Reporting Manager')->get();
        $jobtitles = JobTitle::all();
        $modeofemps = ModeOfEmployement::all();
        $empstats = EmploymentStatus::all();
        $hruserinfo = HrUserinfo::all();

        $hruserinfoQuery = HrUserinfo::with(['role', 'org_pos.jobTitle']);


        // if ($request->has('search')) {
        //     $searchTerm = $request->input('search');
        //     $hruserinfoQuery->where('first_name', 'like', "%$searchTerm%")
        //                     ->orWhere('last_name', 'like', "%$searchTerm%")
        //                     ->orWhere('deped_email', 'like', "%$searchTerm%")
        //                     ->orWhere('employee_no', 'like', "%$searchTerm%");
        // }

        // $hruserinfo = $hruserinfoQuery->paginate($request->input('limit', 5));


        return view('admin.employee', compact('prefixes', 'suffixes', 'offices', 'roles', 'businesses', 'jobtitles', 'modeofemps', 'empstats', 'hruserinfo'));
    }

    public function job_salary()
    {
        return view('admin.job-salary');
    }
    public function schoolhead()
    {
        $prefixes = Prefix::all();
        $suffixes = Suffix::all();
        $offices = OfficeInfo::where('office_name', 'like', '%Ozamiz City%')->get();
        $businesses = BusinessUnit::where('business_name', 'like', '%District%')->get();
        $roles = RoleInfo::where('role_name', '=', 'School Head')->get();
        
        $jobtitles = JobTitle::where('job_title', 'like', '%Head Teacher%')
        ->orWhere('job_title', 'like', '%School Principal%')
        ->get();

        $modeofemps = ModeOfEmployement::all();
        $empstats = EmploymentStatus::all();
        $hruserinfo = HrUserinfo::all();

        $hruserinfoQuery = HrUserinfo::with(['role', 'org_pos.jobTitle']);


        return view('admin.schoolhead', compact('prefixes', 'suffixes', 'offices', 'roles', 'businesses', 'jobtitles', 'modeofemps', 'empstats', 'hruserinfo'));
    }
    public function user()
    {
        return view('admin.user');
    }
    public function notes_todo()
    {
        return view('admin.notes-todo');
    }
    public function demographicsummary()
    {
        return view('admin.demographicsummary');
    }
    public function cbc()
    {
        return view('admin.cbc');
    }
    public function satt()
    {
        return view('admin.satt');
    }
    public function satmt()
    {
        return view('admin.satmt');
    }
    public function rpms()
    {
        return view('admin.rpms');
    }
    public function atotal()
    {
        return view('admin.atotal');
    }
    public function quarterly()
    {
        return view('admin.quarterly');
    }
    public function grade()
    {
        return view('admin.grade');
    }
    public function subjectarea()
    {
        return view('admin.subjectarea');
    }
    public function skillsbyteacher()
    {
        return view('admin.skillsbyteacher');
    }
    public function skillsbymasterteacher()
    {
        return view('admin.skillsbymasterteacher');
    }
    public function links()
    {

        return view('admin.links');
    }

    public function fco()
    {
        return view('admin.fco');
    }
    public function planningLesson()
    {
        return view('admin.planningLesson');
    }
    public function presentingLesson()
    {
        return view('admin.presentingLesson');
    }
    public function classroomManagement()
    {
        return view('admin.classroomManagement');
    }
    public function assessmentLearning()
    {
        return view('admin.assessmentLearning');
    }
    public function overallAssessment()
    {
        return view('admin.overallAssessment');
    }
    public function cot()
    {
        return view('admin.cot');
    }
    public function psds()
    {
        $prefixes = Prefix::all();
        $suffixes = Suffix::all();
        $offices = OfficeInfo::all();
        $businesses = BusinessUnit::all();
        $roles = RoleInfo::where('role_name', '!=', 'Reporting Manager')->get();
        $jobtitles = JobTitle::all();
        $modeofemps = ModeOfEmployement::all();
        $empstats = EmploymentStatus::all();
        $hruserinfo = HrUserinfo::all();

        $hruserinfoQuery = HrUserinfo::with(['role', 'org_pos.jobTitle']);


        return view('admin.psds', compact('prefixes', 'suffixes', 'offices', 'roles', 'businesses', 'jobtitles', 'modeofemps', 'empstats', 'hruserinfo'));
    }
    public function cotplanningLesson()
    {
        return view('admin.cotplanningLesson');
    }
    public function cotpresentingLesson()
    {
        return view('admin.cotpresentingLesson');
    }
    public function cotclassroomManagement()
    {
        return view('admin.cotclassroomManagment');
    }
    public function cotassessmentLearning()
    {
        return view('admin.cotassessmentLearning');
    }
    public function cotoverallAssessment()
    {
        return view('admin.cotoverallAssessment');
    }
// ============= Business Unit CRUD =============
    public function saveBusinessUnit(Request $request)
    {
        $validatedData = $request->validate([
            'business_code' => 'required|integer|unique:business_units',
            'business_name' => 'required|string|max:255|unique:business_units',
        ]);

        try {
            $businessUnit = new BusinessUnit();
            $businessUnit->fill($request->only([
                'business_code',
                'business_name'
            ]));
            $businessUnit->save();

            return response()->json(['status' => 'success', 'message' => 'Business Unit saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to save Business Unit'], 422);
        }
    }
    public function editBusinessUnit(Request $request)
    {
        $bu = BusinessUnit::find($request->id);
        if ($bu->business_code != $request->business_code) {
            $validatedData = $request->validate([
                'business_code' => 'required|integer|unique:business_units'
            ]);
        } else if ($bu->business_name != $request->business_name) {
            $validatedData = $request->validate([
                'business_name' => 'required|string|max:255|unique:business_units',
            ]);
        }

        try {


            $businessUnit = BusinessUnit::find($request->id);
            if (
                $businessUnit->business_code != $request->business_code &&
                $businessUnit->business_name != $request->business_name
            ) {

            }
            if (
                $businessUnit->business_code == $request->business_code &&
                $businessUnit->business_name == $request->business_name
            ) {
                return response()->json(['status' => 'nochanges', 'message' => 'No changes were made'], 200);
            }

            $validatedData = $request->validate([
                'id' => 'required', 
                'business_code' => 'required|integer|unique:business_units,business_code,' . $request->id,
                'business_name' => 'required|string|max:255|unique:business_units,business_name,' . $request->id,
            ]);

            $businessUnit->business_code = $request->business_code;
            $businessUnit->business_name = $request->business_name;

            if ($request->business_code != $request->prev_business_code) {
                DepartmentInfo::where('business_code', $request->prev_business_code)
                    ->update([
                        'business_code' => $request->business_code,
                    ]);
                EmpOrgPosInfo::where('business_code', $request->prev_business_code)
                    ->update([
                        'business_code' => $request->business_code
                    ]);
            }

            $businessUnit->save();

            return response()->json(['status' => 'success', 'message' => 'Business Unit updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
    public function getBusinessUnit()
    {
        return response()->json(['business' => BusinessUnit::all()]);
    }
    public function deleteBusinessUnit(Request $request)
    {
        $id = $request->input('id');
        $code = $request->input('code');
        $departmentInfoCount = DepartmentInfo::where('business_code', $code)->count();
        $empOrgPosInfoCount = EmpOrgPosInfo::where('business_code', $code)->count();
    
        if ($departmentInfoCount > 0 || $empOrgPosInfoCount > 0) {
            return response()->json(['success' => false, 'message' => 'Cannot delete. Business unit is in use.'], 400);
        }
    
        try {
            $businessUnit = BusinessUnit::findOrFail($id);
            $businessUnit->delete();
            
            return response()->json(['success' => true, 'message' => 'Business unit deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete business unit'], 500);
        }
    }
    public function fetchBusinessUnit(Request $request)
    {
        $id = $request->input('id');
        $businessUnit = BusinessUnit::where('id', $id)->first();
        return response()->json(['business' => $businessUnit]);
    }
// ============= Business Unit END =============

// ============= Department Data CRUD =============
    public function getDepartmentList()
    {
        return response()->json(['department' => DepartmentInfo::all()]);
    }
    public function saveDepartment(Request $request) {
        $validatedData = $request->validate([
            'business_unit' => 'required|exists:business_units,business_code',
            'department_id' => 'required|integer|unique:department_infos',
            'department_name' => 'required|string|max:255|unique:department_infos',
        ]);

        try {
            $department = new DepartmentInfo();
            $dept_data = [
                'business_code' => $request->input('business_unit'),
                'department_id' => $request->input('department_id'),
                'department_name' => $request->input('department_name'),
            ];
            $department->fill($dept_data);
            $department->save();

            return response()->json(['status' => 'success', 'message' => 'Department saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to save Department'], 422);
        }
    }
    public function fetchDepartment(Request $request)
    {
        $id = $request->input('id');
        $department = DepartmentInfo::where('id', $id)->first();
        return response()->json(['department' => $department]);
    }
    public function editDepartmentData(Request $request)
    {

        $bu = DepartmentInfo::find($request->id);
        if ($bu->department_id != $request->department_id) {
            $validatedData = $request->validate([
                'department_id' => 'required|integer|unique:department_infos'
            ]);
        } else if ($bu->department_name != $request->department_name) {
            $validatedData = $request->validate([
                'department_name' => 'required|string|max:255|unique:department_infos',
            ]);
        }

        try {


            $dept = DepartmentInfo::find($request->id);
            if (
                $dept->department_id != $request->department_id &&
                $dept->department_name != $request->department_name
            ) {

            }
            if (
                $dept->department_id == $request->department_id &&
                $dept->department_name == $request->department_name &&
                $dept->business_code == $request->business_unit
            ) {
                return response()->json(['status' => 'nochanges', 'message' => 'No changes were made'], 200);
            }


            $dept->department_id = $request->department_id;
            $dept->department_name = $request->department_name;
            $dept->business_code = $request->business_unit;
            if ($request->department_id != $request->prev_dept_id) {
                DepartmentInfo::where('department_id', $request->prev_dept_id)
                    ->update([
                        'department_id' => $request->department_id,
                    ]);
                EmpOrgPosInfo::where('department_id', $request->prev_dept_id)
                    ->update([
                        'department_id' => $request->department_id
                    ]);
            }

            $dept->save();

            return response()->json(['status' => 'success', 'message' => 'Department Info is updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
    public function deleteDepartment(Request $request)
    {
        $id = $request->input('id');
        $code = $request->input('code');
        $empOrgPosInfoCount = EmpOrgPosInfo::where('department_id', $code)->count();
    
        if ($empOrgPosInfoCount > 0) {
            return response()->json(['success' => false, 'message' => 'Cannot delete. Department Data is in use.'], 400);
        }
    
        try {
            $dept = DepartmentInfo::findOrFail($id);
            $dept->delete();
            
            return response()->json(['success' => true, 'message' => 'Department Data deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete Department Data'], 500);
        }
    }
// ============= Department Data END =============

// ============= Job Title CRUD =================
    public function saveJobTitle(Request $request) {
        $validatedData = $request->validate([
            'job_title' => 'required|string|max:255|unique:job_titles',
        ]);

        try {
            $job = new JobTitle();
            $job->fill($request->only([
                'job_title',
            ]));
            $job->save();

            return response()->json(['status' => 'success', 'message' => 'Job Title saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to save Job Title'], 422);
        }
    }
    public function editJobTitle(Request $request)
    {
        $job = JobTitle::find($request->id);
        if ($job->job_title != $request->job_title) {
            $validatedData = $request->validate([
                'job_title' => 'required|string|max:255|unique:job_titles'
            ]);
        }

        try {


            $job = JobTitle::find($request->id);

            if (
                $job->job_title == $request->job_title 
            ) {
                return response()->json(['status' => 'nochanges', 'message' => 'No changes were made'], 200);
            }


            $job->job_title = $request->job_title;

            $job->save();

            return response()->json(['status' => 'success', 'message' => 'Job Title is updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
    public function fetchJobTitle(Request $request) {
        $id = $request->input('id');
        $job = JobTitle::where('job_id', $id)->first();
        return response()->json(['job' => $job]);     
    }
    public function deleteJobTitle(Request $request)
    {
        $id = $request->input('id');
        $empOrgPosInfoCount = EmpOrgPosInfo::where('job_id', $id)->count();
    
        if ( $empOrgPosInfoCount > 0) {
            return response()->json(['success' => false, 'message' => 'Cannot delete. Job Title is in use.'], 400);
        }
    
        try {
            $job = JobTitle::findOrFail($id);
            $job->delete();
            
            return response()->json(['success' => true, 'message' => 'Job Title is deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete Job Title'], 500);
        }
    }
    public function getJobTitle()
    {
        return response()->json(['job_title' => JobTitle::all()]);
    }
// =============== Job Title END ==================

// ================ Monthly Salary CRUD ===========
    public function getSalary()
    {
        return response()->json(['monthly_salary' => MonthlySalary::all()]);
    }
    public function fetchSalary(Request $request) {
        $id = $request->input('id');
        $sal = MonthlySalary::where('id', $id)->first();
        return response()->json(['salary' => $sal]);  
    }
    public function saveSalary(Request $request) {
        $validatedData = $request->validate([
            'salary_grade' => 'required|integer',
            'salary_step' => 'required|integer',
            'salary_amount' => 'required|numeric|between:0,9999999.99',
        ]);
        

       
            $sal = new MonthlySalary();
            $sal->fill($request->only([
                'salary_grade',
                'salary_step',
                'salary_amount'
            ]));
            $sal->save();

            return response()->json(['status' => 'success', 'message' => 'Monthly Salary saved successfully'], 200);
       
    }
    public function editSalary(Request $request) {

        $sal = MonthlySalary::find($request->id);
        if ($sal->salary_grade != $request->salary_grade) {
            $validatedData = $request->validate([
                'salary_grade' => 'required|integer'
            ]);
        }
        if ($sal->salary_step != $request->salary_step) {
            $validatedData = $request->validate([
                'salary_step' => 'required|integer'
            ]);
        }
        if ($sal->salary_amount != $request->salary_amount) {
            $validatedData = $request->validate([
                'salary_amount' => 'required|numeric|between:0,9999999.99'
            ]);
        }
        try {


            $sal = MonthlySalary::find($request->id);

            if (
                $sal->salary_grade == $request->salary_grade &&
                $sal->salary_step == $request->salary_step &&
                $sal->salary_amount == $request->salary_amount
            ) {
                return response()->json(['status' => 'nochanges', 'message' => 'No changes were made'], 200);
            }


            $sal->salary_grade = $request->salary_grade;
            $sal->salary_step = $request->salary_step;
            $sal->salary_amount = $request->salary_amount;
            $sal->save();

            return response()->json(['status' => 'success', 'message' => 'Monthly Salary is updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
    public function deleteSalary(Request $request) {
        $id = $request->input('id');
        $hruserinfo = HrUserinfo::where('salary_id', $id)->count();
    
        if ( $hruserinfo > 0) {
            return response()->json(['success' => false, 'message' => 'Cannot delete. Monthly Salary is in use.'], 400);
        }
    
        try {
            $sal = MonthlySalary::findOrFail($id);
            $sal->delete();
            
            return response()->json(['success' => true, 'message' => 'Monthly Salary is deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete Monthly Salary'], 500);
        }    
    }
}
