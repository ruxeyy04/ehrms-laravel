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
            <div class="col-12 col-md-3 order-md-first order-first">
                <div class="team-sticky-bar">
                    <div class="col-xl-12">
                        <div class="fx-card">
                            <div class="fx-card-content">
                                <div class="fx-team-block-img">
                                    <div class="fx-team-block-detail">
                                        <div class="profile-img">
                                            <img class="t-img"
                                                src="{{ Auth::user()->profile_img == 'defaultimg.jpg' ? '/storage/profile_images/defaultimg.jpg' : '/storage/profile_images/' . Auth::user()->profile_img }}"
                                                alt="team image">
                                            {{-- <span class="tag-label online"></span> --}}
                                        </div>
                                        <h5 class="name">{{ Auth::user()->personalInfo->prefix_name }} @fullName
                                            {{ Auth::user()->personalInfo->suffix_name == 'None' ? '' : Auth::user()->personalInfo->suffix_name }}
                                        </h5>
                                        <p>{{ Auth::user()->role->role_name }}</p>
                                        <div class="fx-settings">
                                            <a href="settings" class="fx-btn-primary">Edit Profile</a>
                                            {{-- <div class="dropdown">
                                              <button class="btn btn-secondary dropdown-toggle" type="button"
                                                  data-bs-toggle="dropdown" aria-expanded="false">
                                                  <i class="mdi mdi-dots-vertical" title="Status"></i>
                                              </button>
                                              <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="#"><span
                                                              class="tag-label online"></span>Online</a></li>
                                                  <li><a class="dropdown-item" href="#"><span
                                                              class="tag-label offline"></span>Offline</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="#"><span
                                                              class="tag-label busy"></span>Busy</a></li>
                                              </ul>
                                          </div> --}}
                                        </div>
                                    </div>
                                    <div class="fx-card-content fx-card-team main-account-details a">
                                        <ul class="fx-team-detail user-information">
                                            <li>
                                                <span>HRID</span>
                                                <p>{{ Auth::user()->hrid }}</p>
                                            </li>
                                            <li>
                                                <span>Employee No</span>
                                                <p>{{ Auth::user()->employee_no ?? 'N/A' }}</p>
                                            </li>

                                            <li>
                                                <span>DepEd Email</span>
                                                <p>{{ Auth::user()->deped_email }}</p>
                                            </li>
                                            <li>
                                                <span>Contact No.</span>
                                                <p>{{ Auth::user()->contact->phone_number }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-9 order-md-last order-last">
                <div class="fx-card">
                    <div class="cd-tabs cd-tabs--vertical margin-top-xl margin-bottom-lg js-cd-tabs">
                        <nav class="cd-tabs__navigation">
                            <ul class="cd-tabs__list">
                                <li>
                                    <a href="#tab-official"
                                        class="cd-tabs__item {{ !session('active_tab') ? 'cd-tabs__item--selected' : '' }}">
                                        <i class="ri-information-line icon icon--xs"></i>
                                        <span>Official Info</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#tab-personal"
                                        class="cd-tabs__item  {{ session('active_tab') === 'personal' ? 'cd-tabs__item--selected' : '' }}">
                                        <i class="ri-file-user-line icon icon--xs"></i>
                                        <span>Personal Info</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#tab-contact"
                                        class="cd-tabs__item {{ session('active_tab') === 'contact' ? 'cd-tabs__item--selected' : '' }}">
                                        <i class="ri-phone-line icon icon--xs"></i>
                                        <span>Contact Info</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#tab-family {{ session('active_tab') === 'family' ? 'cd-tabs__item--selected' : '' }}"
                                        class="cd-tabs__item">
                                        <i class="ri-home-heart-line icon icon--xs"></i>
                                        <span>Family</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#tab-educ" class="cd-tabs__item">
                                        <i class="ri-graduation-cap-line icon icon--xs"></i>
                                        <span>Education</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#tab-work" class="cd-tabs__item">
                                        <i class="ri-briefcase-line icon icon--xs"></i>
                                        <span>Work Experience</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-eligible" class="cd-tabs__item">
                                        <i class="ri-bank-card-2-line icon icon--xs"></i>
                                        <span>Eligibility</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-service" class="cd-tabs__item">
                                        <i class="ri-customer-service-line icon icon--xs"></i>
                                        <span>Service Record</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-leave" class="cd-tabs__item">
                                        <i class="ri-history-line icon icon--xs"></i>
                                        <span>Leave History</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-doc" class="cd-tabs__item">
                                        <i class="ri-file-copy-2-line icon icon--xs"></i>
                                        <span>Documents</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-train" class="cd-tabs__item">
                                        <i class="ri-presentation-line icon icon--xs"></i>
                                        <span>Training</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-awards" class="cd-tabs__item">
                                        <i class="ri-user-star-line icon icon--xs"></i>
                                        <span>Awards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-perform" class="cd-tabs__item">
                                        <i class="ri-dashboard-3-line icon icon--xs"></i>
                                        <span>Performance</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-research" class="cd-tabs__item">
                                        <i class="ri-book-mark-line icon icon--xs"></i>
                                        <span>Researches</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-expert" class="cd-tabs__item">
                                        <i class="ri-dashboard-3-line icon icon--xs"></i>
                                        <span>Expertise</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-affilate" class="cd-tabs__item">
                                        <i class="ri-git-branch-line icon icon--xs"></i>
                                        <span>Affiliation</span>
                                    </a>
                                </li>
                            </ul> <!-- cd-tabs__list -->
                        </nav>

                        <ul class="cd-tabs__panels">
                            <li id="tab-official"
                                class="cd-tabs__panel {{ !session('active_tab') ? 'cd-tabs__panel--selected' : '' }}">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Official Information</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                {{-- <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addGradeSubject"
                                                    id="GradeSubject"><i class="ri-add-circle-line m-r-10"></i>Grade &
                                                    Subject
                                                    Taught</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="fx-team-detail">
                                                <h6>Personal Information</h6>
                                                <ul>
                                                    <li>
                                                        <span>Employee No</span>
                                                        <p>{{ Auth::user()->employee_no ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>HRID</span>
                                                        <p>{{ Auth::user()->hrid }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Prefix Name</span>
                                                        <p>{{ Auth::user()->personalInfo->prefix_name }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Firstname</span>
                                                        <p>{{ Auth::user()->first_name }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Middlename</span>
                                                        <p>{{ Auth::user()->midname ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Lastname</span>
                                                        <p>{{ Auth::user()->last_name }}</p>
                                                    </li>
                                                    <li><span>Suffix Name</span>
                                                        <p>{{ Auth::user()->personalInfo->suffix_name != 'None' ? Auth::user()->personalInfo->suffix_name : 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li><span>DepEd Email</span>
                                                        <p>{{ Auth::user()->deped_email }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 info-c">
                                            <div class="fx-team-detail">
                                                <h6>Job Details</h6>
                                                <ul>
                                                    <li>
                                                        <span>Salary Grade & Step</span>
                                                        <p>{{ Auth::user()->salary ? Auth::user()->salary->salary_grade . ' & ' . Auth::user()->salary->salary_step : 'N/A' }}
                                                        </p>

                                                    </li>
                                                    <li>
                                                        <span>Role</span>
                                                        <p>{{ Auth::user()->role->role_name }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Business Unit</span>
                                                        <p>{{ Auth::user()->org_pos->businessUnit->business_name ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Department</span>
                                                        <p>{{ Auth::user()->org_pos->department->department_name ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Reporting Manager</span>
                                                        <p>N/A</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="fx-team-detail">
                                                <h6>Employment History</h6>
                                                <ul>
                                                    <li>
                                                        <span>Item No.</span>
                                                        <p>N/A</p>
                                                    </li>
                                                    <li>
                                                        <span>Plantilla Assignment</span>
                                                        <p>N/A</p>
                                                    </li>
                                                    <li>
                                                        <span>Position</span>
                                                        <p>{{ Auth::user()->org_pos->jobTitle->job_title }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Employment Status</span>
                                                        <p>{{ Auth::user()->employment_status }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Date Joined</span>
                                                        <p>{{ date('F j, Y', strtotime(Auth::user()->employment_date)) }}
                                                        </p>

                                                    </li>
                                                    <li>
                                                        <span>Last Promotion Date</span>
                                                        <p>N/A</p>
                                                    </li>
                                                    <li>
                                                        <span>Years of Experience</span>
                                                        <p>{{ Auth::user()->personalInfo->years_of_experience }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-personal"
                                class="cd-tabs__panel  {{ session('active_tab') === 'personal' ? 'cd-tabs__panel--selected' : '' }}">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Personal Information</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#editPersonalinfo"
                                                    id="edit_personal"><i
                                                        class="ri-add-circle-line m-r-10"></i>Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="fx-team-detail">
                                                <h6>Biographical Information</h6>
                                                <ul>
                                                    <li>
                                                        <span>Gender</span>
                                                        <p>{{ Auth::user()->personalInfo->gender }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Citizenship</span>
                                                        <p>{{ Auth::user()->personalInfo->citizenship }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Dual Citizenship</span>
                                                        <p>{{ Auth::user()->personalInfo->dual_citizenship ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Country</span>
                                                        <p>{{ Auth::user()->addressInfo->country }}</p>
                                                    </li>

                                                    <li>
                                                        <span>Date of Birth</span>
                                                        <p>{{ Auth::user()->personalInfo->birthdate }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="fx-team-detail">
                                                <h6>Vital Statistics</h6>
                                                <ul>
                                                    <li>
                                                        <span>Civil Status</span>
                                                        <p>{{ Auth::user()->personalInfo->civil_status ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Blood Type</span>
                                                        <p>{{ Auth::user()->personalInfo->blood_type ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Height (m)</span>
                                                        <p>{{ Auth::user()->personalInfo->height }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Weight (kg)</span>
                                                        <p>{{ Auth::user()->personalInfo->weight ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Place of Birth</span>
                                                        <p>{{ Auth::user()->personalInfo->birthplace ?? 'N/A' }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="fx-team-detail">
                                                <h6>Government Identification</h6>
                                                <ul>
                                                    <li>
                                                        <span>PRC No.</span>
                                                        <p>{{ Auth::user()->governmentInfo->prc_no ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>TIN</span>
                                                        <p>{{ Auth::user()->governmentInfo->tin_no ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>GSIS BP No.</span>
                                                        <p>{{ Auth::user()->governmentInfo->gsis_bp_no ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>PAG-IBIG No.</span>
                                                        <p>{{ Auth::user()->governmentInfo->pag_ibig_id ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>SSS No.</span>
                                                        <p>{{ Auth::user()->governmentInfo->sss_id ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Philhealth No.</span>
                                                        <p>{{ Auth::user()->governmentInfo->philhealth_id ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>GSIS No.</span>
                                                        <p>{{ Auth::user()->governmentInfo->gsis_id ?? 'N/A' }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-contact"
                                class="cd-tabs__panel {{ session('active_tab') === 'contact' ? 'cd-tabs__panel--selected' : '' }}">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Contact Information</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#editContactinfo"
                                                    id="edit_personal"><i
                                                        class="ri-add-circle-line m-r-10"></i>Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="fx-team-detail">
                                                        <h6>Contact Details</h6>
                                                        <ul>
                                                            <li>
                                                                <span>Personal Email</span>
                                                                <p>{{ Auth::user()->contact->personal_email }}</p>
                                                            </li>
                                                            <li>
                                                                <span>Telephone Number</span>
                                                                <p>{{ Auth::user()->contact->tel_num ?? 'N/A' }}</p>
                                                            </li>
                                                            <li>
                                                                <span>Mobile Number</span>
                                                                <p>{{ Auth::user()->contact->phone_number }}</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="fx-team-detail">
                                                        <h6>Contact Person in Case of Emergency</h6>
                                                        <ul>
                                                            <li>
                                                                <span>Contact Name</span>
                                                                <p>{{ Auth::user()->contact->emergency_contact_name ?? 'N/A' }}
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <span>Contact No.</span>
                                                                <p>{{ Auth::user()->contact->emergency_contact_no ?? 'N/A' }}
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <span>Email</span>
                                                                <p>{{ Auth::user()->contact->emergency_email ?? 'N/A' }}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="fx-team-detail">
                                                <h6>Permamnent Address</h6>
                                                <ul>
                                                    <li>
                                                        <span>House/Block/Lot No.</span>
                                                        <p>{{ Auth::user()->addressInfo->house_block_no ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Street/Purok Address</span>
                                                        <p>{{ Auth::user()->addressInfo->street_name ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Subdivision/Village</span>
                                                        <p>{{ Auth::user()->addressInfo->subdivision_village ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Barangay</span>
                                                        <p>{{ Auth::user()->addressInfo->barangay }}</p>
                                                    </li>
                                                    <li>
                                                        <span>City/Municipality</span>
                                                        <p>{{ Auth::user()->addressInfo->city }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Province</span>
                                                        <p>{{ Auth::user()->addressInfo->province }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Region</span>
                                                        <p>{{ Auth::user()->addressInfo->region }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Zip Code</span>
                                                        <p>{{ Auth::user()->addressInfo->zipcode ?? 'N/A' }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="fx-team-detail">
                                                <h6>Residential Address</h6>
                                                <ul>
                                                    <li>
                                                        <span>House/Block/Lot No.</span>
                                                        <p>{{ Auth::user()->residentialInfo->house_block_no ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Street/Purok Address</span>
                                                        <p>{{ Auth::user()->residentialInfo->street_name ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Subdivision/Village</span>
                                                        <p>{{ Auth::user()->residentialInfo->subdivision_village ?? 'N/A' }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Barangay</span>
                                                        <p>{{ Auth::user()->residentialInfo->barangay ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>City/Municipality</span>
                                                        <p>{{ Auth::user()->residentialInfo->city ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Province</span>
                                                        <p>{{ Auth::user()->residentialInfo->province ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Region</span>
                                                        <p>{{ Auth::user()->residentialInfo->region ?? 'N/A' }}</p>
                                                    </li>
                                                    <li>
                                                        <span>Zip Code</span>
                                                        <p>{{ Auth::user()->residentialInfo->zipcode ?? 'N/A' }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-family {{ session('active_tab') === 'family' ? 'cd-tabs__panel--selected' : '' }}"
                                class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Family</h3>
                                            <div class="header-tools col-lg-4 col-md-12 mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addFamilyInfo"><i
                                                        class="ri-add-circle-line m-r-10"></i>Family</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="family-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">FULLNAME</th>
                                                    <th class="table__th sorting">RELATIONSHIP</th>
                                                    <th class="table__th sorting">DATE OF BIRTH</th>
                                                    <th class="table__th sorting">DECEASED</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">
                                                @foreach ($families as $family)
                                                    <tr class="table-row">

                                                        <td data-column="Full Name" class="table-row__td">
                                                            {{ $family->first_name }} {{ $family->last_name }}
                                                        </td>

                                                        <td data-column="Relationship" class="table-row__td">
                                                            {{ $family->relationship }}
                                                        </td>
                                                        <td data-column="Date of Birth" class="table-row__td">
                                                            {{ date('F j, Y', strtotime($family->birthdate)) }}
                                                        </td>
                                                        <td data-column="Deceased" class="table-row__td">
                                                            {{ $family->deceased }}
                                                        </td>
                                                        <td class="table-row__td">
                                                            <div class="d-flex justify-content-center">
                                                                <button type="button" class="btn btn-outline-success"
                                                                
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#viewFamily{{ $family->id }}"><i
                                                                        class="ri-information-line"></i></button>
                                                                <button type="button"
                                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" data-display="static">
                                                                    <span class="sr-only"><i
                                                                            class="ri-settings-3-line"></i></span>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-educ" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Education</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addEmployee"
                                                    id="edit_personal"><i
                                                        class="ri-add-circle-line m-r-10"></i>Education</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="education-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">EDUCATIONAL LEVEL</th>
                                                    <th class="table__th sorting">SCHOOL NAME</th>
                                                    <th class="table__th sorting">COURSE</th>
                                                    <th class="table__th sorting">HIGHEST GRADE</th>
                                                    <th class="table__th sorting">FROM YEAR</th>
                                                    <th class="table__th sorting">TO YEAR</th>
                                                    <th class="table__th sorting">YEAR GRADUATED</th>
                                                    <th class="table__th sorting">SCHOLARSHIP/ACADEMIC</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-work" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Work Experience</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addWorkExp"
                                                    id="edit_personal"><i class="ri-add-circle-line m-r-10"></i>Work
                                                    Experience</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="workexp-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">COMPANY NAME</th>
                                                    <th class="table__th sorting">POSITION TITLE</th>
                                                    <th class="table__th sorting">FROM</th>
                                                    <th class="table__th sorting">TO</th>
                                                    <th class="table__th sorting">GOVERNMENT SERVICE?</th>
                                                    <th class="table__th sorting">MONTHLY SALARY</th>
                                                    <th class="table__th sorting">SALARY GRADE</th>
                                                    <th class="table__th sorting">STEP</th>
                                                    <th class="table__th sorting">EMPLOYMENT STATUS</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-eligible" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Eligibility</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addEligibility"
                                                    id="edit_personal"><i
                                                        class="ri-add-circle-line m-r-10"></i>Eligibility</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">TITLE</th>
                                                    <th class="table__th sorting">RATING</th>
                                                    <th class="table__th sorting">DATE OF EXAM</th>
                                                    <th class="table__th sorting">PLACE OF EXAM</th>
                                                    <th class="table__th sorting">LICENSE NO.</th>
                                                    <th class="table__th sorting">DATE OF RELEASE</th>
                                                    <th class="table__th sorting">ISSUING AGENCY</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-service" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-12 col-md-12">Service Record</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">SERVICE FROM</th>
                                                    <th class="table__th sorting">SERVICE TO</th>
                                                    <th class="table__th sorting">DESIGNATION</th>
                                                    <th class="table__th sorting">APPOINTMENT STATUS</th>
                                                    <th class="table__th sorting">SALARY</th>
                                                    <th class="table__th sorting">PLACE OF ASSIGNMENT</th>
                                                    <th class="table__th sorting">BRANCH</th>
                                                    <th class="table__th sorting">LEAVE FROM</th>
                                                    <th class="table__th sorting">LEAVE TO</th>
                                                    <th class="table__th sorting">SEPARATION DATE</th>
                                                    <th class="table__th sorting">SEPARATION COURSE</th>
                                                    <th class="table__th sorting">REMARKS</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-leave" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-12 col-md-12">Leave History</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">CREDITS FROM</th>
                                                    <th class="table__th sorting">CREDITS TO</th>
                                                    <th class="table__th sorting">NO. OF DAYS</th>
                                                    <th class="table__th sorting">PARTICULARS</th>
                                                    <th class="table__th sorting">TYPE</th>
                                                    <th class="table__th sorting">BALANCE</th>
                                                    <th class="table__th sorting">REMARKS</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-doc" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-12 col-md-12">Documents</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">TITLE</th>
                                                    <th class="table__th sorting">FILENAME</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-train" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-12 col-md-12">Training</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">TRAINING TITLE</th>
                                                    <th class="table__th sorting">TRAINING VENUE</th>
                                                    <th class="table__th sorting">START DATE</th>
                                                    <th class="table__th sorting">END DATE</th>
                                                    <th class="table__th sorting">EDUCATION LEVEL</th>
                                                    <th class="table__th sorting">SUBJECT AREA</th>
                                                    <th class="table__th sorting">CLASSIFICATION OF ACTIVITY</th>
                                                    <th class="table__th sorting">NATURE OF ACTIVITY</th>
                                                    <th class="table__th sorting">TRAINING LEVEL</th>
                                                    <th class="table__th sorting">SPONSORING GROUP</th>
                                                    <th class="table__th sorting">NUMBER OF HOURS</th>
                                                    <th class="table__th sorting">CONDUCTED BY</th>
                                                    <th class="table__th sorting">FUNDED BY</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-awards" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-12 col-md-12">Awards</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">AWARD TITLE</th>
                                                    <th class="table__th sorting">CATEGORY</th>
                                                    <th class="table__th sorting">SCHOOL YEAR</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-perform" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-12 col-md-12">Performance</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">CORE BEHAVIORAL COMPETENCIES</th>
                                                    <th class="table__th sorting">OTHER COMPETENCIES</th>
                                                    <th class="table__th sorting">KRA</th>
                                                    <th class="table__th sorting">YEAR</th>
                                                    <th class="table__th sorting">ADJECTIVAL RATING</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-research" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Researches</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addResearch"
                                                    id="edit_personal"><i
                                                        class="ri-add-circle-line m-r-10"></i>Researches</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">TITLE OF RESEARCH</th>
                                                    <th class="table__th sorting">YEAR CONDUCTED</th>
                                                    <th class="table__th sorting">CATEGORY/LEVEL</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-expert" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Expertise</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addExpertise"
                                                    id="edit_personal"><i
                                                        class="ri-add-circle-line m-r-10"></i>Expertise</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">EXPERTISE</th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-affilate" class="cd-tabs__panel">
                                <div class="fx-card-header mb-3">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h3 class="col-lg-8 col-md-12">Affilation</h3>
                                            <div class="header-tools col-lg-4 col-md-12 text-lg-end mt-3 mt-lg-0">
                                                <button type="button" class="fx-btn ripple-btn color-dark"
                                                    data-bs-toggle="modal" data-bs-target="#addExpertise"
                                                    id="edit_personal"><i
                                                        class="ri-add-circle-line m-r-10"></i>Affilation</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="container-fluid">
                                        <table class="table" id="eligibility-table-list">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th class="table__th sorting">PROFESSIONAL ORGANIZATION AFFILIATION
                                                    </th>
                                                    <th class="table__th "></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>

                        </ul> <!-- cd-tabs__panels -->
                    </div> <!-- cd-tabs -->

                    @include('layouts.account-modal')
                </div>
            </div>
        </div>

    </div>
@foreach ($families as $family)
<div class="modal fade" id="viewFamily{{ $family->id }}" tabindex="-1" aria-labelledby="viewFamilyLabel{{ $family->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewFamilyLabel{{ $family->id }}">Family Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body" style="background: #f8fafb">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="fx-card">
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12">
                                            <div class="fx-team-detail">Family Member Details</div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->relationship }}" readonly>
                                                        <label>Relationship Type</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->first_name }}" readonly>
                                                        <label for="first_name" class="set_label">
                                                            First Name</label>
                                                        </label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->middle_name }}" readonly>
                                                        <label for="middle_name" class="set_label">
                                                            Middle Name</label>
                                                        </label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->last_name }}" readonly>
                                                        <label for="last_name" class="set_label">
                                                            Last Name</label>
                                                        </label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->extension }}" readonly>
                                                        <label>Extension Type</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->deceased }}" readonly>
                                                        <label>Deceased</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fx-card">
                                <div class="fx-card-content fx-card-team team-details">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12">
                                            <div class="fx-team-detail">Occupation Details</div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->occupation }}" readonly>
                                                        <label>Occupation</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->employer_name }}" readonly>
                                                        <label for="employer_name" class="set_label">
                                                            Employer Name</label>
                                                        </label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->business_add }}" readonly>
                                                        <label for="business_add" class="set_label">
                                                            Business Address</label>
                                                        </label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ $family->telephone_number }}" readonly>
                                                        <label for="telephone_number" class="set_label">
                                                            Telephone No.</label>
                                                        </label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" value="{{ date('F j, Y', strtotime($family->birthdate)) }}" readonly>
                                                        <label for="birthdate" class="set_label">
                                                            Date of Birth</label>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
@endforeach
    <!-- Modal -->
    <div class="modal fade" id="editPersonalinfo" tabindex="-1" aria-labelledby="editPersonalinfoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editPersonalinfoLabel">Edit Personal Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('updatePersonalInfo') }}" method="post">
                    @csrf
                    @method('put')

                    <div class="modal-body" style="background: #f8fafb">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="fx-card">
                                            <div class="fx-card-content fx-card-team team-details">
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-12">
                                                        <div class="fx-team-detail">Biographical Information</div>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-3">
                                                                    <select
                                                                        class="form-control form-select @error('gender') is-invalid @enderror"
                                                                        name="gender" id="gender-select"
                                                                        aria-label="">
                                                                        <option value="Male"
                                                                            {{ Auth::user()->personalInfo->gender == 'Male' ? 'selected' : '' }}>
                                                                            Male</option>
                                                                        <option value="Female"
                                                                            {{ Auth::user()->personalInfo->gender == 'Female' ? 'selected' : '' }}>
                                                                            Female</option>
                                                                        <option value="Rather not to Say"
                                                                            {{ Auth::user()->personalInfo->gender == 'Rather not to Say' ? 'selected' : '' }}>
                                                                            Rather not to Say
                                                                        </option>
                                                                    </select>
                                                                    <label class="sellabel">Gender <span
                                                                            class="text-danger">*</span></label>
                                                                </div>

                                                                <div class="form-floating mb-3">
                                                                    <select
                                                                        class="form-control form-select @error('citizenship') is-invalid @enderror"
                                                                        name="citizenship" id="citizenship-select"
                                                                        aria-label="">
                                                                        <option value="Dual Citizenship"
                                                                            {{ Auth::user()->personalInfo->citizenship == 'Dual Citizenship' ? 'selected' : '' }}>
                                                                            Dual Citizenship</option>
                                                                        <option value="Filipino"
                                                                            {{ Auth::user()->personalInfo->citizenship == 'Filipino' ? 'selected' : '' }}>
                                                                            Filipino</option>
                                                                    </select>
                                                                    <label class="sellabel">Citizenship <span
                                                                            class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <select
                                                                        class="form-control form-select @error('dual_citizenship') is-invalid @enderror"
                                                                        name="dual_citizenship"
                                                                        id="dual_citizenship-select" aria-label="">
                                                                        <option value="N/A"
                                                                            {{ Auth::user()->personalInfo->dual_citizenship == 'N/A' ? 'selected' : '' }}>
                                                                            - Select Dual Citizenship -</option>
                                                                        <option value="by Birth"
                                                                            {{ Auth::user()->personalInfo->dual_citizenship == 'by Birth' ? 'selected' : '' }}>
                                                                            by Birth</option>
                                                                        <option value="by Naturalization"
                                                                            {{ Auth::user()->personalInfo->dual_citizenship == 'by Naturalization' ? 'selected' : '' }}>
                                                                            by Naturalization
                                                                        </option>
                                                                    </select>
                                                                    <label class="sellabel">If Dual Citizenship</label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input
                                                                        class="form-control @error('country') is-invalid @enderror"
                                                                        type="text" name="country"
                                                                        value="{{ Auth::user()->addressInfo->country }}"
                                                                        autocomplete="country" placeholder="">
                                                                    <label for="country" class="set_label">
                                                                        Country <span class="text-danger"> *</span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input
                                                                        class="form-control @error('birthdate') is-invalid @enderror"
                                                                        type="date" name="birthdate"
                                                                        autocomplete="birthdate" placeholder=""
                                                                        value="{{ Auth::user()->personalInfo->birthdate }}">
                                                                    <label for="birthdate">
                                                                        Date of Birth <span class="text-danger">
                                                                            *</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="fx-card">
                                            <div class="fx-card-content fx-card-team team-details">
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-12">
                                                        <div class="fx-team-detail">Government Identification</div>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input
                                                                                class="form-control @error('prc_no') is-invalid @enderror"
                                                                                type="text" name="prc_no"
                                                                                placeholder=""
                                                                                value="{{ Auth::user()->governmentInfo->prc_no ?? 'N/A' }}">
                                                                            <label for="prc_no">PRC No.</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input
                                                                                class="form-control @error('tin_no') is-invalid @enderror"
                                                                                type="text" name="tin_no"
                                                                                placeholder=""
                                                                                value="{{ Auth::user()->governmentInfo->tin_no ?? 'N/A' }}">
                                                                            <label for="tin_no">TIN No.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input
                                                                                class="form-control @error('gsisbp_no') is-invalid @enderror"
                                                                                type="text" name="gsisbp_no"
                                                                                placeholder=""
                                                                                value="{{ Auth::user()->governmentInfo->gsis_bp_no ?? 'N/A' }}">
                                                                            <label for="gsisbp_no">GSIS BP No.</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input
                                                                                class="form-control @error('gsis_no') is-invalid @enderror"
                                                                                type="text" name="gsis_no"
                                                                                placeholder=""
                                                                                value="{{ Auth::user()->governmentInfo->gsis_id ?? 'N/A' }}">
                                                                            <label for="gsis_no">GSIS No.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input
                                                                                class="form-control @error('pagibig_no') is-invalid @enderror"
                                                                                type="text" name="pagibig_no"
                                                                                placeholder=""
                                                                                value="{{ Auth::user()->governmentInfo->pag_ibig_id ?? 'N/A' }}">
                                                                            <label for="pagibig_no">Pag-Ibig
                                                                                No.</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input
                                                                                class="form-control @error('philhealth_no') is-invalid @enderror"
                                                                                type="text" name="philhealth_no"
                                                                                placeholder=""
                                                                                value="{{ Auth::user()->governmentInfo->philhealth_id ?? 'N/A' }}">
                                                                            <label for="philhealth_no">PhilHealth
                                                                                No.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="form-floating mb-3">
                                                                    <input
                                                                        class="form-control @error('sss_no') is-invalid @enderror"
                                                                        type="text" name="sss_no" placeholder=""
                                                                        value="{{ Auth::user()->governmentInfo->sss_id ?? 'N/A' }}">
                                                                    <label for="sss_no">SSS No.</label>
                                                                </div>


                                                                <div class="form-floating mb-3">
                                                                    <input
                                                                        class="form-control @error('agency_employee_no') is-invalid @enderror"
                                                                        type="text" name="agency_employee_no"
                                                                        placeholder=""
                                                                        value="{{ Auth::user()->governmentInfo->agency_employee_no ?? 'N/A' }}">
                                                                    <label for="agency_employee_no">Agency Employee
                                                                        No.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="fx-card">
                                            <div class="fx-card-content fx-card-team team-details">
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-12">
                                                        <div class="fx-team-detail">Vital Statistics</div>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-3">
                                                                    <select
                                                                        class="form-control form-select @error('civil_status') is-invalid @enderror"
                                                                        name="civil_status" id="civil_status-select"
                                                                        aria-label="">
                                                                        <option value="N/A"
                                                                            {{ Auth::user()->personalInfo->civil_status == 'N/A' ? 'selected' : '' }}>
                                                                            - Select Civil Status -</option>
                                                                        <option value="Annulled"
                                                                            {{ Auth::user()->personalInfo->civil_status == 'Annulled' ? 'selected' : '' }}>
                                                                            Annulled</option>
                                                                        <option value="Divorced"
                                                                            {{ Auth::user()->personalInfo->civil_status == 'Divorced' ? 'selected' : '' }}>
                                                                            Divorced</option>
                                                                        <option value="Legally Separated"
                                                                            {{ Auth::user()->personalInfo->civil_status == 'Legally Separated' ? 'selected' : '' }}>
                                                                            Legally Separated
                                                                        </option>
                                                                        <option value="Married"
                                                                            {{ Auth::user()->personalInfo->civil_status == 'Married' ? 'selected' : '' }}>
                                                                            Married
                                                                        </option>
                                                                        <option value="Single"
                                                                            {{ Auth::user()->personalInfo->civil_status == 'Single' ? 'selected' : '' }}>
                                                                            Single</option>
                                                                        <option value="Widow/Widower"
                                                                            {{ Auth::user()->personalInfo->civil_status == 'Widow/Widower' ? 'selected' : '' }}>
                                                                            Widow/Widower
                                                                        </option>

                                                                    </select>
                                                                    <label class="sellabel">Civil Status<span
                                                                            class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <select
                                                                        class="form-control form-select @error('blood_type') is-invalid @enderror"
                                                                        name="blood_type" id="blood_type-select"
                                                                        aria-label="">
                                                                        <option value="O+"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'O+' ? 'selected' : '' }}>
                                                                            O+</option>
                                                                        <option value="O-"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'O-' ? 'selected' : '' }}>
                                                                            O-</option>
                                                                        <option value="A+"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'A+' ? 'selected' : '' }}>
                                                                            A+</option>
                                                                        <option value="A-"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'A-' ? 'selected' : '' }}>
                                                                            A-</option>
                                                                        <option value="B+"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'B+' ? 'selected' : '' }}>
                                                                            B+</option>
                                                                        <option value="B-"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'B-' ? 'selected' : '' }}>
                                                                            B-</option>
                                                                        <option value="AB+"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'AB+' ? 'selected' : '' }}>
                                                                            AB+</option>
                                                                        <option value="AB-"
                                                                            {{ Auth::user()->personalInfo->blood_type == 'AB-' ? 'selected' : '' }}>
                                                                            AB-</option>


                                                                    </select>
                                                                    <label class="sellabel">Blood Type<span
                                                                            class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input
                                                                        class="form-control @error('height') is-invalid @enderror"
                                                                        type="text" name="height" placeholder=""
                                                                        value="{{ Auth::user()->personalInfo->height ?? 'N/A' }}">
                                                                    <label for="height">
                                                                        Height <small style="font-weight: normal;">(in
                                                                            Meters)</small>
                                                                    </label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input
                                                                        class="form-control @error('weight') is-invalid @enderror"
                                                                        type="text" name="weight" placeholder=""
                                                                        value="{{ Auth::user()->personalInfo->weight ?? 'N/A' }}">
                                                                    <label for="weight">
                                                                        Weight <small style="font-weight: normal;">(in
                                                                            Kilograms)</small>
                                                                    </label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input
                                                                        class="form-control @error('birthplace') is-invalid @enderror"
                                                                        type="text" name="birthplace"
                                                                        placeholder=""
                                                                        value="{{ Auth::user()->personalInfo->birthplace ?? 'N/A' }}">
                                                                    <label for="birthplace">
                                                                        Place of Birth
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editContactinfo" tabindex="-1" aria-labelledby="editContactinfoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editContactinfoLabel">Edit Contact Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('updateContactInfo') }}" method="post">
                    @csrf
                    @method('put')

                    <div class="modal-body" style="background: #f8fafb">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="fx-card">
                                        <div class="fx-card-content fx-card-team team-details">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-12">
                                                    <div class="fx-team-detail">Contact Details</div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3">
                                                                <input
                                                                    class="form-control @error('personal_email') is-invalid @enderror"
                                                                    type="email" name="personal_email"
                                                                    value="{{ Auth::user()->contact->personal_email }}"
                                                                    autocomplete="personal_email" placeholder=""
                                                                    required>
                                                                <label for="personal_email" class="set_label">
                                                                    Personal Email
                                                                    <span class="text-danger"> *</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input
                                                                    class="form-control @error('telephone_number') is-invalid @enderror"
                                                                    type="text" name="telephone_number"
                                                                    value="{{ Auth::user()->contact->tel_num }}"
                                                                    autocomplete="telephone_number"
                                                                    data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;"
                                                                    placeholder="">
                                                                <label for="telephone_number" class="set_label">
                                                                    Telephone Number
                                                                </label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input
                                                                    class="form-control @error('mobile_number') is-invalid @enderror"
                                                                    type="text" name="mobile_number"
                                                                    value="{{ Auth::user()->contact->phone_number }}"
                                                                    autocomplete="mobile_number"
                                                                    data-inputmask="&quot;mask&quot;: &quot;9999-999-9999&quot;"
                                                                    placeholder="" required>
                                                                <label for="mobile_number" class="set_label">
                                                                    Mobile Number
                                                                    <span class="text-danger"> *</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fx-card">
                                        <div class="fx-card-content fx-card-team team-details">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-12">
                                                    <div class="fx-team-detail">Contact Person in Case of
                                                        Emergency</div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3">
                                                                <input
                                                                    class="form-control @error('contact_name') is-invalid @enderror"
                                                                    type="text" name="contact_name"
                                                                    value="{{ Auth::user()->contact->emergency_contact_name }}"
                                                                    autocomplete="contact_name" placeholder=""
                                                                    required>
                                                                <label for="contact_name" class="set_label">
                                                                    Contact Name
                                                                    <span class="text-danger"> *</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input
                                                                    class="form-control @error('contact_number') is-invalid @enderror"
                                                                    type="text" name="contact_number"
                                                                    value="{{ Auth::user()->contact->emergency_contact_no }}"
                                                                    autocomplete="contact_number" placeholder=""
                                                                    required>
                                                                <label for="contact_number" class="set_label">
                                                                    Contact Number
                                                                    <span class="text-danger"> *</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input
                                                                    class="form-control @error('emergency_email') is-invalid @enderror"
                                                                    type="text" name="emergency_email"
                                                                    value="{{ Auth::user()->contact->emergency_email }}"
                                                                    autocomplete="emergency_email" placeholder=""
                                                                    required>
                                                                <label for="emergency_email" class="set_label">
                                                                    Email
                                                                    <span class="text-danger"> *</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fx-card">
                                    <div class="fx-card-content fx-card-team team-details">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-12">
                                                <div class="fx-team-detail">Permamnent Address</div>
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('region') is-invalid @enderror"
                                                        id="region-select" name="region" aria-label="" required>
                                                    </select>
                                                    <label class="sellabel">Region <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('province') is-invalid @enderror"
                                                        id="province" name="province" aria-label="" required>
                                                    </select>
                                                    <label class="sellabel">Province <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('city') is-invalid @enderror"
                                                        id="city" name="city" aria-label="" required>
                                                    </select>
                                                    <label class="sellabel">City/Municipality <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('barangay') is-invalid @enderror"
                                                        id="barangay" name="barangay" aria-label="" required>
                                                    </select>
                                                    <label class="sellabel">Barangay <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input
                                                        class="form-control @error('house_block_no') is-invalid @enderror"
                                                        type="text" name="house_block_no"
                                                        value="{{ Auth::user()->addressInfo->house_block_no }}"
                                                        autocomplete="house_block_no" placeholder="">
                                                    <label for="house_block_no" class="set_label">
                                                        House/Block/Lot No.
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input
                                                        class="form-control @error('street_name') is-invalid @enderror"
                                                        type="text" name="street_name"
                                                        value="{{ Auth::user()->addressInfo->street_name }}"
                                                        autocomplete="street_name" placeholder="" required>
                                                    <label for="street_name" class="set_label">
                                                        Street/Purok Address
                                                        <span class="text-danger"> *</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input
                                                        class="form-control @error('subdivision_village') is-invalid @enderror"
                                                        type="text" name="subdivision_village"
                                                        value="{{ Auth::user()->addressInfo->subdivision_village }}"
                                                        autocomplete="subdivision_village" placeholder="">
                                                    <label for="subdivision_village" class="set_label">
                                                        Subdivision/Village
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control @error('zipcode') is-invalid @enderror"
                                                        type="text" name="zipcode"
                                                        value="{{ Auth::user()->addressInfo->zipcode }}"
                                                        autocomplete="zipcode" placeholder="" required>
                                                    <label for="zipcode" class="set_label">
                                                        Zip Code
                                                        <span class="text-danger"> *</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fx-card">
                                    <div class="fx-card-content fx-card-team team-details">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-12">
                                                <div class="fx-team-detail">Residential Address</div>
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('residential_region') is-invalid @enderror"
                                                        id="region-select2" name="residential_region" aria-label=""
                                                        required>
                                                    </select>
                                                    <label class="sellabel">Region <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('residential_province') is-invalid @enderror"
                                                        id="province2" name="residential_province" aria-label=""
                                                        required>
                                                    </select>
                                                    <label class="sellabel">Province <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('residential_city') is-invalid @enderror"
                                                        id="city2" name="residential_city" aria-label=""
                                                        required>
                                                    </select>
                                                    <label class="sellabel">City/Municipality <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-control form-select @error('residential_barangay') is-invalid @enderror"
                                                        id="barangay2" name="residential_barangay" aria-label=""
                                                        required>
                                                    </select>
                                                    <label class="sellabel">Barangay <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input
                                                        class="form-control @error('residential_house_block_no') is-invalid @enderror"
                                                        type="text" name="residential_house_block_no"
                                                        value="{{ Auth::user()->residentialInfo->house_block_no }}"
                                                        autocomplete="residential_house_block_no" placeholder="">
                                                    <label for="house_block_no" class="set_label">
                                                        House/Block/Lot No.
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input
                                                        class="form-control @error('residential_street_name') is-invalid @enderror"
                                                        type="text" name="residential_street_name"
                                                        value="{{ Auth::user()->addressInfo->street_name }}"
                                                        autocomplete="residential_street_name" placeholder=""
                                                        required>
                                                    <label for="residential_street_name" class="set_label">
                                                        Street/Purok Address
                                                        <span class="text-danger"> *</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input
                                                        class="form-control @error('residential_subdivision_village') is-invalid @enderror"
                                                        type="text" name="residential_subdivision_village"
                                                        value="{{ Auth::user()->residentialInfo->subdivision_village }}"
                                                        autocomplete="residential_subdivision_village" placeholder="">
                                                    <label for="residential_subdivision_village" class="set_label">
                                                        Subdivision/Village
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input
                                                        class="form-control @error('residential_zipcode') is-invalid @enderror"
                                                        type="text" name="residential_zipcode"
                                                        value="{{ Auth::user()->residentialInfo->zipcode }}"
                                                        autocomplete="residential_zipcode" placeholder="" required>
                                                    <label for="residential_zipcode" class="set_label">
                                                        Zip Code
                                                        <span class="text-danger"> *</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addFamilyInfo" tabindex="-1" aria-labelledby="addFamilyInfoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addFamilyInfoLabel">Add Family Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('addFamily') }}" method="post">
                    @csrf

                    <div class="modal-body" style="background: #f8fafb">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fx-card">
                                    <div class="fx-card-content fx-card-team team-details">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-12">
                                                <div class="fx-team-detail">Family Member Details</div>
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-floating mb-3">
                                                            <select
                                                                class="form-control form-select @error('relationship') is-invalid @enderror"
                                                                name="relationship" id="relationship-select"
                                                                aria-label="">
                                                                <option> - Select Relationship - </option>
                                                                <option value="Child">Child</option>
                                                                <option value="Spouse">Spouse</option>
                                                            </select>
                                                            <label>Relationship Type <small
                                                                    class="text-danger">(required)</small></label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('first_name') is-invalid @enderror"
                                                                type="text" name="first_name"
                                                                autocomplete="first_name" placeholder="">
                                                            <label for="first_name" class="set_label">
                                                                First Name <small
                                                                    class="text-danger">(required)</small></label>
                                                            </label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('middle_name') is-invalid @enderror"
                                                                type="text" name="middle_name"
                                                                autocomplete="middle_name" placeholder="">
                                                            <label for="middle_name" class="set_label">
                                                                Middle Name</label>
                                                            </label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('last_name') is-invalid @enderror"
                                                                type="text" name="last_name"
                                                                autocomplete="last_name" placeholder="">
                                                            <label for="last_name" class="set_label">
                                                                Last Name <small
                                                                    class="text-danger">(required)</small></label>
                                                            </label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <select
                                                                class="form-control form-select @error('extension') is-invalid @enderror"
                                                                name="extension" id="extension-select"
                                                                aria-label="">
                                                                <option value=" "> - Select Extension - </option>
                                                                @foreach ($suffixes as $suffix)
                                                                    <option value="{{ $suffix->extension_name }}">
                                                                        {{ $suffix->extension_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <label>Extension Type</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <select
                                                                class="form-control form-select @error('deceased') is-invalid @enderror"
                                                                name="deceased" id="deceased-select"
                                                                aria-label="">
                                                                <option value=" "> - Please Select - </option>
                                                                <option value="No">No</option>
                                                                <option value="Yes">Yes</option>
                                                            </select>
                                                            <label>Deceased</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fx-card">
                                    <div class="fx-card-content fx-card-team team-details">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-12">
                                                <div class="fx-team-detail">Occupation Details</div>
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('occupation') is-invalid @enderror"
                                                                type="text" name="occupation"
                                                                autocomplete="occupation" placeholder="">
                                                            <label>Occupation <small class="text-danger">(Spouse
                                                                    Only)</small></label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('employer_name') is-invalid @enderror"
                                                                type="text" name="employer_name"
                                                                autocomplete="employer_name" placeholder="">
                                                            <label for="employer_name" class="set_label">
                                                                Employer Name <small class="text-danger">(Spouse
                                                                    Only)</small></label>
                                                            </label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('business_add') is-invalid @enderror"
                                                                type="text" name="business_add"
                                                                autocomplete="business_add" placeholder="">
                                                            <label for="business_add" class="set_label">
                                                                Business Address <small class="text-danger">(Spouse
                                                                    Only)</small></label>
                                                            </label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('telephone_number') is-invalid @enderror"
                                                                type="text" name="telephone_number"
                                                                autocomplete="telephone_number" placeholder="">
                                                            <label for="telephone_number" class="set_label">
                                                                Telephone No. <small class="text-danger">(Spouse
                                                                    Only)</small></label>
                                                            </label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                class="form-control @error('birthdate') is-invalid @enderror"
                                                                type="date" name="birthdate"
                                                                autocomplete="birthdate" placeholder="">
                                                            <label for="birthdate" class="set_label">
                                                                Date of Birth <small
                                                                    class="text-danger">(Child/Children Only |
                                                                    required)</small></label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const regionSelect = document.getElementById("region-select");
            const provinceSelect = document.getElementById("province");
            const citySelect = document.getElementById("city");
            const barangaySelect = document.getElementById("barangay");

            fetch("/assets/json/philippinesprovinces.json")
                .then(response => response.json())
                .then(data => {
                    const sortedData = Object.entries(data);

                    regionSelect.value = '{{ Auth::user()->addressInfo->region }}';
                    provinceEdit('{{ Auth::user()->addressInfo->region }}',
                        '{{ Auth::user()->addressInfo->province }}');
                    cityEdit('{{ Auth::user()->addressInfo->region }}',
                        '{{ Auth::user()->addressInfo->province }}',
                        '{{ Auth::user()->addressInfo->city }}');
                    barangayEdit('{{ Auth::user()->addressInfo->region }}',
                        '{{ Auth::user()->addressInfo->province }}',
                        '{{ Auth::user()->addressInfo->city }}',
                        '{{ Auth::user()->addressInfo->barangay }}');

                    function toTitleCase(str) {
                        return str.replace(/\w\S*/g, function(txt) {
                            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                        });
                    }

                    function provinceEdit(region, province) {
                        provinceSelect.innerHTML = '';
                        citySelect.innerHTML = '';
                        barangaySelect.innerHTML = '';

                        if (region) {
                            citySelect.disabled = true;
                            citySelect.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect.disabled = true;
                            barangaySelect.innerHTML = `<option value="">Select Barangay</option>`;
                            provinceSelect.disabled = false;

                            const selectedRegion = region.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (selectedRegion === value.region_name) {
                                    for (const provinceName in value.province_list) {
                                        const option = document.createElement("option");
                                        option.value = toTitleCase(provinceName);
                                        option.text = toTitleCase(provinceName);
                                        provinceSelect.appendChild(option);
                                    }
                                }
                            }
                            provinceSelect.value = province;
                        } else {
                            provinceSelect.disabled = true;
                            provinceSelect.innerHTML = `<option value="">Select Province</option>`;
                            citySelect.disabled = true;
                            citySelect.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect.disabled = true;
                            barangaySelect.innerHTML = `<option value="">Select Barangay</option>`;
                        }
                    }

                    function cityEdit(region, province, city) {
                        barangaySelect.innerHTML = '';
                        barangaySelect.disabled = true;
                        barangaySelect.innerHTML = `<option value="">Select Barangay</option>`;

                        if (region || province) {
                            citySelect.disabled = false;
                            citySelect.innerHTML = '';

                            const selectedProvince = province.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (value.province_list[selectedProvince]) {
                                    for (const municipalList in value.province_list[selectedProvince]
                                            .municipality_list) {
                                        const option = document.createElement("option");
                                        option.value = toTitleCase(municipalList);
                                        option.text = toTitleCase(municipalList);
                                        citySelect.appendChild(option);
                                    }
                                }
                            }
                            citySelect.value = city;
                        } else {
                            citySelect.disabled = true;
                            citySelect.innerHTML = `<option value="">Select City</option>`;
                        }
                    }

                    function barangayEdit(region, province, city, barangay) {
                        if (region || province || city) {
                            barangaySelect.disabled = false;
                            barangaySelect.innerHTML = '';

                            const selectedProvince = province.toUpperCase();
                            const selectedCity = city.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (value.province_list[selectedProvince]) {
                                    for (const municipalList in value.province_list[selectedProvince]
                                            .municipality_list) {
                                        if (municipalList === selectedCity) {
                                            const barangayList = value.province_list[selectedProvince]
                                                .municipality_list[municipalList].barangay_list;
                                            for (const barangay of barangayList) {
                                                const option = document.createElement("option");
                                                option.value = toTitleCase(barangay);
                                                option.text = toTitleCase(barangay);
                                                barangaySelect.appendChild(option);
                                            }
                                        }
                                    }
                                }
                            }
                            barangaySelect.value = barangay;
                        }
                    }

                    regionSelect.addEventListener("change", () => {
                        provinceSelect.innerHTML = '';
                        citySelect.innerHTML = '';
                        barangaySelect.innerHTML = '';

                        if (regionSelect.value) {
                            citySelect.disabled = true;
                            citySelect.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect.disabled = true;
                            barangaySelect.innerHTML = `<option value="">Select Barangay</option>`;
                            provinceSelect.disabled = false;

                            const selectedRegion = regionSelect.value.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (selectedRegion === value.region_name) {
                                    for (const provinceName in value.province_list) {
                                        const option = document.createElement("option");
                                        option.value = toTitleCase(provinceName);
                                        option.text = toTitleCase(provinceName);
                                        provinceSelect.appendChild(option);
                                    }
                                }
                            }
                        } else {
                            provinceSelect.disabled = true;
                            provinceSelect.innerHTML = `<option value="">Select Province</option>`;
                            citySelect.disabled = true;
                            citySelect.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect.disabled = true;
                            barangaySelect.innerHTML = `<option value="">Select Barangay</option>`;
                        }
                    });
                });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const regionSelect2 = document.getElementById("region-select2");
            const provinceSelect2 = document.getElementById("province2");
            const citySelect2 = document.getElementById("city2");
            const barangaySelect2 = document.getElementById("barangay2");

            fetch("/assets/json/philippinesprovinces.json")
                .then(response => response.json())
                .then(data => {
                    const sortedData = Object.entries(data);

                    regionSelect2.value = '{{ Auth::user()->residentialInfo->region }}';
                    provinceEdit('{{ Auth::user()->residentialInfo->region }}',
                        '{{ Auth::user()->residentialInfo->province }}');
                    cityEdit('{{ Auth::user()->residentialInfo->region }}',
                        '{{ Auth::user()->residentialInfo->province }}',
                        '{{ Auth::user()->residentialInfo->city }}');
                    barangayEdit('{{ Auth::user()->residentialInfo->region }}',
                        '{{ Auth::user()->residentialInfo->province }}',
                        '{{ Auth::user()->residentialInfo->city }}',
                        '{{ Auth::user()->residentialInfo->barangay }}');

                    function toTitleCase(str) {
                        return str.replace(/\w\S*/g, function(txt) {
                            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                        });
                    }

                    function provinceEdit(region, province) {
                        provinceSelect2.innerHTML = '';
                        citySelect2.innerHTML = '';
                        barangaySelect2.innerHTML = '';

                        if (region) {
                            citySelect2.disabled = true;
                            citySelect2.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect2.disabled = true;
                            barangaySelect2.innerHTML = `<option value="">Select Barangay</option>`;
                            provinceSelect2.disabled = false;

                            const selectedRegion = region.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (selectedRegion === value.region_name) {
                                    for (const provinceName in value.province_list) {
                                        const option = document.createElement("option");
                                        option.value = toTitleCase(provinceName);
                                        option.text = toTitleCase(provinceName);
                                        provinceSelect2.appendChild(option);
                                    }
                                }
                            }
                            provinceSelect2.value = province;
                        } else {
                            provinceSelect2.disabled = true;
                            provinceSelect2.innerHTML = `<option value="">Select Province</option>`;
                            citySelect2.disabled = true;
                            citySelect2.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect2.disabled = true;
                            barangaySelect2.innerHTML = `<option value="">Select Barangay</option>`;
                        }
                    }

                    function cityEdit(region, province, city) {
                        barangaySelect2.innerHTML = '';
                        barangaySelect2.disabled = true;
                        barangaySelect2.innerHTML = `<option value="">Select Barangay</option>`;

                        if (region || province) {
                            citySelect2.disabled = false;
                            citySelect2.innerHTML = '';

                            const selectedProvince = province.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (value.province_list[selectedProvince]) {
                                    for (const municipalList in value.province_list[selectedProvince]
                                            .municipality_list) {
                                        const option = document.createElement("option");
                                        option.value = toTitleCase(municipalList);
                                        option.text = toTitleCase(municipalList);
                                        citySelect2.appendChild(option);
                                    }
                                }
                            }
                            citySelect2.value = city;
                        } else {
                            citySelect2.disabled = true;
                            citySelect2.innerHTML = `<option value="">Select City</option>`;
                        }
                    }

                    function barangayEdit(region, province, city, barangay) {
                        if (region || province || city) {
                            barangaySelect2.disabled = false;
                            barangaySelect2.innerHTML = '';

                            const selectedProvince = province.toUpperCase();
                            const selectedCity = city.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (value.province_list[selectedProvince]) {
                                    for (const municipalList in value.province_list[selectedProvince]
                                            .municipality_list) {
                                        if (municipalList === selectedCity) {
                                            const barangayList = value.province_list[selectedProvince]
                                                .municipality_list[municipalList].barangay_list;
                                            for (const barangay of barangayList) {
                                                const option = document.createElement("option");
                                                option.value = toTitleCase(barangay);
                                                option.text = toTitleCase(barangay);
                                                barangaySelect2.appendChild(option);
                                            }
                                        }
                                    }
                                }
                            }
                            barangaySelect2.value = barangay;
                        }
                    }

                    regionSelect2.addEventListener("change", () => {
                        provinceSelect2.innerHTML = '';
                        citySelect2.innerHTML = '';
                        barangaySelect2.innerHTML = '';

                        if (regionSelect2.value) {
                            citySelect2.disabled = true;
                            citySelect2.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect2.disabled = true;
                            barangaySelect2.innerHTML = `<option value="">Select Barangay</option>`;
                            provinceSelect2.disabled = false;

                            const selectedRegion = regionSelect2.value.toUpperCase();

                            for (const [key, value] of sortedData) {
                                if (selectedRegion === value.region_name) {
                                    for (const provinceName in value.province_list) {
                                        const option = document.createElement("option");
                                        option.value = toTitleCase(provinceName);
                                        option.text = toTitleCase(provinceName);
                                        provinceSelect2.appendChild(option);
                                    }
                                }
                            }
                        } else {
                            provinceSelect2.disabled = true;
                            provinceSelect2.innerHTML = `<option value="">Select Province</option>`;
                            citySelect2.disabled = true;
                            citySelect2.innerHTML = `<option value="">Select City</option>`;
                            barangaySelect2.disabled = true;
                            barangaySelect2.innerHTML = `<option value="">Select Barangay</option>`;
                        }
                    });
                });
        });
    </script>
    <script>
        let errorinModal = ''
    </script>
    @if ($errors->any())
        <script>
            errorinModal = '{{ session('active_tab') ? session('active_tab') : 'None ' }}'
        </script>
    @endif
</x-app-layout>
