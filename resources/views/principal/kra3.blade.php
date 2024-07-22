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
                                        <td>3.1</td>
                                        <td>3.1 Provided relevant technical assistance to teachers on matters pertaining
                                            to enhancement of classroom management, instructional and
                                            pedagogical/andragogical skills and interpersonal relationships from June
                                            2019-March 2020.</td>
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
                                        <td>3.2</td>
                                        <td>3.2 Enhanced / Improved teachers’ instructional competence and classroom
                                            management skills through trainings and development programs as reflected in
                                            the Training Needs Assessment Result for SY 2018-2019.</td>
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
                                        <td>3.3</td>
                                        <td>3.3 Sustained implementation of the Results-based Performance Management
                                            System cycle and submitted required documents for the SY 2019-2020.</td>
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
                                        <td>3.4</td>
                                        <td>3.4 Established a school-based rewards and recognition system on areas of
                                            research, journalism, sports, partnerships, classroom structuring, LRMDS,
                                            investigatory projects, etc. with the following features: a. Policy and
                                            Process Flow b. Committee c. School Records and Documentation d. HRIS</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
