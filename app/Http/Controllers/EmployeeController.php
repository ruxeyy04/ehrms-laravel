<?php

namespace App\Http\Controllers;

use App\Models\Prefix;
use App\Models\Suffix;
use App\Models\JobTitle;
use App\Models\RoleInfo;
use App\Models\HrUserinfo;
use Illuminate\Http\Request;
use App\Models\EmpOrgPosInfo;
use App\Models\DepartmentInfo;
use App\Models\EmpAddressInfo;
use App\Models\EmpContactInfo;
use App\Models\EmpPersonalInfo;
use App\Models\EmpResidentialInfo;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EmployeeController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    // CRUD
    public function empverifyaddform(Request $request)
    {

        $rules = [];

        switch ($request->input('form_number')) {
            case 1:
                $prefix = Prefix::pluck('prefix_name')->toArray();
                $suffix = Suffix::pluck('extension_name')->toArray();
                $rules = [
                    'prefix_name' => ['required', 'string', Rule::in($prefix)],
                    'suffix_name' => ['required', 'string', Rule::in($suffix)],
                    'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
                    'midname' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],

                    'last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
                    'gender' => ['required', 'string', 'in:Male,Female,Rather not to Say'],
                    'birthdate' => ['required', 'date'],
                    'birthplace' => ['required', 'string', 'max:255'],
                    'employment_date' => ['required', 'date'],
                    'years_of_experience' => ['required', 'integer', 'min:0'],
                ];
                break;
            case 2:
                $rules = [
                    'region' => ['required'],
                    'province' => ['required'],
                    'city' => ['required'],
                    'barangay' => ['required'],
                    'street_name' => ['required'],
                ];
                break;
            case 3:
                $rules = [
                    'phone_number' => 'required',
                    'deped_email' => 'required|email|max:255|unique:' . HrUserinfo::class,
                    'personal_email' => 'required|email|max:255|unique:' . HrUserinfo::class,
                ];
                break;
            case 4:
                $jobTitles = JobTitle::pluck('job_id')->toArray();
                $rolename = RoleInfo::pluck('role_id')->toArray();
                $rules = [
                    'office_name' => ['required'],
                    'business_name' => ['required'],
                    'role' => ['required', Rule::in($rolename)],
                    'mode_of_employment' => ['required'],
                    'job_title' => ['required', Rule::in($jobTitles)],
                    'employment_status' => ['required', 'string'],
                ];

                if (!$request->has('psds')) {
                    $rules['department_name'] = ['required'];
                }
                break;
        }

        try {
            $validatedData = $request->validate($rules);
            $message = "Validation successful for Form {$request->input('form_number')}";
            return response()->json(['status' => 'success', 'message' => $message, 'form_number' => $request->input('form_number')], 200);
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->messages();
            return response()->json(['errors' => $errors], 422);
        }
    }

    public function checkBusinessCode(Request $request)
    {
        $businessCode = $request->business_code;
        $departments = DepartmentInfo::where('business_code', $businessCode)->get();

        return response()->json($departments);
    }
    public function showReportingManager(Request $request)
    {
        $dept_id = $request->input('department_id');


        $reportingManager = EmpOrgPosInfo::where('department_id', $dept_id)
            ->whereHas('userinfo', function ($query) {
                $query->where('role_id', 7);
            })
            ->with('userinfo')
            ->first();

        if ($reportingManager) {
            $fname = $reportingManager->userinfo->first_name;
            $lname = $reportingManager->userinfo->last_name;
            return response()->json(['fname' => $fname, 'lname' => $lname]);
        } else {
            return response()->json(['error' => 'Reporting manager not found for the specified department.'], 404);
        }
    }
    public function showPSDS(Request $request)
    {
        $business_code = $request->input('business_code');

        // Retrieve the user with role_name 'PSDS' based on the provided business_code
        $psds = HrUserinfo::whereHas('role', function ($query) {
            $query->where('role_name', 'PSDS');
        })
            ->whereHas('org_pos', function ($query) use ($business_code) {
                $query->where('business_code', $business_code);
            })
            ->first();

        if ($psds) {
            $fname = $psds->first_name;
            $lname = $psds->last_name;
            return response()->json(['fname' => $fname, 'lname' => $lname]);
        } else {
            return response()->json(['error' => 'PSDS not found for the specified district number.'], 404);
        }
    }
    public function fileManager()
    {
        $hruserinfos = HrUserinfo::all();
        return view('profile.filemanager', compact('hruserinfos'));
    }
    public function saveEmployee(Request $request)
    {
        try {

            $defaultPassword = 'depedozamiz';

            $data = $request->except(['prof_img', 'role']);

            // Check if the request has employee_no
            if ($request->has('employee_no')) {
                $data['employee_no'] = $request->input('employee_no');
            }

            $data['role_id'] = $request->input('role');

            $hrUserinfo = new HrUserinfo();
            $hrUserinfo->fill($data);
            $hrUserinfo->password = Hash::make($defaultPassword);
            $hrUserinfo->save();
            $hrid = $hrUserinfo->hrid;

            // Save the profile image if provided
            if ($request->hasFile('prof_img')) {
                $file = $request->file('prof_img');
                $path = $file->store('profile_images', 'public');
                $fileName = basename($path);
                $hrUserinfo->profile_img = $fileName;
                $hrUserinfo->save();
            }



            // Create a new EmpPersonalInfo record
            $empPersonalInfo = new EmpPersonalInfo();
            $empPersonalInfo->fill($request->only([
                'prefix_name',
                'suffix_name',
                'gender',
                'birthdate',
                'birthplace',
                'employment_date',
                'years_of_experience'
            ]));
            $empPersonalInfo->hrid = $hrid;
            $empPersonalInfo->save();

            // Create a new EmpAddressInfo record
            $empAddressInfo = new EmpAddressInfo();
            $empAddressInfo->fill($request->only([
                'region',
                'province',
                'city',
                'barangay',
                'street_name'
            ]));
            $empAddressInfo->hrid = $hrid;
            $empAddressInfo->save();

            // Create a new EmpReisdentialInfo record
            $empResidentialInfo = new EmpResidentialInfo();
            $empResidentialInfo->fill($request->only([
                'region',
                'province',
                'city',
                'barangay',
                'street_name'
            ]));
            $empResidentialInfo->hrid = $hrid;
            $empResidentialInfo->save();
            
            // Create a new EmpContactInfo record
            $empContactInfo = new EmpContactInfo();
            $empContactInfo->fill($request->only([
                'phone_number',
                'telnumber',
                'deped_email',
                'personal_email'
            ]));
            $empContactInfo->hrid = $hrid;
            $empContactInfo->save();

            // Create a new EmpOrgPosInfo record
            $empOrgPosData = [
                'office_id' => $request->input('office_name'),
                'department_id' => $request->input('department_name'),
                'job_id' => $request->input('job_title'),
                'business_code' => $request->input('business_name'),


            ];

            $empOrgPosInfo = new EmpOrgPosInfo();
            $empOrgPosInfo->hrid = $hrid;
            $empOrgPosInfo->fill($empOrgPosData);

            $empOrgPosInfo->save();
            if ($request->has('psds')) {
                return response()->json(['status' => 'success', 'message' => 'New PSDS Saved successfully'], 200);
            } else if ($request->has('schoolhead')) {
                return response()->json(['status' => 'success', 'message' => 'New School Head Saved successfully'], 200);
            } else {
                return response()->json(['status' => 'success', 'message' => 'New Employee Saved successfully'], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
    // =================================
    // Employee Web Pages
    public function dashboard()
    {
        return view('client.dashboard');
    }
    public function getUsers(Request $request)
    {
        $hrUserInfos = HrUserinfo::with('role', 'org_pos.jobTitle', 'org_pos.department')
            ->whereHas('role', function ($query) {
                $query->where('role_name', 'Employee'); // Filter by role_id 10 (PSDS)
            })
            ->get();

        return response()->json(['users' => $hrUserInfos]);
    }
    public function getPSDS()
    {
        // Retrieve HrUserinfo with its related data
        $hrUserInfos = HrUserinfo::with('role', 'org_pos.jobTitle', 'org_pos.businessUnit', 'contact')
            ->whereHas('role', function ($query) {
                $query->where('role_id', 10); // Filter by role_id 10 (PSDS)
            })
            ->get();

        return response()->json(['psds' => $hrUserInfos]);
    }
    public function getSchoolhead()
    {
        $hrUserInfos = HrUserinfo::with('role', 'org_pos.jobTitle', 'org_pos.department', 'org_pos.businessUnit', 'contact')
            ->whereHas('org_pos.jobTitle', function ($query) {
                $query->where('job_title', 'like', '%School Principal%')
                    ->orWhere('job_title', 'like', '%Head Teacher%');
            })
            ->get();

        return response()->json(['schoolhead' => $hrUserInfos]);
    }

    public function getSpecificUser(Request $request)
    {
        $user = HrUserinfo::with('role', 'org_pos.jobTitle', 'org_pos.department')
            ->find($request->hrid);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['user' => $user]);
    }


}
