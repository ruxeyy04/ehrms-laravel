<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 text-center mt-3">
                    <img src="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" class="img-fluid" alt="logo"
                        style="width:10%;" />
                    <h5 class="fx-card-title text-center mt-1 fw-bolder">INSTRUCTIONAL SUPERVISORY TOOL FOR TEACHERS
                    </h5>
                    <h6 class="fx-card-title text-center mt-2 text-primary fw-bolder">Developmental Instructional
                        Supervision Approach</h6>
                </div>
            </div>
            <div class="row">
                <form action="">
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control form-select" name="extension" id="office-select"
                                                aria-label="">
                                                <option value="">Select School Head</option>
                                            </select>
                                            <label class="sellabel">School Head<span
                                                    class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control form-select text-sm" id="floatingSelectGrid"
                                                aria-label="Floating label select example">
                                                <option selected>Select Teacher</option>
                                                <option value="1">Name 1</option>
                                                <option value="2">Name 2</option>
                                                <option value="3">Name 3</option>
                                            </select>
                                            <label for="floatingSelectGrid">School Teacher</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control form-select text-sm" id="floatingSelectGrid"
                                                aria-label="Floating label select example">
                                                <option selected>Select Subject</option>
                                                <option value="1">Subject 1</option>
                                                <option value="2">Subject 2</option>
                                                <option value="3">Subject 3</option>
                                            </select>
                                            <label for="floatingSelectGrid">Subject Taught</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="">
                                            <label for="floatingInput">Target Competency</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Date</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="time" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Time</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="">
                                            <label for="floatingInput">Strategy Used</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Please observe how the teacher delivers and facilitates the lesson. See also how the
                                School Head provided TA to help the teacher improve instruction. Indicate below the
                                development needs only.</p>
                        </div>
                    </div>
                </form>
                <div class="form-group mb-3">
                    <div id="dealtbl">
                        <div class="fx-card-content card-default">
                            <div class="deal-table">
                                <div class="table-responsive">
                                    <table id="recent-employee-table" class="table">
                                        <tbody>
                                            <tr>
                                                <th colspan="8" class="table-warning">
                                                    <p>A. Planning the Lesson ( Check/Tick the area/areas needing
                                                        enhancement )</p>
                                                </th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckIndeterminate">
                                                        <p class="mx-3">preparing of a competency-based instructional
                                                            plan that
                                                            ensures congruency of the lesson objectives, activities and
                                                            assessment.</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckIndeterminate">
                                                        <p class="mx-3"> applying of appropriate motivational
                                                            strategies</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckIndeterminate">
                                                        <p class="mx-3">preparing, selecting and using developmentally
                                                            appropriate and adequate teaching and learning materials</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckIndeterminate">
                                                        <p class="mx-3">choosing and applying efficient and effective
                                                            teaching strategies</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">
                                                        <p class="mx-3">preparing and providing activities that cater
                                                            to the learners’ diverse needs/disabilities, giftedness and
                                                            talents</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">
                                                        <p class="mx-3">relating and interconnecting past and present
                                                            lessons within and across curriculum areas</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="form-floating mt-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Describe the points needing improvement</label>
                                    </div>
                                    <div class="container mt-5">
                                        <div class="row">
                                            <div class="col-md-6 text-center">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="">
                                                    <label for="floatingInput">Observer:</label>
                                                    <small>Supervisor</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="">
                                                    <label for="floatingInput">Conforme:</label>
                                                    <small>School Head</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-lg"><i class="ri-save-line"></i>
                            Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
