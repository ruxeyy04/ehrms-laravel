<x-app-layout>
  <pop-notify hidden>

  </pop-notify>
  <div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <x-breadcrumb/>
    <div class="row">

      <!-- START OF JOBTITLE LIST -->
      <div class="col-xl-6 col-md-6">
        <div class="fx-card" id="dealtbl">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Job Title List</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line"
                  title="Full Screen"></i></a>
                  <button type="button" class="fx-btn ripple-btn color-dark" data-bs-toggle="modal"
                  data-bs-target="#addJobTitle" style="height: 30px !important"><i
                      class="ri-add-line m-r-10"></i>Job Title</button>
            </div>
          </div>
          <div class="fx-card-content card-default">
            <div class="container-fluid">
              <table id="job-title-data" class="table">
                  <thead class="table__thead">
                      <tr>
                          <th class="table__th sorting">No.</th>
                          <th class="table__th sorting">Job Title</th>
                          <th class="table__th sorting">Created At</th>
                          <th class="table__th "></th>
                      </tr>
                  </thead>
                  <tbody class="table__tbody">
                  </tbody>
              </table>
          </div>
          </div>
        </div>
      </div>
      <!-- END OF JOBTITLE LIST -->


      <!-- START OF SALARY LIST -->
      <div class="col-xl-6 col-md-6">
        <div class="fx-card" id="dealtbl">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Monthly Salary List</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line"
                  title="Full Screen"></i></a>
                  <button type="button" class="fx-btn ripple-btn color-dark" data-bs-toggle="modal"
                  data-bs-target="#addSalary" style="height: 30px !important"><i
                      class="ri-add-line m-r-10"></i>Monthly Salary</button>
            </div>
          </div>
          <div class="fx-card-content card-default">
            <div class="container-fluid">
              <table id="monthly-salary-data" class="table">
                  <thead class="table__thead">
                      <tr>
                          <th class="table__th sorting">No.</th>
                          <th class="table__th sorting">Salary Grade</th>
                          <th class="table__th sorting">Step Increment</th>
                          <th class="table__th sorting">Monthly Salary</th>
                          <th class="table__th "></th>
                      </tr>
                  </thead>
                  <tbody class="table__tbody">
                  </tbody>
              </table>
          </div>
          </div>
        </div>
      </div>
      <!-- END OF SALARY LIST -->

    </div>
  </div>
  <!-- ADD JOB TITLE -->
<x-modal icon="ri-add-line" modal_title="Job Title" modal_type="fade" id="addJobTitle" tabindex="-1"
      aria-labelledby="addJobTitleLabel" aria-hidden="true" modal_size="" modal_mode=""
      buttons="false" route-save="{{ route('saveJobTitle') }}">
      
      <div class="gray start-0 d-none"></div>

      {{-- Content Here --}}
      <form action="" id="addJobTitleData">
          @csrf
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group mb-3">
                      <x-textm-input type="text" name="job_title" required
                          :value="old('business_code')" autocomplete="job_title" />
                      <x-inputm-label for="job_title" :value="__('Job Title')"
                          required />
                  </div>
              </div>
          </div>
      </form>
</x-modal>
    <!-- EDIT JOBTITLE -->
<x-modal icon="ri-edit-2-line" modal_title="Job Title" modal_type="fade" id="editJobTitle" tabindex="-1"
        aria-labelledby="editJobTitleLabel" aria-hidden="true" modal_size="" modal_mode=""
        buttons="false" route-save="{{ route('editJobTitle') }}">
        {{-- Content Here --}}
        <form action="" id="editJobTitleData">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" id="id" />
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="job_title" required
                            :value="old('job_title')" autocomplete="job_title" />
                        <x-inputm-label for="job_title" :value="__('Job Title')" />
                    </div>
                </div>
            </div>
        </form>
</x-modal>

  <!-- ADD SALARY -->
  <x-modal icon="ri-add-line" modal_title="Monthly Salary" modal_type="fade" id="addSalary" tabindex="-1"
  aria-labelledby="addSalaryLabel" aria-hidden="true" modal_size="" modal_mode=""
  buttons="false" route-save="{{ route('saveSalary') }}">
  
  <div class="gray start-0 d-none"></div>

  {{-- Content Here --}}
  <form action="" id="addSalaryData">
      @csrf
      <div class="row">
          <div class="col-md-12">
              <div class="form-group mb-3">
                  <x-textm-input type="number" name="salary_grade" required
                      :value="old('salary_grade')" autocomplete="salary_grade" />
                  <x-inputm-label for="salary_grade" :value="__('Salary Grade')"
                      required />    
              </div>
              <div class="form-group mb-3">
                <x-textm-input type="number" name="salary_step" required
                :value="old('salary_step')" autocomplete="salary_step" />
            <x-inputm-label for="salary_step" :value="__('Salary Step Increment')"
                required />   
              </div>
              <div class="form-group mb-3">
                <x-textm-input type="number" name="salary_amount" required
                :value="old('salary_amount')" autocomplete="salary_amount" />
            <x-inputm-label for="salary_amount" :value="__('Salary Amount')"
                required />
              </div>
        
                      

              </div>
          </div>
  </form>
</x-modal>
<!-- EDIT SALARY -->
<x-modal icon="ri-edit-2-line" modal_title="Monthly Salary" modal_type="fade" id="editSalary" tabindex="-1"
    aria-labelledby="editSalaryLabel" aria-hidden="true" modal_size="" modal_mode=""
    buttons="false" route-save="{{ route('editSalary') }}">
    {{-- Content Here --}}
    <div class="gray start-0 d-none"></div>

    <form action="" id="editSalaryData">
        @csrf
        <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="id" id="idd" />
              <div class="form-group mb-3">
                <x-textm-input type="number" name="salary_grade" required
                :value="old('salary_grade')" autocomplete="salary_grade" />
                <x-inputm-label for="salary_grade" :value="__('Salary Grade')"
                    required />    
              </div>
              <div class="form-group mb-3">
                <x-textm-input type="number" name="salary_step" required
                :value="old('salary_step')" autocomplete="salary_step" />
            <x-inputm-label for="salary_step" :value="__('Salary Step Increment')"
                required />  
              </div>
              <div class="form-group mb-3">
                <x-textm-input type="text" name="salary_amount" required
                :value="old('salary_amount')" autocomplete="salary_amount" />
            <x-inputm-label for="salary_amount" :value="__('Salary Amount')"
                required />
              </div>

                    

            </div>
        </div>
    </form>
</x-modal>
</x-app-layout>