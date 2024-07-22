<x-app-layout>
  <div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <x-breadcrumb />
    <div class="row">
      <div class="col-xl-3  col-md-3">
        <div class="fx-card special primary">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Pending Leaves</h4>
                <h5>0</h5>
              </div>
              <span class="card-icon"><i class="ri-file-history-fill"></i></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="fx-card special primary">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Approve Leaves</h4>
                <h5>23</h5>
              </div>
              <span class="card-icon"><i class="ri-file-user-fill"></i></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="fx-card special primary">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Disapproved leaves</h4>
                <h5>3</h5>
              </div>
              <span class="card-icon"><i class="ri-file-forbid-fill"></i></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="fx-card special primary">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Rejected Leaves</h4>
                <h5>3</h5>
              </div>
              <span class="card-icon"><i class="ri-file-shred-fill"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-4 col-md-12">
        <div class="fx-card">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Notes</h4>
            <div class="header-tools">
              <a href="#!" class="link" title="Add Note"><i class="ri-add-circle-line"></i></a>
            </div>
          </div>
          <div class="fx-card-content todo-max-height fx-simplebar" data-simplebar>
            <div class="todo-list">
              <form>
                <div class="form-group">
                  <label for="todo1">
                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime
                      ducimus ipsa fugiat rem quo laborum alias? Sit blanditiis non
                      consequuntur cumque aliquam. Illum velit a in dolor minima qui
                      at?</span>
                    <span class="date-time">6:30AM, Today</span>
                  </label>
                  <div class="dropdown todo-settings drop-settings">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">Remove</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Edit note</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="form-group">
                  <label for="todo1">
                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
                      ipsam distinctio ipsum fuga modi sit suscipit? Iure ipsam at atque
                      maiores delectus aperiam tenetur, possimus tempore, expedita odio
                      nemo voluptas?</span>
                    <span class="date-time">8AM, Today</span>
                  </label>
                  <div class="dropdown todo-settings drop-settings">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">Remove</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Edit note</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12">
        <div class="fx-card">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Activiy</h4>
            <div class="header-tools">
              <div class="dropdown" title="Settings">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">Yesterday</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Last 7 Days</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">This Month</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="fx-card-content activity-max-height fx-simplebar" data-simplebar>
            <div class="activity-list">
              <ul>
                <li>
                  <span class="date-time">8 Thu<span class="time">11:30 AM - 05:10 PM
                    </span></span>
                  <p class="title">Project Submitted from Smith</p>
                  <p class="detail">
                    Lorem Ipsum is simply dummy text of the printing and
                    lorem is typesetting industry.
                  </p>
                </li>
                <li>
                  <span class="date-time warn">7 Wed<span class="time">1:30 PM - 02:30 PM
                    </span></span>
                  <p class="title">Morgus pvt - project due</p>
                  <p class="detail">Project modul delay for some bugs.</p>
                </li>
                <li>
                  <span class="date-time">6 Tue<span class="time">9:30 AM - 11:00 AM
                    </span></span>
                  <p class="title">Interview for management dept.</p>
                  <p class="detail">
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration
                    in some form, by injected humour.
                  </p>
                </li>
                <li>
                  <span class="date-time">5 Mon<span class="time">3:30 AM - 4:00 PM
                    </span></span>
                  <p class="title">Meeting with mr. Ken doe</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12">
        <div class="fx-card">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Events</h4>
            <div class="header-tools">
              <a href="calendar.html" class="link" title="View More"><i class="ri-arrow-right-line"></i></a>
            </div>
          </div>
          <div class="fx-card-content">
            <div class="fx-calendar">
              <div id="eventCalendar" class="calendar-container"></div>
              <div class="fx-event-list">
                <ul>
                  <li>
                    <span class="date active">
                      <span>06</span><span class="day">Thu</span></span>
                    <p>
                      <span class="time">11:15</span>Visit Google
                      Headquarters
                    </p>
                  </li>
                  <li>
                    <span class="date"><span>04</span><span class="day">Tue</span></span>
                    <p>
                      <span class="time">03:40</span>John Doe Birthday
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
     <div class="fx-card" id="dealtbl">
        <div class="fx-card-header">
          <h4 class="fx-card-title">Leave Request</h4>
          <div class="header-tools">
            <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line" title="Full Screen"></i></a>
            <div class="fx-date-range dots">
              <span></span>
            </div>
          </div>
        </div>
        <div class="fx-card-content card-default">
          <div class="deal-table">
            <div class="table-responsive">
              <table id="recent-employee-table" class="table">
                <thead>
                  <tr>
                    <th>Employee Name</th>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>No.Days</th>
                    <th>Date Applied</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="token">Dela Cruz, Juan C.</td>
                    <td>
                      <span class="name">Maternity Leave</span>
                    </td>
                    <td>4/02/2024</td>
                    <td>4/05/2024</td>
                    <td>4 Days</td>
                    <td>4/01/2024</td>
                    <td class="pending">PENDING</td>
                    <td>
                      <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                          <span class="sr-only"><i class="ri-delete-bin-5-fill"></i></span>
                        </button>
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