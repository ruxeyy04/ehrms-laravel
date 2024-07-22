<x-app-layout>
    <pop-notify hidden>

    </pop-notify>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="row">

            <!-- START OF EMPLOYEE LIST -->
            <div class="col-xl-12 col-md-12">
                <div class="fx-card" id="dealtbl">
                    <div class="fx-card-header">
                        <h4 class="fx-card-title">Employee List</h4>
                        <div class="header-tools">
                            <a href="javascript:void(0)" class="m-r-10 fx-full-card" title="Full Screen"><i
                                    class="ri-fullscreen-line"></i></a>
                            <div class="fx-date-range dots m-r-10">
                                <span></span>
                            </div>
                            <button type="button" class="fx-btn ripple-btn color-dark" data-bs-toggle="modal"
                                data-bs-target="#addEmployee" style="height: 30px !important"><i
                                    class="ri-user-add-line m-r-10"></i>Employee</button>
                        </div>
                    </div>
                    <div class="fx-card-content card-default">
                        <div class="container-fluid">
                            <table class="table" id="employee-table-list">
                                <thead class="table__thead">
                                    <tr>
                                        <th class="table__th sorting">EMPLOYEE NAME</th>
                                        <th class="table__th sorting">EMAIL</th>
                                        <th class="table__th sorting">JOB TITLE</th>
                                        <th class="table__th sorting">DEPARTMENT NAME</th>
                                        <th class="table__th sorting">School ID</th>
                                        <th class="table__th sorting">EMPLOYMENT STATUS</th>
                                        <th class="table__th sorting">EMPLOYMENT DATE</th>
                                        
                                        <th class="table__th "></th>
                                    </tr>
                                </thead>
                              
                                <tbody class="table__tbody">
                                    {{-- @foreach ($hruserinfo as $userinfo)
                                        <tr
                                            class="table-row">

                                            <td class="table-row__td">
                                                <div class="table-row--info"></div>
                                                <div class="table-row__img" style="background-image: url('/storage/profile_images/{{ $userinfo->profile_img == 'defaultimg.jpg' ? 'defaultimg.jpg' : $userinfo->profile_img }}');"></div>
                                                <div class="table-row__info">
                                                    <p class="table-row__name">
                                                        {{ $userinfo->first_name . ' ' . $userinfo->last_name }}</p>
                                                    <span
                                                        class="table-row__small">{{ $userinfo->role->role_name }}</span>
                                                </div>

                                            </td>
                                            <td data-column="Email" class="table-row__td">
                                                {{ $userinfo->deped_email }}
                                            </td>

                                            <td data-column="Job Title" class="table-row__td">
                                                {{ $userinfo->org_pos->jobTitle->job_title }}
                                            </td>
                                            <td data-column="Department/School Name" class="table-row__td">
                                                {{ $userinfo->org_pos->department->dept_name }}
                                            </td>
                                            <td data-column="Department/School ID" class="table-row__td">
                                                {{ $userinfo->org_pos->department->dept_id }}
                                            </td>
                                            <td data-column="Employment Status" class="table-row__td">
                                                <span
                                                    class="table-row__status">{{$userinfo->employment_status}}</span>
                                            </td>
                                            <td data-column="Employment Date" class="table-row__td">
                                                <span
                                                    class="table-row__status">{{ date('F j, Y', strtotime($userinfo->employment_date)) }}</span>
                                            </td>
                                            <td class="table-row__td">
                                                <div class="d-flex justify-content-center">
                                                    <button type="button" class="btn btn-outline-success"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="View Profile"><i
                                                            class="ri-information-line"></i></button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach --}}

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END OF EMPLOYEE LIST -->
        </div>
    </div>

    <x-modal icon="ri-user-add-line" modal_title="Add Employee" modal_type="fade" id="addEmployee" tabindex="-1"
        aria-labelledby="addEmployeeLabel" aria-hidden="true" modal_size="modal-xl" modal_mode="modal-dialog-centered"
        buttons="false" route-save="{{ route('saveEmployee') }}">

        <div class="gray start-0 d-none"></div>

        <!-- Progress bar -->
        <div class="progressbar " data-step="0">
            <div class="progress " id="progress"></div>
            <div class="progress-step progress-step-active"></div>
            <div class="progress-step "></div>
            <div class="progress-step"></div>
            <div class="progress-step "></div>

        </div>
        <div class="c-content">
            <div class="odivcon">
                {{-- Personal information --}}
                <div class="divcon current">
                    <form class="empPersonal" action="{{ route('empverifyaddform') }}" id="empPersonalInfo"
                        method="POST">
                        @csrf
                        <input type="hidden" name="form_number" value="1">
                        <div class="row ">
                            <div class=" col-xl-2 col-md-12">
                                <div class="team-nonsticky-bar">
                                    <div class="col-xl-12">
                                        <div class="fx-card  fx-product-uploads">
                                            <div class="fx-vendor-img-upload">
                                                <div class="fx-vendor-main-img">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="profile_img"
                                                                class="fx-image-upload" accept=".png, .jpg, .jpeg"
                                                                name="prof_img">
                                                            <label><i class="ri-pencil-line"></i></label>
                                                        </div>
                                                        <div class="avatar-preview fx-preview">
                                                            <div class="imagePreview fx-div-preview">
                                                                <img class="fx-image-preview"
                                                                    src="../assets/img/user/thumb.jpg"
                                                                    alt="edit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-10 col-md-12">
                                <div class="fx-card team-overview">
                                    <div class="fx-card-content fx-card-team team-details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3>Personal Information</h3>
                                                <div class="fx-team-detail">Personal information of the employee</div>
                                            </div>
                                            <div class="col-xl-4 col-sm-12 col-sm-12">
                                                <h6>Full Name Information</h6>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <x-textm-input type="text" name="first_name" required
                                                                :value="old('first_name')" autocomplete="first_name" />
                                                            <x-inputm-label for="first_name" :value="__('First Name')"
                                                                required />
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <x-textm-input type="text" name="midname" required
                                                                :value="old('midname')" autocomplete="midname" />
                                                            <x-inputm-label for="midname" :value="__('Middle Name')" />
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <x-textm-input type="text" name="last_name" required
                                                                :value="old('last_name')" autocomplete="last_name" />
                                                            <x-inputm-label for="last_name" :value="__('Last Name')"
                                                                required />

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="sel sel-unactive form-group mb-3">
                                                                    <select class="sele form-control"
                                                                        name="prefix_name">
                                                                        @foreach ($prefixes as $prefix)
                                                                            <option
                                                                                value="{{ $prefix->prefix_name }}">
                                                                                {{ $prefix->prefix_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <label class="sellabel">Prefix Name<span
                                                                            class="text-danger">*</span></label>
                                                                    <label class="lableic"><span
                                                                            class="ri-arrow-down-s-line"></span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="sel sel-unactive form-group mb-3">
                                                                    <select class="sele form-control"
                                                                        name="suffix_name">
                                                                        <option value="" hidden></option>
                                                                        @foreach ($suffixes as $suffix)
                                                                            <option
                                                                                value="{{ $suffix->extension_name }}">
                                                                                {{ $suffix->extension_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <label class="sellabel">Suffix Name<span
                                                                            class="text-danger">*</span></label>
                                                                    <label class="lableic"><span
                                                                            class="ri-arrow-down-s-line"></span></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12 col-sm-12">
                                                <h6>Biological Information</h6>
                                                <div class="sel sel-unactive form-group mb-3 ">
                                                    <select class="sele form-control" name="gender">
                                                        <option value="" hidden></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Rather not to Say">Rather not to Say</option>
                                                    </select>
                                                    <label class="sellabel">Gender<span class="text-danger">*</span>
                                                    </label>
                                                    <label class="lableic"><span
                                                            class="ri-arrow-down-s-line"></span></label>
                                                </div>
                                                <div class="form-group datee mb-3">
                                                    <x-textm-input type="date" name="birthdate" required
                                                        :value="old('birthdate')" aria-placeholder="asd"
                                                        autocomplete="birthdate" />
                                                    <x-inputm-label class="datee" for="name" :value="__('Birthdate')"
                                                        required />
                                                </div>
                                                <div class="form-group mb-3">

                                                    <textarea class="form-control" required="" id="birthplace" name="birthplace" rows="3"></textarea>
                                                    <label class="dateee">Birthplace
                                                        <span class="text-danger">*</span></label>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-md-12 col-sm-12">
                                                <h6>Employment Information</h6>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <x-textm-input type="text" name="employee_no" required
                                                                :value="old('employee_no')" autocomplete="employee_no" />
                                                            <x-inputm-label for="name" :value="__('Employee No.')" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group datee mb-3">
                                                            <x-textm-input type="date" name="employment_date"
                                                                required :value="old('employment_date')" aria-placeholder="asd"
                                                                autocomplete="employment_date" />
                                                            <x-inputm-label class="datee" for="name"
                                                                :value="__('Employment Date')" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group datee mb-3">
                                                            <x-textm-input type="date" name="dateof_leaving"
                                                                required :value="old('date_leave')" aria-placeholder="asd"
                                                                autocomplete="date_leave" />
                                                            <x-inputm-label class="datee" for="name"
                                                                :value="__('Date of Leaving')" />
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <x-textm-input type="number" name="years_of_experience"
                                                                required :value="old('years_of_experience')"
                                                                autocomplete="years_of_experience" />
                                                            <x-inputm-label for="name" :value="__('Years of experience')"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                {{-- Address information --}}
                <div class="divcon next">
                    <form class="empAddress" action="{{ route('empverifyaddform') }}" id="empAddressInfo"
                        method="POST">
                        @csrf
                        <input type="hidden" name="form_number" value="2">
                        <div class="col-xxl-12 col-xl-12 col-md-12">
                            <div class="fx-card team-overview">
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Address Information</h3>
                                            <div class="fx-team-detail">
                                                Address information of the employee
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <h6>Address Information</h6>
                                            <div class="row">
                                                <div class="col-xl-3 col-sm-12 col-md-12">
                                                    <div class="sel sel-active form-group mb-3">
                                                        <select class="form-control" name="region"
                                                            id="region-select">
                                                            <option value="">Select Region</option>
                                                        </select>
                                                        <label class="sellabel">Region <span
                                                                class="text-danger">*</span></label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-12 col-md-12">
                                                    <div class="sel sel-active form-group mb-3">
                                                        <select class="form-control" name="province" id="province"
                                                            disabled>
                                                        </select>
                                                        <label class="sellabel">Province <span
                                                                class="text-danger">*</span></label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-12 col-md-12">
                                                    <div class="sel sel-active form-group mb-3">
                                                        <select class="form-control" name="city" id="city"
                                                            disabled>
                                                        </select>
                                                        <label class="sellabel">City/Municipality <span
                                                                class="text-danger">*</span></label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-12 col-md-12">
                                                    <div class="sel sel-active form-group mb-3">
                                                        <select class="form-control" name="barangay" id="barangay"
                                                            disabled>
                                                        </select>
                                                        <label class="sellabel">Barangay <span
                                                                class="text-danger">*</span></label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">

                                                        <textarea class="form-control" required="" id="streetName" name="street_name" rows="4"></textarea>
                                                        <label class="dateee">Street Name, Building, House No.
                                                            <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Contact information --}}
                <div class="divcon next">
                    <form class="empContact" action="{{ route('empverifyaddform') }}" id="empContactInfo"
                        method="POST">
                        @csrf
                        <input type="hidden" name="form_number" value="3">
                        <div class="col-xxl-12 col-xl-12 col-md-12">
                            <div class="fx-card team-overview">
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-12 ">
                                            <h3>Contact Information</h3>
                                            <div class="fx-team-detail">Contact and email address of the employee</div>
                                        </div>
                                        <div class="col-md-6 col-md-12 col-sm-12">
                                            <h6>Contact Number</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <x-textm-input type="text" name="phone_number" required
                                                            :value="old('phone_number')" autocomplete="phone_number"
                                                            data-inputmask="&quot;mask&quot;: &quot;9999-999-9999&quot;" />
                                                        <x-inputm-label for="phone_number" :value="__('Phone Number')"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <x-textm-input type="text" name="telnumber" required
                                                            :value="old('telnumber')" autocomplete="telnumber"
                                                            data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" />
                                                        <x-inputm-label for="telnumber" :value="__('Telephone Number')" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <h6>Email</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <x-textm-input type="text" name="deped_email" required
                                                            :value="old('deped_email')" autocomplete="deped_email"
                                                            oninput="addDepedDomain(event)" />
                                                        <x-inputm-label for="deped_email" :value="__('DepEd Email')"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <x-textm-input type="text" name="personal_email" required
                                                            :value="old('personal_email')" autocomplete="personal_email" />
                                                        <x-inputm-label for="personal_email" :value="__('Personal Email')"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- organization and position --}}
                <div class="divcon next">
                    <form class="empOrg" action="{{ route('empverifyaddform') }}" id="empOrgPosInfo"
                        method="POST">
                        @csrf
                        <input type="hidden" name="form_number" value="4">
                        <div class="col-xxl-12 col-xl-12 col-md-12">
                            <div class="fx-card team-overview">
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Organization & Roles Information</h3>
                                            <div class="fx-team-detail"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>Organizational Identifiers</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="office_name">
                                                            <option value="" hidden></option>
                                                            @foreach ($offices as $office)
                                                                <option value="{{ $office->office_id }}">
                                                                    {{ $office->office_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Office Name<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="business_name"
                                                            id="businessName"
                                                            route="{{ route('checkBusinessCode') }}"
                                                            route1={{ route('showReportingManager') }}>
                                                            <option value="" hidden></option>
                                                            @foreach ($businesses as $business)
                                                                <option value="{{ $business->business_code }}">
                                                                    {{ $business->business_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Business Name<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="department_name"
                                                            disabled id="deptName">
                                                            <option value="" hidden></option>
                                                        </select>
                                                        <label class="sellabel">Department Name<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="reporting_manager"
                                                            disabled id="reporting_m">
                                                            <option value="" hidden></option>
                                                        </select>
                                                        <label class="sellabel">Reporting Manager<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>Position Identifiers</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="role">
                                                            <option value="" hidden></option>
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->role_id }}">
                                                                    {{ $role->role_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Role<span class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><i class="ri-user-3-fill"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="mode_of_employment">
                                                            <option value="" hidden></option>
                                                            @foreach ($modeofemps as $modeofemp)
                                                                <option value="{{ $modeofemp->mode_of_emp }}">
                                                                    {{ $modeofemp->mode_of_emp }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Mode of Employment<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="job_title">
                                                            <option value="" hidden></option>
                                                            @foreach ($jobtitles as $jobtitle)
                                                                <option value="{{ $jobtitle->job_id }}">
                                                                    {{ $jobtitle->job_title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Job Title<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="employment_status">
                                                            <option value="" hidden></option>
                                                            @foreach ($empstats as $empstat)
                                                                <option value="{{ $empstat->emp_status }}">
                                                                    {{ $empstat->emp_status }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Employment Status<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- <h6 class="text-center text-danger fw-bold">NOTE: <span class="font-weight-nomal">Please fill the required input.</span></h6> --}}
            </div>
        </div>

    </x-modal>
    <x-modal icon="ri-edit-2-fill" modal_title="Edit Employee" modal_type="fade" id="editEmployee" tabindex="-1"
        aria-labelledby="editEmployeeLabel" aria-hidden="true" modal_size="modal-xl"
        modal_mode="modal-dialog-centered">
        <form class="fx-profile-add">
            <div class="row ">
                <div class="col-xxl-3 col-xl-4 col-md-12">
                    <div class="team-sticky-bar">
                        <div class="col-xl-12">
                            <div class="fx-card  fx-product-uploads">
                                <div class="fx-vendor-img-upload">
                                    <div class="fx-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="product_main" class="fx-image-upload"
                                                    accept=".png, .jpg, .jpeg">
                                                <label><i class="ri-pencil-line"></i></label>
                                            </div>
                                            <div class="avatar-preview fx-preview">
                                                <div class="imagePreview fx-div-preview">
                                                    <img class="fx-image-preview"
                                                        src="../assets/img/product/preview.jpg" alt="edit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-md-12">
                    <div class="fx-card team-overview">
                        <div class="fx-card-content fx-card-team team-details">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Account Details</h3>
                                    <div class="fx-team-detail">
                                        <p>From your account you can easily view and track Deals. You can manage
                                            and change your account information like address, contact
                                            information
                                            and history of deals.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <h6>Full Name Information</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{-- input-error --}}
                                            <div class="form-group mb-3 ">
                                                <x-textm-input type="text" name="fname" required
                                                    :value="old('fname')" autocomplete="fname" />
                                                <x-inputm-label for="name" :value="__('First Name')" required />
                                            </div>
                                            <div class="form-group mb-3">
                                                <x-textm-input type="text" name="lname" required
                                                    :value="old('lname')" autocomplete="lname" />
                                                <x-inputm-label for="name" :value="__('Last Name')" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="text" name="midname" required
                                                    :value="old('midname')" autocomplete="midname" />
                                                <x-inputm-label for="name" :value="__('Middle Name')" />
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="prefix_name">
                                                            <option value="" hidden></option>
                                                        </select>
                                                        <label class="sellabel">Prefix Name<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="sel sel-unactive form-group mb-3 ">
                                                        <select class="sele form-control" name="suffix_name">
                                                            <option value="" hidden></option>
                                                        </select>
                                                        <label class="sellabel">Suffix Name<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <label class="lableic"><span
                                                                class="ri-arrow-down-s-line"></span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <h6>Sex</h6>
                                    <div class="sel sel-unactive form-group mb-3 ">
                                        <select class="sele form-control" name="gender">
                                            <option value="" hidden></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Rather not to Say">Rather not to Say</option>
                                        </select>
                                        <label class="sellabel">Gender<span class="text-danger">*</span>
                                        </label>
                                        <label class="lableic"><span class="ri-arrow-down-s-line"></span></label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <h6>Birthdate</h6>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="sel sel-unactive form-group mb-3">
                                                <select class="form-control selecttt" name="month">
                                                    <option value="" hidden></option>
                                                    @foreach (range(1, 12) as $monthNum)
                                                        @php
                                                            $monthName = date('F', mktime(0, 0, 0, $monthNum, 1));
                                                        @endphp
                                                        <option value="{{ $monthName }}">{{ $monthName }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                <label>Month<span class="text-danger">*</span></label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="number" name="day" required
                                                    :value="old('day')" autocomplete="day" />
                                                <x-inputm-label for="name" :value="__('Day')" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="number" name="year" required
                                                    :value="old('year')" autocomplete="year" />
                                                <x-inputm-label for="name" :value="__('Year')" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <h6>Employment History</h6>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group datee mb-3">
                                                <x-textm-input type="date" name="employment_date" required
                                                    :value="old('employment_date')" aria-placeholder="asd"
                                                    autocomplete="employment_date" />
                                                <x-inputm-label class="datee" for="name" :value="__('Employment Date')"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group datee mb-3">
                                                <x-textm-input type="date" name="date_leave" required
                                                    :value="old('date_leave')" aria-placeholder="asd"
                                                    autocomplete="date_leave" />
                                                <x-inputm-label class="datee" for="name" :value="__('Date of Leaving')"
                                                    required />
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="number" name="year_exp" required
                                                    :value="old('year_exp')" autocomplete="year_exp" />
                                                <x-inputm-label for="name" :value="__('Number of Year Experience')" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Address information --}}
                                <div class="col-md-12 col-sm-12">
                                    <h6>Address Information</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="sel sel-unactive form-group mb-3">
                                                <select class="form-control" name="region" id="region-select">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Region <span
                                                        class="text-danger">*</span></label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="sel sel-unactive form-group mb-3">
                                                <select class="form-control" name="province" id="province-select">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Province <span
                                                        class="text-danger">*</span></label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="sel sel-unactive form-group mb-3">
                                                <select class="form-control" name="city_muni" id="city-select">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">City/Municipality <span
                                                        class="text-danger">*</span></label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="sel sel-unactive form-group mb-3">
                                                <select class="form-control" name="barangay" id="barangay-select">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Barangay <span
                                                        class="text-danger">*</span></label>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">

                                                <textarea class="form-control" required="" id="streetName" name="add_additional_info" rows="2"></textarea>
                                                <label class="dateee">Street Name, Building, House No.
                                                    <span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Contact information --}}
                                <div class="col-md-6 col-sm-6">
                                    <h6>Contact Number</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="text" name="phonenumber" required
                                                    :value="old('phonenumber')" autocomplete="phonenumber" />
                                                <x-inputm-label for="phonenumber" :value="__('Phone Number')" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="text" name="telnumber" required
                                                    :value="old('telnumber')" autocomplete="telnumber" />
                                                <x-inputm-label for="telnumber" :value="__('Telephone Number')" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h6>Email</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="text" name="depedemail" required
                                                    :value="old('depedemail')" autocomplete="depedemail" />
                                                <x-inputm-label for="depedemail" :value="__('DepEd Email')" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <x-textm-input type="text" name="personalemail" required
                                                    :value="old('personalemail')" autocomplete="personalemail" />
                                                <x-inputm-label for="personalemail" :value="__('Personal Email')" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- organization and position --}}
                                <div class="col-md-6 col-sm-12">
                                    <h6>Organizational Identifiers</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="office_name">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Office Name<span class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="business_name">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Business Name<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="dept_name">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Department Name<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="reporting_manager" disabled>
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Reporting Manager<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <h6>Position Identifiers</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="role">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Role<span class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><i class="ri-user-3-fill"></i></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="mode_employment">
                                                </select>
                                                <label class="sellabel">Mode of Employment<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="job_title">
                                                    <option value="" hidden></option>
                                                </select>
                                                <label class="sellabel">Job Title<span class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="sel sel-unactive form-group mb-3 ">
                                                <select class="sele form-control" name="employment_status">
                                                </select>
                                                <label class="sellabel">Employment Status<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <label class="lableic"><span
                                                        class="ri-arrow-down-s-line"></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </x-modal>
</x-app-layout>
