<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="js">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="DepEd - EHRMS" />
  <meta name="author" content="DepEd" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>

  <!-- App favicon -->
  <link rel="shortcut icon" href="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" />

  <!-- Icon CSS -->
  <link href="../assets/css/vendor/materialdesignicons.min.css" rel="stylesheet" />
  <link href="../assets/css/vendor/remixicon.css" rel="stylesheet" />
	<link href="../assets/css/vendor/sweetalert2.min.css" rel="stylesheet">
  <!-- Vendor -->
  <link href="../assets/css/vendor/datatables.bootstrap5.min.css" rel="stylesheet" />
  <link href="../assets/css/vendor/responsive.datatables.min.css" rel="stylesheet" />
  <link href="../assets/css/vendor/daterangepicker.css" rel="stylesheet" />
  <link href="../assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/vendor/apexcharts.css" rel="stylesheet" />
  <link href="../assets/css/vendor/simplebar.css" rel="stylesheet" />
  <link href="../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
  <link href="../assets/css/pop-notify.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <script type="module" src="../assets/js/pop-notify.min.js"></script>
  @if(Route::is('*.filemanager'))
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/css/fileinput.min.css'>
  @endif

  
  <!-- Main CSS -->
  <link id="mainCss" href="../assets/css/style.css" rel="stylesheet" />

  <!-- TEST NI SYA -->
  <link id="mainCss" href="../assets/css/test.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
</head>

<body data-fx-mode="{{Auth::user()->user_settings->system_mode ?? 'light'}}">

  <main class="wrapper sb-default">

    @include('layouts.loader')

    @include('layouts.header')
    
    @include('layouts.sidebar')
    
    @include('layouts.notification')

    <!-- main content -->
    <div class="fx-main-content">
      {{ $slot }}
    </div>

    @include('layouts.footer')

    @include('layouts.featuretools')
  </main>

  <!-- Vendor Custom -->
  <script src="../assets/js/vendor/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
  <script src="../assets/js/vendor/simplebar.min.js"></script>
  <script src="../assets/js/vendor/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
  @if (Route::is('admin.dashboard') || Route::is('principal.total') || Route::is('principal.subjectarea')|| Route::is('admin.demographicsummary'))
  <script src="../assets/js/vendor/apexcharts.min.js"></script>
  @endif

  <script src="../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../assets/js/vendor/sweetalert2.min.js"></script>
  <!-- Data Tables -->
  <script src="../assets/js/vendor/jquery.datatables.min.js"></script>
  <script src="../assets/js/vendor/datatables.bootstrap5.min.js"></script>
  <script src="../assets/js/vendor/datatables.responsive.min.js"></script>

  <!-- Caleddar -->
  <script src="../assets/js/vendor/jquery.simple-calendar.js"></script>
  
  <!-- Date Range Picker -->
  <script src="../assets/js/vendor/moment.min.js"></script>
  <script src="../assets/js/vendor/daterangepicker.js"></script>
  <script src="../assets/js/vendor/date-range.js"></script>

  @if(Route::is('admin.psds'))
  <script>
    let getPSDS = '{{ route('getPSDS')}}'
  </script>
  @endif
  @if(Route::is('admin.schoolhead'))
  <script>
    let getSchoolhead = '{{ route('getSchoolhead')}}'
  </script>
  @endif
  <script src="../assets/js/vendor/date-range.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
  <script>
    let getMode = '{{Auth::user()->user_settings->system_mode ?? 'light'}}'
    let getSidebarMode = '{{Auth::user()->user_settings->sidebar_mode ?? 'dark'}}'
    let getHeaderMode = '{{Auth::user()->user_settings->header_mode ?? 'light'}}'
    let getbackgroundsMode = '{{Auth::user()->user_settings->backgrounds_mode ?? 'default'}}'
    let getBoxDesign = '{{Auth::user()->user_settings->box_design ?? 'default'}}'
    let getSettingIcon = '{{Auth::user()->user_settings->setting_icon ?? 'true'}}'
    let routeToolSettings = '{{ route('updatesettings') }}'
    let getUser = '{{route('getemployee')}}'
    let getFamily = '{{route('getfamily')}}'
    let getBusiness = '{{route('getBusinessUnit')}}'
    let getDepartment = '{{route('getDepartmentList')}}'
    let getJobTitle = '{{route('getJobTitle')}}'
    let getMonthlySalary = '{{route('getSalary')}}'
    let getEditBusinessData = '{{ route('fetchBusinessUnit') }}'
    let deleteBusinessUnits = '{{ route('deleteBusinessUnit')}}'
    let getDepartmentData = '{{ route('fetchDepartment') }}'
    let deleteDepartmentData = '{{ route('deletedepartment') }}'

    let editJobTitleData = '{{ route('fetchJobTitle') }}'
    let deleteJobTitle = '{{ route('deleteJobTitle')}}'

    let editSalaryData = '{{ route('fetchSalary') }}'
    let deleteSalary = '{{ route('deleteSalary')}}'
  </script>
  @if(Route::is('admin.psds'))
    <script>
      let addPSDS = true;
    </script>
  @endif
  @if(Route::is('admin.schoolhead'))
  <script>
    let addSchoolhead = true;
  </script>
