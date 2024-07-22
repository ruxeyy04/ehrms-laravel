<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card">
            <div class="fx-card-content px-4">
                <div class="d-flex justify-content-center">
                    <img src="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" class="img-fluid" alt="logo"
                        style="width:10%;" />
                </div>
                <h5 class="fx-card-title text-center mt-2">COT-RPMS</h5>
                <h5 class="fx-card-title text-center mt-2 text-primary fw-bolder">MASTER TEACHER I-IV</h5>
                <div class="row">
                    <div class="col-md-3">
                        <div class="fx-card">
                            <div class="fx-card-header">
                                <h4 class="fx-card-title">Observation Details</h4>
                            </div>
                            <div class="fx-card-content card-default">
                                <form action="" method="">
                                    <div class="form-group mb-3">
                                        <label for="school-name" class="form-label">Name of School</label>
                                        <input type="text" class="form-control" id="school-name"
                                            placeholder="Enter name of school" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="teacher-name" class="form-label">Name of Teacher</label>
                                        <input type="text" class="form-control" id="teacher-name"
                                            placeholder="Enter name of teacher" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="grade-level" class="form-label">Grade Level</label>
                                        <select class="form-control" id="grade-level">
                                            <option value="">--Select grade level--</option>
                                            <option value="k">Kindergarten</option>
                                            <option value="1">Grade 1</option>
                                            <option value="2">Grade 2</option>
                                            <option value="3">Grade 3</option>
                                            <option value="4">Grade 4</option>
                                            <option value="5">Grade 5</option>
                                            <option value="6">Grade 6</option>
                                            <option value="7">Grade 7</option>
                                            <option value="8">Grade 8</option>
                                            <option value="9">Grade 9</option>
                                            <option value="10">Grade 10</option>
                                            <option value="11">Grade 11</option>
                                            <option value="12">Grade 12</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="grade-level" class="form-label">Subject Area</label>
                                        <select class="form-control" id="subject-area">
                                            <option value="">--Select subject area--</option>
                                            <option value="English">English</option>
                                            <option value="Science">Science</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="Aral Pan">Aral Pan</option>
                                            <option value="TLE/EPP">TLE/EPP</option>
                                            <option value="MAPEH/MSEP">MAPEH/MSEP</option>
                                            <option value="ValEd/ESP">ValEd/ESP</option>
                                            <option value="Kindergarten">Kindergarten</option>
                                            <option value="MTB/MLE">MTB/MLE</option>
                                            <option value="Senior High">Senior High</option>
                                            <option value="Special">Special</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 mt-3">
                                        <label class="form-check-label" for="observation">Observation Period</label><br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                                value="option3">
                                            <label class="form-check-label" for="inlineRadio3">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio4"
                                                value="option4">
                                            <label class="form-check-label" for="inlineRadio4">4</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="date-observed" class="form-label">Date observed</label>
                                        <input type="date" class="form-control" id="date-observed"
                                            placeholder="Enter date observed" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="fx-card" id="dealtbl">
                            <div class="fx-card-header">
                                <h4 class="fx-card-title">Evaluation/Rating</h4>
                            </div>
                            <div class="fx-card-content card-default">
                                <div class="deal-table">
                                    <div class="table-responsive">
                                        <table id="recent-employee-table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>The Teacher:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <p>1. Applies knowledge of content within and across curriculum teaching areas.</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">3</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">4</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">5</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">6</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">7</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">No</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <p>2. Applies a range of teaching strategies to develop critical and creative thinking, as well as other higher-order thinking skills.
                                                            </p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">3</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">4</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">5</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">6</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">7</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">No</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <p>3. Manages classroom structure to engage learners, individually or in groups, in meaningful exploration, discovery and hands-on activities within a range of physical learning environments.</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">3</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">4</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">5</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">6</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">7</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">No</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <p>4. Manages learner behavior constructively by applying positive and nonviolent discipline to ensure learning-focused environments </p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">3</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">4</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">5</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">6</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">7</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">No</p>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <p>5. Plans, manages and implements developmentally sequenced teaching and learning processes to meet curriculum requirements and varied teaching contexts .</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">3</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">4</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">5</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">6</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">7</p>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <p class="mx-2">No</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-group mb-3">
                                                            <label for="comments" class="form-label">Other
                                                                comments</label>
                                                            <textarea type="text" class="form-control" id="comments" placeholder="Enter comments" required></textarea>
                                                        </div>
                                                        <div class="form-group mb-3 d-flex flex-row-reverse">
                                                            <button class="btn btn-primary" type="submit">Insert
                                                                Record</button>
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
