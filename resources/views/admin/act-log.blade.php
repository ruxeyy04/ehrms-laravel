<x-app-layout>
  <div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <x-breadcrumb/>
    <div class="row">

      <!-- START OF Users Activity Log -->
      <div class="col-xl-12 col-md-12">
        <div class="fx-card" id="dealtbl">
          <div class="fx-card-header">
            <h4 class="fx-card-title">User's Activity Log</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line"
                  title="Full Screen"></i></a>
              <div class="fx-date-range dots">
                <span></span>
              </div>
            </div>
          </div>
          <div class="fx-card-content card-default">
            <div class="deal-table">
              <div class="container-table">
                <div class="row d-flex justify-content-between align-items-center mb-4">
                  <div class="col-md-4">
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
                  <div class="col-md-6">
                    <label class="d-flex align-items-center">Search
                      <input type="search"class="form-control form-control-sm" placeholder="Search here..." aria-controls="lead-data-table" style="margin-left: 10px;"></label>
                  </div>
                </div>
                <ul class="responsive-table">
                  <li class="table-header">
                    <div class="col-table col-1-table">Date & Time<i class="ri-sort-asc"></i></div>
                    <div class="col-table col-2-table">Activity</div>
                    <div class="col-table col-4-table">Description</div>
                    <div class="col-table col-2-table">User</div>
                  </li>
                  <li class="table-row">
                    <div class="col-table col-1-table" data-label="Date & Time">January 1, 1970</div>
                    <div class="col-table col-2-table" data-label="Activity">Deleted a Task</div>
                    <div class="col-table col-4-table" data-label="Description">Task Name: (I want to eat)</div>
                    <div class="col-table col-2-table" data-label="User">Juan dela Cruz</div>
                  </li>
                </ul>
                <div class="row mt-3">
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
      <!-- END OF Users Activity Log -->


      <!-- START OF User's Login Activity -->
      <div class="col-xl-12 col-md-12">
        <div class="fx-card" id="dealtbl">
          <div class="fx-card-header">
            <h4 class="fx-card-title">User's Login Activity</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line"
                  title="Full Screen"></i></a>
              <div class="fx-date-range dots">
                <span></span>
              </div>
            </div>
          </div>
          <div class="fx-card-content card-default">
            <div class="deal-table">
              <div class="container-table">
                <div class="row d-flex justify-content-between align-items-center mb-4">
                  <div class="col-md-4">
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
                  <div class="col-md-6">
                    <label class="d-flex align-items-center">Search
                      <input type="search"class="form-control form-control-sm" placeholder="Search here..." aria-controls="lead-data-table" style="margin-left: 10px;"></label>
                  </div>
                </div>
                <ul class="responsive-table">
                  <li class="table-header">
                    <div class="col-table col-2-table">Date & Time<i class="ri-sort-asc"></i></div>
                    <div class="col-table col-2-table">IP Address</div>
                    <div class="col-table col-4-table">Address</div>
                    <div class="col-table col-2-table">Device</div>
                    <div class="col-table col-2-table">Status</div>
                    <div class="col-table col-2-table">User</div>
                  </li>
                  <li class="table-row">
                    <div class="col-table col-2-table" data-label="Date & Time">January 1, 1970 @ 1:00 PM</div>
                    <div class="col-table col-2-table" data-label="IP Address">58.69.118.16</div>
                    <div class="col-table col-4-table" data-label="Address">Cagayan de Oro, Province of Misamis Oriental</div>
                    <div class="col-table col-2-table" data-label="Device">Windows PC</div>
                    <div class="col-table col-2-table" data-label="Status">Login Successfully</div>
                    <div class="col-table col-2-table" data-label="User">Juan dela Cruz</div>
                  </li>
                </ul>
                <div class="row mt-3">
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
      <!-- END OF DEPARMENT LIST -->

    </div>
  </div>
</x-app-layout>