<x-app-layout>
  <div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <x-breadcrumb/>
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="fx-card">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Pending Leaves</h4>
                <h5>0</h5>
              </div>
              <span class="icon"><i class="ri-shield-user-line"></i></span>
            </div>
            <div class="mini-chart">
              <div id="userNumbers"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="fx-card">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Approved Leaves</h4>
                <h5>23</h5>
              </div>
              <span class="icon"><i class="ri-calendar-event-fill"></i>
              </span>
            </div>
            <div class="mini-chart">
              <div id="orderNumbers"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="fx-card">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Disapproved Leaves</h4>
                <h5>3</h5>
              </div>
              <span class="icon"><i class="ri-user-add-line"></i></span>
            </div>
            <div class="mini-chart">
              <div id="revenueNumbers"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="fx-card">
          <div class="fx-card-content label-card">
            <div class="title">
              <div class="growth-numbers">
                <h4>Rejected Leaves</h4>
                <h5>23</h5>
              </div>
              <span class="icon"><i class="ri-file-list-fill"></i></span>
            </div>
            <div class="mini-chart">
              <div id="expensesNumbers"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-md-12">
        <div class="fx-card">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Todo</h4>
            <div class="header-tools">
              <a href="{{route('admin.notes_todo')}}" class="link" title="View More"><i class="ri-arrow-right-line"></i></a>
            </div>
          </div>
          <div class="fx-card-content todo-max-height fx-simplebar" data-simplebar>
            <div class="todo-list">
              <form>
                <div class="form-group">
                  <input type="checkbox" id="todo1" name="todo" value="todo" />
                  <label for="todo1">
                    <span>Schedule team meeting for the next admin project
                      and assign task.</span>
                    <span class="date-time">6:30AM, Today</span>
                  </label>
                  <div class="dropdown todo-settings drop-settings">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">Rename</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Add note</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Remove</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">edit note</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="todo2" name="todo" value="todo" checked />
                  <label for="todo2">
                    <span>Create employee list with role for upcoming
                      event.</span>
                    <span class="date-time">8AM, Today</span>
                  </label>
                  <div class="dropdown todo-settings drop-settings">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">Rename</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Add note</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Remove</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">edit note</a>
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
      <div class="col-xl-8 col-md-12">
        <div class="fx-card revenue-overview">
          <div class="fx-card-header header-575">
            <h4 class="fx-card-title">Employee Overview</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card">
                <i class="ri-fullscreen-line" title="Full Screen"></i></a>
              <div class="fx-date-range date" title="Date">
                <span></span>
              </div>
            </div>
          </div>
          <div class="fx-card-content">
            <div class="fx-chart-header">
              <div class="block">
                <h6>Total Employees</h6>
                <h5>
                  233
                  <span class="up"><i class="ri-arrow-up-line"></i>12%</span>
                </h5>
              </div>
              <div class="block">
                <h6>Total Request Leaves</h6>
                <h5>
                  23
                  <span class="up"><i class="ri-arrow-up-line"></i>23%</span>
                </h5>
              </div>
              <div class="block">
                <h6>New Employees</h6>
                <h5>
                  34
                  <span class="down"><i class="ri-arrow-down-line"></i>43%</span>
                </h5>
              </div>
              <div class="block">
                <h6>Total Events</h6>
                <h5>
                  23
                  <span class="up"><i class="ri-arrow-up-line"></i>34%</span>
                </h5>
              </div>
            </div>
            <div class="fx-chart-content">
              <div id="overviewChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>