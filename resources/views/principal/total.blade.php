<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card">
            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    <img src="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" class="img-fluid" alt="logo"
                        style="width:10%;" />
                    <h3 class="fx-card-title text-center mt-1 fw-bolder">COT-RPMS Summary</h3>
                    <h4 class="fx-card-title text-center mt-2 text-success fw-bolder">Total (Quaters 1-4)</h4>
                </div>
                <div class="form-group mb-3 px-4">
                        <label for="grade-level" class="form-label">Select Quarter to Display</label>
                        <div class="d-flex">
                            <select class="form-control me-2" id="quarter-display">
                                <option value="">All Quarters</option>
                                <option value="">Quarter 1</option>
                                <option value="">Quarter 2</option>
                                <option value="">Quarter 3</option>
                                <option value="">Quarter 4</option>
                            </select>
                            <button type="button" class="btn btn-primary">Select</button>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="fx-card-content px-4">
                        <div class="fx-card-header split">
                            <h4 class="fx-card-title">Teachers</h4>
                            <div class="header-tools">
                                <a href="javascript:void(0)" class="fx-full-card" title="Full Screen"><i
                                        class="ri-fullscreen-line"></i></a>
                            </div>
                        </div>
                        <div class="fx-card-content">
                            <div class="fx-chart-content">
                                <div id="donutChart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="fx-card-content px-4">
                        <div class="fx-card-header split">
                            <h4 class="fx-card-title">Master Teachers</h4>
                            <div class="header-tools">
                                <a href="javascript:void(0)" class="fx-full-card" title="Full Screen"><i
                                        class="ri-fullscreen-line"></i></a>
                            </div>
                        </div>
                        <div class="fx-card-content">
                            <div class="fx-chart-content">
                                <div id="donutChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
