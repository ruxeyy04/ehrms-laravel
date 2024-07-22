<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="row">
            <div class="fx-card card-default product-list">
                <div class="fx-card-content ">
                    <div class="col-md-12">
                        <a href="{{ route('principal.opcrf') }}"><button type="button"
                                class="btn btn-secondary btn-sm mb-3"><i class="ri-arrow-go-back-line"></i>
                                back</button></a>
                        <div class="table-responsive">
                            <table id="product_list" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Objective No.</th>
                                        <th>Objectives</th>
                                        <th>Weight</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>4.1</td>
                                        <td>4.1 Engaged and established network of support and linkages to provide an
                                            inclusive, caring, and protective learning environment with at least 4
                                            sectoral stakeholders (e.g. but not limited to PTAs, NGOs, Alumni
                                            Association) as partners in the implementation of PAPs in school during the
                                            SY 2019-2020. Brigada Eskwela, Adopt-A-School Program, DRRM, Child
                                            Protection Program, School Based Management, OK sa DepEd (NDEP, SBFP,
                                            Medical-Nursing and Dental Health, ARH, Mental Health, WinS), Sport Program,
                                            Scouting.</td>
                                        <td>.05</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.2</td>
                                        <td>4.2 Sustained or Increased the SBM Level of Practice in school through
                                            deepening stakeholders' engagement.</td>
                                        <td>.02</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.3</td>
                                        <td>4.3 Established clear financial management system for non-MOOE resources in
                                            the implementation of projects in school during the SY 2019-2020. Homeroom
                                            PTA, School Federated PTA, Brigada Eskwela, Adopt-A-School Program, DRRM,
                                            School-Based Management, OK sa DepEd (NDEP, SBFP, Medical-Nursing and Dental
                                            Health, ARH, Mental Health, WinS), Sports Program, Scouting.</td>
                                        <td>.03</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.4</td>
                                        <td>4.4 Conducted M & E in collaboration with the external key stakeholders to
                                            assess and measure the effectiveness of the PAPs implemented by the school
                                            partners to improve learning outcomes of the learners in SY 2019-2020.</td>
                                        <td>.03</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
