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
                    <div class="fx-card-content label-card">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        A. Planning the Lesson
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div id="dealtbl">
                                            <div class="fx-card-content card-default">
                                                <div class="deal-table">
                                                    <div class="table-responsive">
                                                        <table id="recent-employee-table" class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th colspan="8" class="table-warning">
                                                                        <p> Check/Tick the
                                                                            area/areas needing
                                                                            enhancement</p>
                                                                    </th>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">preparing of a
                                                                                competency-based instructional
                                                                                plan that
                                                                                ensures congruency of the lesson
                                                                                objectives, activities and
                                                                                assessment.</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3"> applying of appropriate
                                                                                motivational
                                                                                strategies</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">preparing, selecting and
                                                                                using developmentally
                                                                                appropriate and adequate teaching and
                                                                                learning materials</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">choosing and applying
                                                                                efficient and effective
                                                                                teaching strategies</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">preparing and providing
                                                                                activities that cater
                                                                                to the learners’ diverse
                                                                                needs/disabilities, giftedness and
                                                                                talents</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">relating and
                                                                                interconnecting past and present
                                                                                lessons within and across curriculum
                                                                                areas</p>
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
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        B. Presenting the Lesson
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div id="dealtbl">
                                            <div class="fx-card-content card-default">
                                                <div class="deal-table">
                                                    <div class="table-responsive">
                                                        <table id="recent-employee-table" class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th colspan="8" class="table-warning">
                                                                        <p> Check/Tick the
                                                                            area/areas needing
                                                                            enhancement</p>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">engaging the learners in
                                                                                the discussion and
                                                                                conveys ideas within the comprehension
                                                                                level of the learners
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">employing teaching
                                                                                strategies that develop/
                                                                                enhance learners’ critical, creative and
                                                                                problem solving
                                                                                skillss</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">using ICT and other
                                                                                appropriate visual aids
                                                                                for an efficient, effective and
                                                                                motivating teaching-learning
                                                                                process</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">asking enabling questions
                                                                                to develop/ enhance
                                                                                learners’ higher order thinking skills
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">organizing a
                                                                                well-prepared board work and
                                                                                instructional materials</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">using positive
                                                                                reinforcement and non-verbal
                                                                                cues to motivate and encourage learners
                                                                                to participate in
                                                                                class</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        C. Classroom Management
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div id="dealtbl">
                                            <div class="fx-card-content card-default">
                                                <div class="deal-table">
                                                    <div class="table-responsive">
                                                        <table id="recent-employee-table" class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th colspan="8" class="table-warning">
                                                                        <p>Check/Tick the
                                                                            area/areas needing
                                                                            enhancement</p>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">establishing routines and
                                                                                procedure to
                                                                                maximize learning time</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">maintaining a clean, safe
                                                                                and child-friendly
                                                                                classroom that is compliant to the child
                                                                                protection policy
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">managing learner behavior
                                                                                constructively by
                                                                                applying positive and non-violent
                                                                                discipline</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">structuring the classroom
                                                                                to encourage
                                                                                learners to do meaningful exploration,
                                                                                discovery and
                                                                                hands-on activities</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">nurturing sense of
                                                                                responsibility among
                                                                                learners by involving them in making
                                                                                classroom rules and
                                                                                standards</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckIndeterminate">
                                                                            <p class="mx-3">motivating learners’
                                                                                attendance,
                                                                                participation and learning through
                                                                                positive reinforcement
                                                                            </p>
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
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingtwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        D. Assessment of Learning
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div id="dealtbl">
                                            <div class="fx-card-content card-default">
                                                <div class="deal-table">
                                                    <div class="table-responsive">
                                                        <table id="recent-employee-table" class="table">
                                                            <tbody>
                                                            <tr>
                                                <th colspan="8" class="table-warning">
                                                    <p>Check/Tick the area/areas needing
                                                        enhancement</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">
                                                        <p class="mx-3">using diagnostic assessment to assess
                                                            learners’ prior knowledge and bridge learning gaps through
                                                            remediation</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">
                                                        <p class="mx-3">providing opportunities for learners to
                                                            demonstrate their learning</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">
                                                        <p class="mx-3">utilizing formative assessment results in
                                                            determining learning and designing enrichment activities</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">
                                                        <p class="mx-3">developing valid test items that measure
                                                            learner achievement</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">
                                                        <p class="mx-3">using developmentally appropriate authentic
                                                            assessment to elicit and measure higher order thinking
                                                            skills in applying their understanding to different
                                                            scenarios</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckIndeterminate">

                                                        <p class="mx-3">providing timely, accurate and constructive
                                                            feedback to improve learner performance</p>
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
                            </div>
                        </div>
                        <div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Points for improvement</label>
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
                            <button type="button" class="btn btn-primary "><i class="ri-save-line"></i>
                                Save</button>
                        </div>
                    </div>
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
