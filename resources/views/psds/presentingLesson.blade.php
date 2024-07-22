<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 text-center mt-3">
                    <img src="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" class="img-fluid" alt="logo"
                        style="width:10%;" />
                    <h5 class="fx-card-title text-center mt-1 fw-bolder">INSTRUCTIONAL SUPERVISORY TOOL FOR SCHOOL HEADS
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
                                            <select class="form-select text-sm" id="floatingSelectGrid"
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
                                            <select class="form-select text-sm" id="floatingSelectGrid"
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
                        </div>
                        <div class="col-12">
                            <p><b>Directions:</b> Rate each item on the checklist based on how well the School Head
                                provided TA to the teacher for the classroom instruction. Mark the appropriate column
                                with a check symbol as: 1- Poor;2 - Fair; 3 – Good; 4 – Very Good; 5 – Excellent. </p>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="fx-card-content card-default">

                        <div class="deal-table">
                            <div class="container-fluid">
                                <table id="presentingLesson" class="table">
                                    <thead class="table__thead">
                                        <tr class="table-primary">
                                            <th>Constructs/Indicators</th>
                                            <th class="text-center">1</th>
                                            <th class="text-center">2</th>
                                            <th class="text-center">3</th>
                                            <th class="text-center">4</th>
                                            <th class="text-center">5</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__tbody">
                                        <tr class="table-row table-category-color">
                                            <th colspan="8" class="table-row__td ">
                                                <p>B. Presenting the the Lesson<br>The School Head assists/guides/provides TA and or checks if teacher...</p>
                                            </th>
                                        </tr>
                                        
                                        <tr class="table-row" data-question="1">
                                            <td class="table-row__td" data-column="Question No. 1">
                                                <div class="table-row--info me-3"></div>
                                                <p class="custom-p__table question">7. engages the learners in the discussion, integrates values and conveys ideas within the comprehension level of the learners
                                                </p>
                                            </td>
                                            <td class="td-opt" data-column="1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="5"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row" data-question="2">
                                            <td class="table-row__td" data-column="Question No. 2">
                                                <div class="table-row--info mr-3"></div>
                                                <p class="custom-p__table question">
                                                    8. employs teaching strategies that develop/ enhance learners’ critical, creative and problem solving skills.
                                                </p>
                                            </td>
                                            <td class="td-opt" data-column="1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="5"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row" data-question="3">
                                            <td class="table-row__td" data-column="Question No. 3">
                                                <div class="table-row--info mr-3"></div>
                                                <p class="custom-p__table question">
                                                    9. uses ICT and other appropriate visual aids for an efficient, effective and motivating teaching-learning process
                                                </p>
                                            </td>
                                            <td class="td-opt" data-column="1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="5"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row" data-question="4">
                                            <td class="table-row__td" data-column="Question No. 4">
                                                <div class="table-row--info mr-3"></div>
                                                <p class="custom-p__table question">
                                                    4. chooses and applies efficient and effective teaching strategies.
                                                </p>
                                            </td>
                                            <td class="td-opt" data-column="1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="5"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row" data-question="5">
                                            <td class="table-row__td" data-column="Question No. 5">
                                                <div class="table-row--info mr-3"></div>
                                                <p class="custom-p__table question">
                                                    10. asks enabling questions to develop/ enhance learners’ higher order thinking skills
                                                </p>
                                            </td>
                                            <td class="td-opt" data-column="1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="5"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row" data-question="6">
                                            <td class="table-row__td" data-column="Question No. 6">
                                                <div class="table-row--info mr-3"></div>
                                                <p class="custom-p__table question">
                                                    11. organizes a well-prepared board work and instructional materials
                                                </p>
                                            </td>
                                            <td class="td-opt" data-column="1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>

                                            <td class="td-opt" data-column="5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="5"
                                                        id="flexCheckIndeterminate">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row table-category-color p-0 table-total__tally">
                                            <td class="text-end">
                                                <b>TOTAL</b>
                                            </td>
                                            <td class="text-center">
                                                <b class="c-1">0</b>
                                            </td>
                                            <td class="text-center">
                                                <b class="c-2">0</b>
                                            </td>
                                            <td class="text-center">
                                                <b class="c-3">0</b>
                                            </td>
                                            <td class="text-center">
                                                <b class="c-4">0</b>
                                            </td>
                                            <td class="text-center">
                                                <b class="c-5">0</b>
                                            </td>
                                        </tr>
                                        
                                        <tr class="table-row p-0 table-total_result">
                                            <td class="text-end fw-bold table-total__p">
                                                <p class="m-0">AVERAGE (TOTAL/<span id="totalQuestions"></span>)</p>
                                            </td>
                                            <td colspan="8" class="table-total__p">
                                                <p class="text-center average m-0">0.00</p>
                                            </td>
                                        </tr>
                                        <tr class="table-row p-0 table-total_result">
                                            <td class="text-end fw-bold table-total__p">
                                                <p class="m-0 table-row__descriptive">DESCRIPTIVE RATING</p>
                                            </td>
                                            <td colspan="8" class="table-total__p">
                                                <p class="text-center rating m-0">Poor</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div>
                            <p>Note: Salient details of observation and TA provided is on the attached
                                sheet.
                            </p>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="FCO_Comment" style="height: 100px"></textarea>
                                <label for="FCO_Comment">Comments</label>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            let lastCheckedPerRow = {};

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('click', function() {
                    const rowId = this.closest('tr').rowIndex;
                    if (lastCheckedPerRow[rowId] && lastCheckedPerRow[rowId] !== this) {
                        lastCheckedPerRow[rowId].checked = false;
                    }
                    lastCheckedPerRow[rowId] = this;
                });
            });
        });
    </script>

</x-app-layout>
