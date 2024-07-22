<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card">
            <div class="fx-card-content label-card">
                <div class="col-md-12 text-center mt-3 mb-3">
                    <img src="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" class="img-fluid" alt="logo"
                        style="width:10%;" />
                    <h3 class="fx-card-title text-center mt-1 fw-bolder">SAT Summary</h3>
                    <h4 class="fx-card-title text-center mt-2 text-success fw-bolder">Demographic Summary</h4>
                </div>

                <div class="cd-tabs cd-tabs--vertical margin-top-xl margin-bottom-lg js-cd-tabs">
                    <nav class="cd-tabs__navigation">
                        <ul class="cd-tabs__list">
                            <li>
                                <a href="#tab-age" class="cd-tabs__item cd-tabs__item--selected">
                                    <i class="ri-calendar-2-fill icon icon--xs"></i>
                                    <span>Age</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-gender" class="cd-tabs__item">
                                    <i class="ri-men-line icon icon--xs"></i>
                                    <span>Gender</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-status" class="cd-tabs__item">
                                    <i class="ri-briefcase-fill icon icon--xs"></i>
                                    <span>Employment Status</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-position" class="cd-tabs__item">
                                    <i class="ri-team-line icon icon--xs"></i>
                                    <span>Position</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-degree" class="cd-tabs__item">
                                    <i class="ri-graduation-cap-line icon icon--xs"></i>
                                    <span>Highest Degree Obtained</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-teach" class="cd-tabs__item">
                                    <i class="ri-calendar-check-fill icon icon--xs"></i>
                                    <span>No of Years in Teaching</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-aos" class="cd-tabs__item">
                                    <i class="ri-book-2-fill icon icon--xs"></i>
                                    <span>Area of Specialization</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-subjects" class="cd-tabs__item">
                                    <i class="ri-book-2-line icon icon--xs"></i>
                                    <span>Subjects Taught</span>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-gradelvl" class="cd-tabs__item">
                                    <i class="ri-school-fill icon icon--xs"></i>
                                    <span>Grade Level Taught</span>
                                </a>
                            </li>
                        </ul> <!-- cd-tabs__list -->
                    </nav>
                    <hr>
                    <ul class="cd-tabs__panels">
                        <li id="tab-age" class="cd-tabs__panel cd-tabs__panel--selected">
                            <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>Under 25</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>25-30</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>31-35</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>36-40</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>1</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>41-45</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>46-50</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>2</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>51-55</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>2</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Over 55</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>3</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="ageChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="tab-gender" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>Male</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Female</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="genderChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li id="tab-status" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>Regular Permanent</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>1</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Provisional</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Substitute</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Contractual</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="statusChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li id="tab-position" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>Teacher I</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>3</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Teacher II</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>1</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Teacher III</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Master Teacher I</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>3</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Master Teacher II</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>1</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Master Teacher III</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Master Teacher IV</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="positionChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li id="tab-degree" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>Bachelor's Degree</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>5</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Master's Degree</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>3</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Doctorate Degree</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="degreeChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li id="tab-teach" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>0-3 years</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>5</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>4-10 years</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>More than 10 years</h6>
                                                                <h5><span class="up"><i class="ri-arrow-down-line"></i></span>8</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="teachChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li id="tab-aos" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>English</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Filipino</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Mathematics</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>General Science</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Biology</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Chemistry</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Physics</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Others</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="aosChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li id="tab-subjects" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>English</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Filipino</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Mathematics</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>General Science</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Araling Panlipunan</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>MAPEH</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Values Education</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Others</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="subjectChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="tab-gradelvl" class="cd-tabs__panel">
                        <div class="fx-card-content fx-card-team team-details">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="fx-card" id="campaigns">
                                            <div class="fx-card-content">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="fx-chart-header-2">
                                                            <div class="block">
                                                                <h6>Kindergarten</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>1</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Elementary</h6>
                                                                <h5><span class="up"><i class="ri-arrow-up-line"></i></span>5</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Secondary</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Junior High School</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                            <div class="block">
                                                                <h6>Senior High School</h6>
                                                                <h5><span class="down"><i class="ri-arrow-down-line"></i></span>0</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 order-first order-md-last">
                                                        <div class="fx-card-content">
                                                            <div class="fx-chart-content">
                                                                <div id="gradelvlChart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul> <!-- cd-tabs__panels -->
                </div> <!-- cd-tabs -->

            </div>
        </div>
    </div>
</x-app-layout>