@endif
  <!-- Main Custom -->
  <script src="../assets/js/main.js"></script>
  <!-- Chart  -->
  @if (Route::is('admin.dashboard') || Route::is('principal.total') || Route::is('principal.subjectarea') || Route::is('admin.demographicsummary') || Route::is('admin.atotal')|| Route::is('admin.subjectarea'))
    <script src="../assets/js/data/dashboard-chart-data.js"></script>
    <script src="../assets/js/vendor/apexcharts.min.js"></script>
    <script src="../assets/js/data/apexchart-page-data.js"></script>
  @endif
  @if(Route::is('*.filemanager'))
  <script>
    let getFileInfo = '{{ route('filestorage-info') }}';
    let getFiles = '{{ route('fileManager') }}';
    let getMaxUploadfile = {{Auth::user()->max_file_upload_size}}
  </script>
  <script src="https://cdn3.devexpress.com/jslib/23.2.5/js/dx.all.js"></script>
  <script src="../assets/js/vendor/apexcharts.min.js"></script>
  <script src="{{ asset('assets/js/data/filemanager-data.js') }}"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/js/plugins/sortable.min.js'></script>
  <script src="{{ asset('assets/js/fileinputupload.js') }}"></script>
    
  @endif
  <!-- Clock JS -->
  <script src="../assets/js/clock.js"></script>
  
  <!-- Responsive Tabs (Draft) -->
  @if (Route::is('*.account') || Route::is('admin.demographicsummary')|| Route::is('admin.cbc'))
    <script src="../assets/js/responsive-tabs.all.js"></script>
    <script src="../assets/js/responsive-tabs.min.js"></script>
  @endif

  <!-- SCROLLER -->
  {{-- <script src="../assets/js/vendor/TweenLite.min.js"></script> --}}

  @if (Route::is('*.account'))
    <script>
      if (errorinModal == "personal")  {
        var myModal = new bootstrap.Modal(document.getElementById("editPersonalinfo"));
        myModal.show()
      } else if (errorinModal == "contact") {
        var myModal = new bootstrap.Modal(document.getElementById("editContactinfo"));
        myModal.show()
      } else if (errorinModal == "family") {
        var myModal = new bootstrap.Modal(document.getElementById("addFamilyInfo"));
        myModal.show()
      }
    </script>
    <script src="{{ asset('assets/js/profile.js')}}"></script>
  @endif

</body>

<script src="../assets/js/fco/planningthelesson.js"></script>
<script src="../assets/js/fco/presentingthelesson.js"></script>

</html>
