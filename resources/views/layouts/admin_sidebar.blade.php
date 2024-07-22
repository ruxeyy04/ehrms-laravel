<!-- sidebar -->
<div class="fx-sidebar-overlay"></div>

<div class="fx-sidebar" data-mode="dark">
  <div class="fx-sb-logo">
    <a href="{{ route('admin.dashboard')}}" class="sb-full">
      <img id="logoImage" src="../assets/img/logo/full-logo-dk.png" alt="logo" style="width:100%;" />
      <a href="{{ route('admin.dashboard')}}" class="sb-collapse">
        <img id="logoImage" src="../assets/img/logo/collapse-logo.png" alt="logo" />
      </a>
  </div>
  <div class="fx-sb-wrapper">
    <div class="fx-sb-content">
      <ul class="fx-sb-list">
        <li class="fx-sb-title condense">Main Navigation</li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.dashboard')}}" class="fx-page-link">
            <i class="ri-dashboard-3-line"></i>
            <span class="condense">
              <span class="hover-title">Dashboard</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.business_dept')}}" class="fx-page-link">
            <i class="ri-organization-chart"></i>
            <span class="condense">
              <span class="hover-title">Business Unit & Department</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.job_salary')}}" class="fx-page-link">
            <i class="ri-pages-line"></i>
            <span class="condense">
              <span class="hover-title">Job Title & Montly Salary</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item-separator"></li>
        <li class="fx-sb-title condense">Utility Management</li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.manager')}}" class="fx-page-link">
            <i class="ri-shield-user-line"></i>
            <span class="condense">
              <span class="hover-title">Reporting Managers</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.employee')}}" class="fx-page-link">
            <i class="ri-account-box-line"></i>
            <span class="condense">
              <span class="hover-title">Employees</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.user')}}" class="fx-page-link">
            <i class="mdi mdi-account-group-outline"></i>
            <span class="condense">
              <span class="hover-title">Users</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.activity_log')}}" class="fx-page-link">
            <i class="ri-todo-line"></i>
            <span class="condense">
              <span class="hover-title">Activity Log</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item">
          <a href="{{ route('admin.notes_todo')}}" class="fx-page-link">
            <i class="ri-task-line"></i>
            <span class="condense">
              <span class="hover-title">Notes & To-Do</span>
            </span>
          </a>
        </li>


      </ul>
    </div>
  </div>
  <div class="fx-sb-footer">
    <a href="{{ route('admin.notes_todo')}}" class=" fx-page-link">
      <div class="clock-container" id="">
        <div class="mini-clock ">
          <div class="hand hour"></div>
          <div class="hand minute"></div>
          <div class="hand second"></div>
        </div>
      </div>
    </a>

    <div class="digital-clock-container">
      <div class="row">
        <div class="condense" id="clock">
          <div class="digital-clock-container">
            <div class="digitalclock">
              <span id="hrs" data-title="Hrs.">00</span>
              <span>:</span>
              <span id="min" data-title="Mins.">00</span>
              <span>:</span>
              <span id="sec" data-title="Sec.">00</span>
              <span id="ampm" class="ml-3"></span>
            </div>
            <div class="digitalclock">
              <h5 id="dateee">Loading...</h5>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="container profile-sidebar">
      <div class="row d-flex  justify-content-center">
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <i class="ri-user-line"></i>
        </div>
        <div class="col-md-9 d-flex align-items-center">
          <span class="fx-sb-title condense">
            <!-- <span class="hover-title">Ruxe E. Pasok</span> -->
            <small class="hover-title text-center">Administrator</small>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
