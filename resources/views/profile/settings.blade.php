<x-app-layout>
    @if ($success = $success ?? session('success'))
        <pop-notify autohide variant="success">
            <div class="notification notification-success">
                <div class="notification-content">
                    {{ $success }}
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
            </div>
        </pop-notify>
    @endif
    @if ($info = $info ?? session('info'))
        <pop-notify autohide variant="info">
            <div class="notification notification-info">
                <div class="notification-content">
                    {{ $info }}
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
            </div>
        </pop-notify>
    @endif
    @if ($errors->any())
        @foreach (array_reverse($errors->all()) as $error)
            <pop-notify autohide variant="error">
                <div class="notification notification-error">
                    <div class="notification-content">
                        {{ $error }}
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                </div>
            </pop-notify>
        @endforeach
    @endif



    <div class="container-fluid">


        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="row">
            <div class="col-md-2">
                <div class="fx-profile-add">
                    <div class="row">
                        <div class="team-sticky-bar">
                            <div class="col-12">
                                <div class="fx-card">
                                    <form action="{{ route('updateProfileImg') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="fx-card-content">
                                            <div class="col-sm-12">
                                                <div class="fx-team-detail p-0 text-center">Profile Image</div>
                                            </div>
                                            <div class="fx-team-block-img">
                                                <div class="fx-team-block-detail border-0">
                                                    <div class="profile-img">
                                                        <div class="avatar-preview">
                                                            <div class="t-img" id="imagePreview"
                                                                style="background-image: url('{{ Auth::user()->profile_img == 'defaultimg.jpg' ? '/storage/profile_images/defaultimg.jpg' : '/storage/profile_images/' . Auth::user()->profile_img }}'); background-position: center;">
                                                            </div>
                                                        </div>
                                                        {{-- <span class="tag-label online"></span> --}}
                                                        <div class="avatar-edit">
                                                            <input type="file" id="imageUpload"
                                                                accept=".png, .jpg, .jpeg" name="profile_image">
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="fx-btn ripple-btn color-dark mt-3">Update
                                                        Image</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fx-card team-overview">
                            <div class="fx-card-content fx-card-team team-details">
                                <form action="{{ route('updateUserProfile') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="fx-team-detail">User Profile</div>
                                        </div>
                                        <div class="col-xl-4 col-md-12 col-sm-12">
                                            <h6>Full Name Information</h6>
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="text" name="first_name"
                                                            :error="$errors->has('first_name')" :value="Auth::user()->first_name" autocomplete="firstname"
                                                            placeholder="" />
                                                        <x-inputm-label for="firstname" :value="__('First Name')"
                                                            class="set_label" required />
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="text" name="middle_name"
                                                            :error="$errors->has('middle_name')" :value="Auth::user()->midname"
                                                            autocomplete="middlename" placeholder="" />
                                                        <x-inputm-label for="middlename" :value="__('Middle Name')" />
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="text" name="last_name" :error="$errors->has('last_name')"
                                                            :value="Auth::user()->last_name" autocomplete="lastname" placeholder="" />
                                                        <x-inputm-label for="lastname" :value="__('Last Name')" required />
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('prefix') is-invalid @enderror"
                                                            name="prefix" id="prefix-select" aria-label="">
                                                            @foreach ($prefixes as $prefix)
                                                                <option value="{{ $prefix->prefix_name }}"
                                                                    {{ Auth::user()->personalInfo->prefix_name == $prefix->prefix_name ? 'selected' : '' }}>
                                                                    {{ $prefix->prefix_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Prefix<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('suffix') is-invalid @enderror"
                                                            name="suffix" id="extension-select" aria-label="">
                                                            @foreach ($suffixes as $suffix)
                                                                <option value="{{ $suffix->extension_name }}"
                                                                    {{ Auth::user()->personalInfo->suffix_name == $suffix->extension_name ? 'selected' : '' }}>
                                                                    {{ $suffix->extension_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Suffix<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-12 col-sm-12">
                                            <h6>Employment Details</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="text" name="employee_id"
                                                            :error="$errors->has('employee_id')" :value="Auth::user()->employee_no ?? 'N/A'"
                                                            autocomplete="employee_id" placeholder="" />
                                                        <x-inputm-label for="employee_id" :value="__('Employee ID')" />
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="date" name="date_of_leaving"
                                                            :error="$errors->has('date_of_leaving')" :value="Auth::user()->dateof_leaving"
                                                            autocomplete="dateof_leaving" placeholder="" />
                                                        <x-inputm-label for="years_exp" :value="__('Date of Leaving')" />
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="number" name="years_of_experience"
                                                            required :error="$errors->has('years_of_experience')" :value="Auth::user()->personalInfo->years_of_experience"
                                                            autocomplete="years_exp" placeholder="" />
                                                        <x-inputm-label for="years_exp" :value="__('Years of Experience')" required />
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('mode_of_employment') is-invalid @enderror"
                                                            name="mode_of_employment" aria-label="" required>
                                                            @foreach ($modeofemps as $modeofemp)
                                                                <option value="{{ $modeofemp->mode_of_emp }}"
                                                                    {{ Auth::user()->mode_of_employment == $modeofemp->mode_of_emp ? 'selected' : '' }}>
                                                                    {{ $modeofemp->mode_of_emp }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Mode of Employment<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('employment_status') is-invalid @enderror"
                                                            name="employment_status" aria-label="" required>
                                                            @foreach ($empstats as $empstat)
                                                                <option value="{{ $empstat->empstat_id }}"
                                                                    {{ Auth::user()->employment_status == $empstat->emp_status ? 'selected' : '' }}>
                                                                    {{ $empstat->emp_status }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Employment Status<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 col-sm-12">
                                            <h6>Additional Information</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="text" name="deped_email" required
                                                            :error="$errors->has('deped_email')" :value="Auth::user()->deped_email" autocomplete="email"
                                                            placeholder="" />
                                                        <x-inputm-label for="name" :value="__('DepEd Email')" required />
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('office_name') is-invalid @enderror"
                                                            name="office_name" id="office-select" aria-label=""
                                                            required>
                                                            @foreach ($offices as $office)
                                                                <option value="{{ $office->office_id }}"
                                                                    {{ Auth::user()->org_pos->office->office_id == $office->office_id ? 'selected' : '' }}>
                                                                    {{ $office->office_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Office Name<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('business_name') is-invalid @enderror"
                                                            name="business_name" id="business_select" aria-label=""
                                                            route="{{ route('ProfCheckBusinessCode') }}" required>
                                                            @foreach ($businesses as $business)
                                                                <option value="{{ $business->business_code }}"
                                                                    {{ Auth::user()->org_pos->businessUnit->business_code == $business->business_code ? 'selected' : '' }}>
                                                                    {{ $business->business_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Business Name<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('department_name') is-invalid @enderror"
                                                            name="department_name" id="dept_Name" aria-label="">
                                                            @foreach ($departments as $department)
                                                                <option value="{{ $department->department_id }}"
                                                                    {{ Auth::user()->org_pos->department_id == $department->department_id ? 'selected' : '' }}>
                                                                    {{ $department->department_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label>Department Name<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select
                                                            class="form-control form-select @error('job_title') is-invalid @enderror"
                                                            name="job_title" id="department-select" aria-label="">
                                                            @foreach ($jobtitles as $jobtitle)
                                                                <option value="{{ $jobtitle->job_id }}"
                                                                    {{ Auth::user()->org_pos->jobTitle->job_id == $jobtitle->job_id ? 'selected' : '' }}>
                                                                    {{ $jobtitle->job_title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label class="sellabel">Job Title<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="fx-btn ripple-btn color-dark mb-2">
                                                <i class="ri-save-3-line m-r-10"></i>Apply Changes
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12">
                        <div class="fx-card">
                            <div class="fx-card-content fx-card-team team-details">
                                <div class="row justify-content-center">
                                    <div class="col-sm-12">
                                        <div class="fx-team-detail">Password Settings</div>
                                    </div>
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <form action="{{ route('password.update') }}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="password" name="current_password"
                                                            :error="$errors->updatePassword->has('current_password')" autocomplete="current_pass"
                                                            placeholder="" />
                                                        <x-inputm-label for="current_pass" :value="__('Current Password')" />
                                                        @if ($errors->updatePassword->has('current_password'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->updatePassword->first('current_password') }}
                                                            </div>
                                                        @endif

                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="password" name="password"
                                                            :error="$errors->updatePassword->has('password')" :value="old('password')"
                                                            autocomplete="new_pass" placeholder="" />
                                                        <x-inputm-label for="new_pass" :value="__('New Password')" />
                                                        @if ($errors->updatePassword->has('password'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->updatePassword->first('password') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <x-textm-input type="password" name="password_confirmation"
                                                            :error="$errors->updatePassword->has(
                                                                'password_confirmation',
                                                            )" autocomplete="password_confirmation"
                                                            placeholder="" />
                                                        <x-inputm-label for="password_confirmation"
                                                            :value="__('Confirm New Password')" />
                                                        @if ($errors->updatePassword->has('password_confirmation'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->updatePassword->first('password_confirmation') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="fx-btn ripple-btn color-dark">
                                                    <i class="ri-save-3-line m-r-10"></i>Apply Changes
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12">
                        <div class="fx-card">
                            <div class="fx-card-content fx-card-team team-details">
                                <div class="fx-team-detail p-0">System Mode</div>
                                <div class="row justify-content-center mt-3 fx-tools-info">
                                    <div class="col-6">
                                        <div class="fx-tools-item mode setting-tools-page text-center"
                                            data-fx-mode-tool="light">
                                            <img src="../assets/img/tools/light.png" alt="light"
                                                class="mx-auto d-block" />
                                            <p class="mx-auto">Light</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="fx-tools-item mode setting-tools-page text-center"
                                            data-fx-mode-tool="dark">
                                            <img src="../assets/img/tools/dark.png" alt="dark"
                                                class="mx-auto d-block" />
                                            <p class="mx-auto">Dark</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-team-detail p-0">Header Mode</div>
                                <div class="row justify-content-center mt-4 fx-tools-info">
                                    <div class="col-6">
                                        <div class="fx-tools-item setting-tools-page header text-center"
                                            data-header-mode="light">
                                            <img src="../assets/img/tools/header-light.png" alt="light"
                                                class="mx-auto d-block" />
                                            <p class="mx-auto">light</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="fx-tools-item setting-tools-page header text-center"
                                            data-header-mode="dark">
                                            <img src="../assets/img/tools/header-dark.png" alt="dark"
                                                class="mx-auto d-block" />
                                            <p class="mx-auto">dark</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="fx-card">
                            <div class="fx-card-content fx-card-team team-details">
                                <div class="fx-team-detail p-0">Setting Icon</div>
                                <div class="row  mt-4 fx-tools-info">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="m-0">Show Setting Icon</p>
                                        </div>
                                        <div class="fx-toggle-option" >
                                            <span class="outer-ring1">
                                                <span class="inner-ring1"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fx-card">
                    <div class="fx-card-content fx-card-team team-details">
                        <div class="fx-team-detail p-0">Box Design</div>
                        <div class="row justify-content-center mt-4 fx-tools-info">
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page box text-center"
                                    data-box-mode-tool="default">
                                    <img src="../assets/img/tools/box-0.png" alt="default"
                                        class="mx-auto d-block" />
                                    <p>Default</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page box text-center"
                                    data-box-mode-tool="box-1">
                                    <img src="../assets/img/tools/box-1.png" alt="box-1"
                                        class="mx-auto d-block" />
                                    <p>Box-1</p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page box text-center"
                                    data-box-mode-tool="box-2">
                                    <img src="../assets/img/tools/box-2.png" alt="box-2"
                                        class="mx-auto d-block" />
                                    <p>Box-2</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page box text-center"
                                    data-box-mode-tool="box-3">
                                    <img src="../assets/img/tools/box-3.png" alt="box-3"
                                        class="mx-auto d-block" />
                                    <p>Box-3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fx-card">
                    <div class="fx-card-content fx-card-team team-details">
                        <div class="fx-team-detail p-0">Sidebar Background</div>
                        <div class="row justify-content-center mt-4 fx-tools-info">
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page sidebar text-center"
                                    data-sidebar-mode-tool="light">
                                    <img src="../assets/img/tools/side-light.png" alt="light"
                                        class="mx-auto d-block" />
                                    <p class="mx-auto">light</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page sidebar text-center"
                                    data-sidebar-mode-tool="dark">
                                    <img src="../assets/img/tools/side-dark.png" alt="dark"
                                        class="mx-auto d-block" />
                                    <p class="mx-auto">dark</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page sidebar text-center"
                                    data-sidebar-mode-tool="bg-1">
                                    <img src="../assets/img/tools/side-bg-1.png" alt="background"
                                        class="mx-auto d-block" />
                                    <p class="mx-auto">Bg-1</p>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page sidebar text-center"
                                    data-sidebar-mode-tool="bg-2">
                                    <img src="../assets/img/tools/side-bg-2.png" alt="background"
                                        class="mx-auto d-block" />
                                    <p class="mx-auto">Bg-2</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page sidebar text-center"
                                    data-sidebar-mode-tool="bg-3">
                                    <img src="../assets/img/tools/side-bg-3.png" alt="background"
                                        class="mx-auto d-block" />
                                    <p class="mx-auto">Bg-3</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item setting-tools-page sidebar text-center"
                                    data-sidebar-mode-tool="bg-4">
                                    <img src="../assets/img/tools/side-bg-4.png" alt="background"
                                        class="mx-auto d-block" />
                                    <p class="mx-auto">Bg-4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fx-card">
                    <div class="fx-card-content fx-card-team team-details">
                        <div class="fx-team-detail p-0">Backgrounds</div>
                        <div class="row justify-content-center mt-4 fx-tools-info">
                            <div class="col-6">
                                <div class="fx-tools-item bg setting-tools-page text-center" data-bg-mode="default">
                                    <img src="../assets/img/tools/bg-0.png" alt="default" />
                                    <p>Default</p>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item bg setting-tools-page text-center" data-bg-mode="bg-1">
                                    <img src="../assets/img/tools/bg-1.png" alt="bg-1" />
                                    <p>Bg-1</p>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item bg setting-tools-page text-center" data-bg-mode="bg-2">
                                    <img src="../assets/img/tools/bg-2.png" alt="bg-2" />
                                    <p>Bg-2</p>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item bg setting-tools-page text-center" data-bg-mode="bg-3">
                                    <img src="../assets/img/tools/bg-3.png" alt="bg-3" />
                                    <p>Bg-3</p>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item bg setting-tools-page text-center" data-bg-mode="bg-4">
                                    <img src="../assets/img/tools/bg-4.png" alt="bg-4" />
                                    <p>Bg-4</p>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="fx-tools-item bg setting-tools-page text-center" data-bg-mode="bg-5">
                                    <img src="../assets/img/tools/bg-5.png" alt="bg-5" />
                                    <p>Bg-5</p>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>


    </div>

</x-app-layout>
