<?php

namespace App\Http\Controllers;

use App\Models\Prefix;
use Illuminate\Support\Facades\Validator;
use App\Models\Suffix;
use App\Models\JobTitle;
use App\Models\HrUserinfo;
use App\Models\OfficeInfo;
use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use App\Models\DepartmentInfo;
use App\Models\EmpFamilyInfo;
use App\Models\EmploymentStatus;
use App\Models\ModeOfEmployement;
use App\Models\UserSystemSetting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function account()
    {
        $families = EmpFamilyInfo::where('hrid', Auth::id())->get();
        $suffixes = Suffix::all();
        return view('profile.account', compact('suffixes', 'families'));
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
        $departments = DepartmentInfo::where('business_code', '=', Auth::user()->org_pos->business_code)->get();
        return view('profile.settings', compact('prefixes', 'suffixes', 'offices',  'businesses', 'jobtitles', 'modeofemps', 'empstats', 'departments'));
    }
    public function updatePassword(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->back()->with(['success' => 'Password updated successfully.']);
    }

    public function updateProfileImg(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            $user = auth()->user();

            $hrUserinfo = HrUserinfo::findOrFail($user->hrid);

            if ($request->hasFile('profile_image')) {
                $file = $request->file('profile_image');
                $path = $file->store('profile_images', 'public');
                $fileName = basename($path);
                $hrUserinfo->profile_img = $fileName;
                $hrUserinfo->save();

                return redirect()->back()->with(['success' => 'Profile image updated successfully.']);
            }
        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
    public function updateUserProfile(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'middle_name' => 'nullable|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'last_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'prefix' => 'required|string',
            'suffix' => 'required|string',
            'employee_id' => 'nullable|string',
            'date_of_leaving' => 'nullable|date',
            'years_of_experience' => 'required|integer',
            'mode_of_employment' => 'required|string',
            'employment_status' => 'required|string',
            'deped_email' => 'required|email',
            'office_name' => 'required|string',
            'business_name' => 'required|string',
            'department_name' => 'required|string',
            'job_title' => 'required|string',
        ]);

        $user = $request->user();

        $user->update([
            'first_name' => $validatedData['first_name'],
            'midname' => $validatedData['middle_name'],
            'last_name' => $validatedData['last_name'],
            'employee_id' => $validatedData['employee_id'] ?? null,
            'deped_email' => $validatedData['deped_email'],
            'dateof_leaving' => $validatedData['date_of_leaving'] ?? null,
            'employment_status' => $validatedData['employment_status'],
            'mode_of_employment' => $validatedData['mode_of_employment']
        ]);

        if ($user->personalInfo) {
            $user->personalInfo()->update([
                'prefix_name' => $validatedData['prefix'],
                'suffix_name' => $validatedData['suffix'],
                'years_of_experience' => $validatedData['years_of_experience'],
            ]);
        }

        if ($user->org_pos) {
            $user->org_pos()->update([
                'office_id' => $validatedData['office_name'],
                'business_code' => $validatedData['business_name'],
                'department_id' => $validatedData['department_name'],
                'job_id' => $validatedData['job_title'],
            ]);
        }

        return redirect()->back()->with(['success' => 'Profile updated successfully.']);
    }
    public function updateToolSettings(Request $request)
    {
        $type = $request->input('type');
        $val = $request->input('val');

        $userId = Auth::id();

        $userSettings = UserSystemSetting::where('hrid', $userId)->first();

        if (!$userSettings) {
            $userSettings = new UserSystemSetting();
            $userSettings->hrid = $userId;
        }

        if ($type === 'mode') {
            $userSettings->system_mode = $val;
        } elseif ($type === 'header') {
            $userSettings->header_mode = $val;
        } elseif ($type === 'sidebar') {
            $userSettings->sidebar_mode = $val;
        } elseif ($type === 'backgrounds') {
            $userSettings->backgrounds_mode = $val;
        } elseif ($type === 'setting_icon') {
            $userSettings->setting_icon = $val;
        } elseif ($type === 'box_design') {
            $userSettings->box_design = $val;
        }

        // Save the user system settings
        $userSettings->save();

        // Return a JSON response indicating success
        return response()->json(['success' => true]);
    }
    public function checkBusinessCode(Request $request)
    {
        $businessCode = $request->business_code;
        $departments = DepartmentInfo::where('business_code', $businessCode)->get();
        $deptid = Auth::user()->org_pos->department_id;

        // Add deptid to the departments array
        $response = [
            'departments' => $departments,
            'deptid' => $deptid
        ];

        return response()->json($response);
    }

    public function updatePersonalInfo(Request $request)
    {

        $rules = [
            // Validation rules for personal info
            'gender' => 'required|in:Male,Female,Rather not to Say',
            'citizenship' => 'required|in:Dual Citizenship,Filipino',
            'dual_citizenship' => 'nullable|string',
            'birthdate' => 'required|date',
            // Validation rules for Vital Statistics
            'civil_status' => 'required|in:N/A,Annulled,Divorced,Legally Separated,Married,Single,Widow/Widower',
            'blood_type' => 'required|in:O+,O-,A+,A-,B+,B-,AB+,AB-',
            'height' => 'nullable|string',
            'weight' => 'nullable|string',
            'birthplace' => 'nullable|string',
            // Validation rules for government info
            'prc_no' => 'nullable|string',
            'sss_no' => 'nullable|string',
            'gsisbp_no' => 'nullable|string',
            'tin_no' => 'nullable|string',
            'philhealth_no' => 'nullable|string',
            'pagibig_no' => 'nullable|string',
            'gsis_no' => 'nullable|string',
            'agency_employee_no' => 'nullable|string',
            // Validation for Address
            'country' => 'required|string',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('active_tab', 'personal');
        }
        $user = $request->user();
        $validatedData = $validator->validated();

        if ($user->personalInfo) {
            $user->personalInfo()->update([
                'gender' => $validatedData['gender'],
                'citizenship' => $validatedData['citizenship'],
                'dual_citizenship' => $validatedData['dual_citizenship'],
                'birthdate' => $validatedData['birthdate'],
                'civil_status' => $validatedData['civil_status'],
                'blood_type' => $validatedData['blood_type'],
                'height' => $validatedData['height'],
                'weight' => $validatedData['weight'],
                'birthplace' => $validatedData['birthplace'],
            ]);
        }
        // Check if government information exists for the user
        if ($user->governmentInfo) {
            // If it exists, update it
            $user->governmentInfo()->update([
                'prc_no' => $validatedData['prc_no'],
                'sss_id' => $validatedData['sss_no'],
                'gsis_bp_no' => $validatedData['gsisbp_no'],
                'tin_no' => $validatedData['tin_no'],
                'philhealth_id' => $validatedData['philhealth_no'],
                'pag_ibig_id' => $validatedData['pagibig_no'],
                'gsis_id' => $validatedData['gsis_no'],
                'agency_employee_no' => $validatedData['agency_employee_no'],
            ]);
        } else {
            // If it doesn't exist, create it
            $user->governmentInfo()->create([
                'prc_no' => $validatedData['prc_no'],
                'sss_id' => $validatedData['sss_no'],
                'gsis_bp_no' => $validatedData['gsisbp_no'],
                'tin_no' => $validatedData['tin_no'],
                'philhealth_id' => $validatedData['philhealth_no'],
                'pag_ibig_id' => $validatedData['pagibig_no'],
                'gsis_id' => $validatedData['gsis_no'],
                'agency_employee_no' => $validatedData['agency_employee_no'],
            ]);
        }
        // Update address information
        if ($user->addressInfo) {
            $user->addressInfo()->update([
                'country' => $validatedData['country'],
            ]);
        }

        return redirect()->back()->with('success', 'Personal information updated successfully')->with('active_tab', 'personal');
    }

    public function updateContactInfo(Request $request)
    {
        $userId = $request->user()->hrid;

        $rules = [
            // Validation rules for contact info
            'personal_email' => 'required|email|max:255|unique:emp_contact_infos,personal_email,' . $userId . ',hrid',
            'telephone_number' => 'nullable|string',
            'mobile_number' => 'required|string',
            // Validation rules for contact emergency
            'contact_name' => 'required|string',
            'contact_number' => 'required|string',
            'emergency_email' => 'required|email',
            // Validation rules for address info
            'region' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'barangay' => 'required|string',
            'house_block_no' => 'nullable|string',
            'street_name' => 'required|string',
            'subdivision_village' => 'nullable|string',
            'zipcode' => 'required|string',
            // Validation for residential
            'residential_region' => 'required|string',
            'residential_province' => 'required|string',
            'residential_city' => 'required|string',
            'residential_barangay' => 'required|string',
            'residential_house_block_no' => 'nullable|string',
            'residential_street_name' => 'required|string',
            'residential_subdivision_village' => 'nullable|string',
            'residential_zipcode' => 'required|string',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('active_tab', 'contact');
        }
        $user = $request->user();
        $validatedData = $validator->validated();

        if ($user->contact) {
            $user->contact()->update([
                'personal_email' => $validatedData['personal_email'],
                'tel_num' => $validatedData['telephone_number'],
                'phone_number' => $validatedData['mobile_number'],
                'emergency_contact_name' => $validatedData['contact_name'],
                'emergency_contact_no' => $validatedData['contact_number'],
                'emergency_email' => $validatedData['emergency_email']
            ]);
        }
        // Check if government information exists for the user
        if ($user->addressInfo) {
            // If it exists, update it
            $user->addressInfo()->update([
                'region' => $validatedData['region'],
                'province' => $validatedData['province'],
                'barangay' => $validatedData['barangay'],
                'city' => $validatedData['city'],
                'street_name' => $validatedData['street_name'],
                'house_block_no' => $validatedData['house_block_no'],
                'subdivision_village' => $validatedData['subdivision_village'],
                'zipcode' => $validatedData['zipcode'],
            ]);
        } else {
            // If it doesn't exist, create it
            $user->addressInfo()->create([
                'region' => $validatedData['region'],
                'province' => $validatedData['province'],
                'barangay' => $validatedData['barangay'],
                'city' => $validatedData['city'],
                'street_name' => $validatedData['street_name'],
                'house_block_no' => $validatedData['house_block_no'],
                'subdivision_village' => $validatedData['subdivision_village'],
                'zipcode' => $validatedData['zipcode'],
            ]);
        }
        // Update residential address information
        if ($user->residentialInfo) {
            // If it exists, update it
            $user->residentialInfo()->update([
                'region' => $validatedData['residential_region'],
                'province' => $validatedData['residential_province'],
                'barangay' => $validatedData['residential_barangay'],
                'city' => $validatedData['residential_city'],
                'street_name' => $validatedData['residential_street_name'],
                'house_block_no' => $validatedData['residential_house_block_no'],
                'subdivision_village' => $validatedData['residential_subdivision_village'],
                'zipcode' => $validatedData['residential_zipcode'],
            ]);
        } else {
            // If it doesn't exist, create it
            $user->residentialInfo()->create([
                'region' => $validatedData['residential_region'],
                'province' => $validatedData['residential_province'],
                'barangay' => $validatedData['residential_barangay'],
                'city' => $validatedData['residential_city'],
                'street_name' => $validatedData['residential_street_name'],
                'house_block_no' => $validatedData['residential_house_block_no'],
                'subdivision_village' => $validatedData['residential_subdivision_village'],
                'zipcode' => $validatedData['residential_zipcode'],
            ]);
        }

        return redirect()->back()->with('success', 'Contact information updated successfully')->with('active_tab', 'contact');
    }
    public function getFamily(Request $request)
    {
        $hrUserInfos = HrUserinfo::with('first_name', 'last_name', 'org_pos.department')
            ->whereHas('role', function ($query) {
                $query->where('role_name', 'Employee'); // Filter by role_id 10 (PSDS)
            })
            ->get();

        return response()->json(['users' => $hrUserInfos]);
    }
    public function addFamily(Request $request) {
        $userId = $request->user()->hrid;

        $rules = [
            // Validation rules for contact info
            'relationship' => 'required|in:Child,Spouse',
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'extension' => 'nullable|string',
            'deceased' => 'nullable|string',
            'occupation' => 'nullable|string',
            'employer_name' => 'nullable|string',
            'business_add' => 'nullable|string',
            'telephone_number' => 'nullable|string',
            'birthdate' => 'required|string',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('active_tab', 'family');
        }
        $user = $request->user();
        $validatedData = $validator->validated();

        $user->familyInfo()->create([
            'relationship' => $validatedData['relationship'],
            'first_name' => $validatedData['first_name'],
            'middle_name' => $validatedData['middle_name'],
            'last_name' => $validatedData['last_name'],
            'extension' => $validatedData['extension'],
            'deceased' => $validatedData['deceased'],
            'occupation' => $validatedData['occupation'],
            'employer_name' => $validatedData['employer_name'],
            'business_add' => $validatedData['business_add'],
            'telephone_number' => $validatedData['telephone_number'],
            'birthdate' => $validatedData['birthdate'],
        ]);

        return redirect()->back()->with('success', 'Family information added successfully')->with('active_tab', 'family');
    }
}
