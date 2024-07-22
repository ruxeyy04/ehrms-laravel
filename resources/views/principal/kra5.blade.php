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
                                        <td>5.1</td>
                                        <td>5.1 Participated in the DepEd National, Regional and Division-initiated
                                            curricular and co-curriclar competitions during the School Year 2019-2020.
                                        </td>
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
                                        <td>5.2</td>
                                        <td>5.2 Implemented innovation or intervention pertaining curriculum and
                                            instruction within the School Year 2019-2020 to address identified problem
                                            area/s of school children and to improve their performance and learning
                                            outcomes.</td>
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
                                        <td>5.3</td>
                                        <td>5.3 Updated and finalized accurate BOSY in June to August 2019 and EOSY in
                                            March to April 2020 in the LIS and EBEIS.</td>
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
                                        <td>5.4</td>
                                        <td>5.4 Utilized at least 50% of the available school management and operations
                                            data in strategic planning and decision-making as evidenced in the SIP for
                                            SY 2019-2020.</td>
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
                                        <td>5.5</td>
                                        <td>5.5 Organized (June to August) and managed (June to March) functional school
                                            clubs, e.g. academic and other related organizations that promote
                                            leadership, physical, mental, and social skills to address varied types and
                                            interests of learners.</td>
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
