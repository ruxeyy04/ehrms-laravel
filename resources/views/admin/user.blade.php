<x-app-layout>
  <div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <x-breadcrumb />
    <div class="row">

        <!-- START OF USER LIST -->
        <div class="col-xl-12 col-md-12">
          <div class="fx-card" id="dealtbl">
            <div class="fx-card-header">
              <h4 class="fx-card-title">User List</h4>
              <div class="header-tools">
                <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line"
                    title="Full Screen"></i></a>
                <div class="fx-date-range dots m-r-10">
                  <span></span>
                </div>
                <button class="fx-btn ripple-btn color-dark" style="height: 30px !important"><i class="ri-user-add-line m-r-10"></i>User</button>
              </div>
            </div>
            <div class="fx-card-content card-default">
              <div class="deal-table">
                <div class="container-table">
                  <div class="row d-flex justify-content-between align-items-center mb-4">
                    <div class="col-md-7 mt-2">
                      <label class="d-flex align-items-center">Show 
                      <select name="lead-data-table_length"
                          aria-controls="lead-data-table" class="form-control form-select form-control-sm" style="width: 60px; margin: 0 10px 0 10px;">
                          <option value="5">5</option>
                          <option value="20">20</option>
                          <option value="30">30</option>
                          <option value="50">50</option>
                          <option value="75">75</option>
                          <option value="-1">All</option>
                        </select> entries
                      </label>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end">
                      <label class="d-flex align-items-center mt-2">Search
                        <input type="search"class="form-control form-control-sm" placeholder="Search here..." aria-controls="lead-data-table" style="margin-left: 10px;"></label>
                    </div>                        
                  </div>
                  <ul class="responsive-table">
                    <li class="table-header">
                      <div class="col-table col-1-table">#<i class="ri-sort-asc"></i></div>
                      <div class="col-table col-2-table">Employee Name</div>
                      <div class="col-table col-2-table">Email</div>
                      <div class="col-table col-2-table">Employee No</div>
                      <div class="col-table col-3-table">Job Title</div>
                      <div class="col-table col-3-table">Role</div>
                      <div class="col-table col-2-table">Action</div>
                    </li>
                    <li class="table-row">
                      <div class="col-table col-1-table" data-label="#">1</div>
                      <div class="col-table col-2-table" data-label="Employee Name">Juan Cruz</div>
                      <div class="col-table col-2-table" data-label="Email">samplemail@gmail.com</div>
                      <div class="col-table col-2-table" data-label="Employee No">99999</div>
                      <div class="col-table col-3-table" data-label="Job Title">Sample Job</div>
                      <div class="col-table col-3-table" data-label="Role">Sample Role</div>
                      <div class="col-table col-2-table" data-label="Action">
                        <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-success">
                          <i class="ri-information-line"></i>
                        </button>
                        <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false" data-display="static">
                          <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </div>
                    </li>
                  </ul>
                  <div class="row ">
                    <div class="col-md-8 dataTables_info showingEntries">Showing 1 to 10 of 10 entries</div>
                    <div class="col-md-4 text-center" id="recent_order_paginate">
                      <ul class="pagination pageCustom">
                          <li class="paginate_button page-item previous disabled" id="recent_order_previous">
                              <a href="#" aria-controls="recent_order" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                          </li>
                          <li class="paginate_button page-item active">
                              <a href="#" aria-controls="recent_order" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                          </li>
                          <li class="paginate_button page-item next disabled" id="recent_order_next">
                              <a href="#" aria-controls="recent_order" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF EMPLOYEE LIST -->
      
        
    </div>
  </div>
</x-app-layout>