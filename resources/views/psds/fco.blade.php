<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <style>
            .fx-card {
                transition: transform 0.3s ease;
            }

            .fx-card:hover {
                transform: scale(1.05);
            }
        </style>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <a href="{{ route('admin.planningLesson') }}" class="fx-page-link">
                    <div class="fx-card special primary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers mt-4">
                                    <h5>Planning the Lesson</h5>
                                    <hr>
                                </div>
                                <span class="card-icon"><i class="ri-book-3-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <a href="{{ route('admin.presentingLesson') }}" class="fx-page-link">
                    <div class="fx-card special primary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers mt-4">
                                    <h5>Presenting the lesson</h5>
                                    <hr>
                                </div>
                                <span class="card-icon"><i class="ri-presentation-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4">
                <a href="{{ route('admin.classroomManagement') }}" class="fx-page-link">
                    <div class="fx-card special primary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers mt-4">
                                    <h5>Classroom Management</h5>
                                    <hr>
                                </div>
                                <span class="card-icon"><i class="ri-settings-5-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-4">
                <a href="{{ route('admin.assessmentLearning') }}" class="fx-page-link">
                    <div class="fx-card special primary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers mt-4">
                                    <h5>Assessment of Learning</h5>
                                    <hr>
                                </div>
                                <span class="card-icon"><i class="ri-lightbulb-flash-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <a href="{{ route('admin.overallAssessment') }}" class="fx-page-link">
                    <div class="fx-card special primary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="title">
                                    <div class="growth-numbers mt-4">
                                        <h5>Overall Assessment</h5>
                                        <hr>
                                    </div>
                                    <span class="card-icon"><i class="ri-bar-chart-grouped-line"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
