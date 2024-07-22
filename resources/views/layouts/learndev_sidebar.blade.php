<!-- sidebar -->
<div class="fx-sidebar-overlay"></div>

<div class="fx-sidebar" data-mode="dark">
  <div class="fx-sb-logo">
    <a href="{{ route('learndev.dashboard')}}" class="sb-full">
      <img id="logoImage" src="../../assets/img/logo/full-logo-dk.png" alt="logo" style="width:100%;" />
      <a href="{{ route('learndev.dashboard')}}" class="sb-collapse">
        <img id="logoImage" src="../assets/img/logo/collapse-logo.png" alt="logo" />
      </a>
  </div>
  <div class="fx-sb-wrapper">
    <div class="fx-sb-content">
      <ul class="fx-sb-list">
        <li class="fx-sb-title condense">Main Navigation</li>
        <li class="fx-sb-item">
          <a href="{{ route('learndev.dashboard')}}" class="fx-page-link">
            <i class="ri-dashboard-3-line"></i>
            <span class="condense">
              <span class="hover-title">Dashboard</span>
            </span>
          </a>
        </li>
        <li class="fx-sb-item sb-drop-item">
          <a href="javascript:void(0)" class="fx-drop-toggle">
            <i class="ri-bar-chart-box-line"></i>
            <span class="condense">COT-RPMS Summary<i class="drop-arrow ri-arrow-down-s-line"></i></span>
          </a>
          <ul class="fx-sb-drop condense">
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Total</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Quarterly</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Grade</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Subject Area</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Skills (Teacher)</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Skills (Master Teacher)</a></li>
          </ul>
        </li>
        <li class="fx-sb-item sb-drop-item">
          <a href="javascript:void(0)" class="fx-drop-toggle">
            <i class="ri-bar-chart-2-line"></i>
            <span class="condense">SAT Summary<i class="drop-arrow ri-arrow-down-s-line"></i></span>
          </a>
          <ul class="fx-sb-drop condense">
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Demographic</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Core Behavioral Competencies</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>SAT Teacher I-III</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>SAT Teacher I-IV</a></li>
          </ul>
        </li>
        <li class="fx-sb-item sb-drop-item">
          <a href="javascript:void(0)" class="fx-drop-toggle">
            <i class="ri-file-paper-2-line"></i>
            <span class="condense">Learning and Development<i class="drop-arrow ri-arrow-down-s-line"></i></span>
          </a>
          <ul class="fx-sb-drop condense">
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Trainings Conducted</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Trainings Attended</a></li>
          </ul>
        </li>
        <li class="fx-sb-item sb-drop-item">
          <a href="javascript:void(0)" class="fx-drop-toggle">
            <i class="ri-file-user-line"></i>
            <span class="condense">Employee Management<i class="drop-arrow ri-arrow-down-s-line"></i></span>
          </a>
          <ul class="fx-sb-drop condense">
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Employee Profile</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>PSIPOP Update</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Speaker Profile</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Awards and Recognitions</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Performance Management</a></li>
          </ul>
        </li>
        <li class="fx-sb-item sb-drop-item">
          <a href="javascript:void(0)" class="fx-drop-toggle">
            <i class="ri-file-4-line"></i>
            <span class="condense">Self-Service<i class="drop-arrow ri-arrow-down-s-line"></i></span>
          </a>
          <ul class="fx-sb-drop condense">
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>WFH Time-In/Out</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>ID Card</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Service Record</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Leave Application</a></li>
            <li class="list"><a href="" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Deped Email Request</a></li>
          </ul>
        </li>
        <li class="fx-sb-item sb-drop-item">
          <a href="javascript:void(0)" class="fx-drop-toggle">
            <i class="ri-checkbox-multiple-line"></i>
            <span class="condense">Request Status<i class="drop-arrow ri-arrow-down-s-line"></i></span>
          </a>
          <ul class="fx-sb-drop condense">
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>My Requests</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>My Leave</a></li>
          </ul>
        </li>
        <li class="fx-sb-item sb-drop-item">
          <a href="javascript:void(0)" class="fx-drop-toggle">
            <i class="ri-list-indefinite"></i>
            <span class="condense">PRAISE<i class="drop-arrow ri-arrow-down-s-line"></i></span>
          </a>
          <ul class="fx-sb-drop condense">
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Announcements</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Issuances</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Results</a></li>
            <li class="list"><a href="#" class="fx-page-link drop"><i
                  class="ri-git-commit-line"></i>Infographics</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="fx-sb-footer">
    <a class=" fx-page-link">
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
            <small class="hover-title text-center">Learning and Development</small>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
