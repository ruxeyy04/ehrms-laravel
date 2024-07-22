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
                    <h4 class="fx-card-title text-center mt-2 text-danger fw-bolder">Grade Level</h4>
                    <h4 class="fx-card-title text-center mt-2 text-primary fw-bolder">Total - Quarter #</h4>
                </div>
            </div>
            <div class="row">
                <div id="dealtbl">
                    <div class="form-group mb-3 p-3">
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
                    <div class="fx-card-header">
                        <h4 class="fx-card-title">Evaluation/Rating</h4>
                        <div class="header-tools">
                            <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line"
                                    title="Full Screen"></i></a>
                        </div>
                    </div>
                    <div class="fx-card-content card-default">
                        <div class="deal-table">
                            <div class="table-responsive">
                                <table id="recent-employee-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Kindergarten</th>
                                            <th>Grade 1</th>
                                            <th>Grade 2</th>
                                            <th>Grade 3</th>
                                            <th>Grade 4</th>
                                            <th>Grade 5</th>
                                            <th>Grade 6</th>
                                            <th>Grade 7</th>
                                            <th>Grade 8</th>
                                            <th>Grade 9</th>
                                            <th>Grade 10</th>
                                            <th>Grade 11</th>
                                            <th>Grade 12</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Proficient</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>5/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                            <td>
                                                <p>/68</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Highly Proficient</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>1/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
                                            </td>
                                            <td>
                                                <p>/7</p>
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
    </div>
</x-app-layout>
