<x-app-layout>
  <div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <x-breadcrumb/>
    <div class="row">

      <!-- START OF TO-DO -->
      <div class="col-xl-4 col-md-4">
        <div class="fx-card" id="dealtbl">
          <div class="fx-card-header">
            <h4 class="fx-card-title">To-Do</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line" title="Full Screen"></i></a>
              <div class="fx-date-range dots">
                <span></span>
              </div>
            </div>
          </div>
          <div class="fx-card-content activity-max-height fx-simplebar" data-simplebar>
            <div class="todo-list">
              <form>
                <div class="form-group">
                  <input type="checkbox" id="todo1" name="todo" value="todo">
                  <label for="todo1">
                    <span>Schedule team meeting for the next admin project
                      and assign task.</span>
                    <span class="date-time">6:30AM, Today</span>
                  </label>
                  <div class="dropdown todo-settings drop-settings">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu" style="">
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
                  <input type="checkbox" id="todo2" name="todo" value="todo" checked="">
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
      <!-- END OF TO-DO -->
      <!-- START OF NOTES -->
      <div class="col-xl-4 col-md-4">
        <div class="fx-card" id="dealtbl">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Notes</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line" title="Full Screen"></i></a>
              <div class="fx-date-range dots">
                <span></span>
              </div>
            </div>
          </div>
          <div class="fx-card-content activity-max-height fx-simplebar" data-simplebar>
            <div class="activity-list">
              <ul>
                <li>
                  <span class="date-time">8 Thu<span class="time">11:30 AM
                    </span></span>
                  <div class="dropdown todo-settings drop-settings">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu" style="">
                      <li>
                        <a class="dropdown-item" href="#">Rename</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Remove</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">edit note</a>
                      </li>
                    </ul>
                  </div>
                  <p class="title">Project Submitted from Smith</p>
                  <p class="detail">
                    Lorem Ipsum is simply dummy text of the printing and
                    lorem is typesetting industry.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF NOTES -->
      <!-- START OF CALENDAR -->
      <div class="col-xl-4 col-md-4">
        <div class="fx-card" id="dealtbl">
          <div class="fx-card-header">
            <h4 class="fx-card-title">Calendar</h4>
            <div class="header-tools">
              <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i class="ri-fullscreen-line" title="Full Screen"></i></a>
              <div class="fx-date-range dots">
                <span></span>
              </div>
            </div>
          </div>
          <div class="fx-card-content activity-max-height fx-simplebar" data-simplebar>
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
      <!-- END OF CALENDAR -->
    </div>
  </div>
</x-app-layout>