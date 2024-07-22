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
                <a href="{{ route('principal.kra1') }}" class="fx-page-link">
                    <div class="fx-card special primary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers">
                                    <h4>Instructional Leadership</h4>
                                    <h5>KRA 1</h5>
                                    <hr>
                                    <p class="card-groth up">33</p>
                                </div>
                                <span class="card-icon"><i class="ri-lightbulb-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <a href="{{ route('principal.kra2') }}" class="fx-page-link">
                    <div class="fx-card special secondary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers">
                                    <h4>Learning Environment</h4>
                                    <h5>KRA 2</h5>
                                    <hr>
                                    <p class="card-groth up">23</p>
                                </div>
                                <span class="card-icon"><i class="ri-school-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <a href="{{ route('principal.kra3') }}" class="fx-page-link">
                    <div class="fx-card special third">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers">
                                    <h4>Human Resource</h4>
                                    <h5>KRA 3</h5>
                                    <hr>
                                    <p class="card-groth up">25</p>
                                </div>
                                <span class="card-icon"><i class="ri-user-2-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-4">
                <a href="{{ route('principal.kra4') }}" class="fx-page-link">
                    <div class="fx-card special third">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers">
                                    <h4>Parents' Involvement & Community Partnership</h4>
                                    <h5>KRA 4</h5>
                                    <hr>
                                    <p class="card-groth up">25</p>
                                </div>
                                <span class="card-icon"><i class="ri-parent-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <a href="{{ route('principal.kra5') }}" class="fx-page-link">
                    <div class="fx-card special primary">
                        <div class="fx-card-content label-card">
                            <div class="title">
                                <div class="growth-numbers">
                                    <h4>School Leadership Management & Operation</h4>
                                    <h5>KRA 5</h5>
                                    <hr>
                                    <p class="card-groth up">33</p>
                                </div>
                                <span class="card-icon"><i class="ri-settings-3-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <div class="fx-card special secondary">
                    <div class="fx-card-content label-card">
                        <div class="title">
                            <div class="growth-numbers">
                                <h4>Rating</h4>
                                <h5>POOR</h5>
                                <hr>
                            </div>
                            <span class="card-icon"><i class="ri-star-half-fill"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
