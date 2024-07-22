<div class="fx-page-title">
  <div class="fx-breadcrumb">
    <h5>
      @if(Route::is('admin.dashboard'))
      Dashboard
      @endif
      @if(Route::is('admin.business_dept'))
      Business Unit & Department List
      @endif
      @if(Route::is('admin.job_salary'))
      Job Title & Monthly Salary List
      @endif
      @if(Route::is('admin.manager'))
      Reporting Managers List
      @endif
      @if(Route::is('admin.employee'))
      Employee List
      @endif
      @if(Route::is('admin.activity_log'))
      Activity Log
      @endif
      @if(Route::is('admin.notes_todo'))
      Note & To-Do
      @endif
      @if(Route::is('admin.user'))
      User List
      @endif
      @if(Route::is('admin.psds'))
      Public Schools District Supervisor List
      @endif
      @if(Route::is('admin.schoolhead'))
      School Head & Principal
      @endif
      @if(Route::is('profile.account'))
      Profile
      @endif
      @if(Route::is('profile.settings'))
      Settings
      @endif
    </h5>
    <ul>
      <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
      @if(Route::is('admin.business_dept'))
      <li><a href="{{ route('admin.business_dept')}}">Business Unit & Department List</a></li>
      @endif
      @if(Route::is('admin.job_salary'))
      <li><a href="{{ route('admin.job_salary')}}">Job Title & Monthly Salary List</a></li>
      @endif
      @if(Route::is('admin.manager'))
      <li><a href="{{ route('admin.manager')}}">Reporting Managers List</a></li>
      @endif
      @if(Route::is('admin.employee'))
      <li><a href="{{ route('admin.employee')}}">Employee List</a></li>
      @endif
      @if(Route::is('admin.activity_log'))
      <li><a href="{{ route('admin.activity_log')}}">Activity Log</a></li>
      @endif
      @if(Route::is('admin.notes_todo'))
      <li><a href="{{ route('admin.notes_todo')}}">Note & To-Do</a></li>
      @endif
      @if(Route::is('admin.user'))
      <li><a href="{{ route('admin.user')}}">User List</a></li>
      @endif
      @if(Route::is('admin.psds'))
      <li><a href="{{ route('admin.psds')}}">Public Schools District Supervisor List</a></li>
      @endif
      @if(Route::is('admin.schoolhead'))
      <li><a href="{{ route('admin.schoolhead')}}">School Head & Principal List</a></li>
      @endif
      @if(Route::is('profile.account'))
      <li><a href="{{ route('profile.account')}}">Profile</a></li>
      @endif
      @if(Route::is('profile.settings'))
      <li><a href="{{ route('profile.settings')}}">User Profile Settings</a></li>
      @endif
    </ul>
  </div>
  {{-- <div class="fx-tools">
    <a href="javascript:void(0)" title="Refresh" class="refresh"><i class="ri-refresh-line"></i></a>
  </div> --}}
</div>
