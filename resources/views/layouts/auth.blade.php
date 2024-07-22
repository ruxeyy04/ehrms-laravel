<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="admin, dashboard, crm, analytics, ecommerce, team, vendor, ai chat bot, backend, panel">
    <meta name="description" content="Finx - Best multipurpose admin dashboard template.">
    <meta name="author" content="Maraviya Infotech">

	<title>DepEd | Enterprise Human Resource Management System</title>

	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/img/logo/favicon.ico" />


	<!-- Icon CSS -->
	<link href="assets/css/vendor/materialdesignicons.min.css" rel="stylesheet">
	<link href="assets/css/vendor/remixicon.css" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href='assets/css/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/responsive.datatables.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/daterangepicker.css' rel='stylesheet'>
	<link href="assets/css/vendor/simplebar.css" rel="stylesheet">
	<link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/vendor/apexcharts.css" rel="stylesheet">
	<link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<link href="../assets/css/pop-notify.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <script type="module" src="../assets/js/pop-notify.min.js"></script>
	<!-- Main CSS -->
	<link id="mainCss" href="assets/css/style.css" rel="stylesheet">

</head>

<body data-fx-mode="light">
	@include('layouts.loader')
	<main class="wrapper sb-default">
		{{ $slot }}
	</main>

	<!-- Vendor Custom -->
	<script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
	<script src="assets/js/vendor/simplebar.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/vendor/apexcharts.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
	<!-- Data Tables -->
	<script src='assets/js/vendor/jquery.datatables.min.js'></script>
	<script src='assets/js/vendor/datatables.bootstrap5.min.js'></script>
	<script src='assets/js/vendor/datatables.responsive.min.js'></script>
	<!-- Caleddar -->
	<script src="assets/js/vendor/jquery.simple-calendar.js"></script>
	<!-- Date Range Picker -->
	<script src="assets/js/vendor/moment.min.js"></script>
	<script src="assets/js/vendor/daterangepicker.js"></script>
	<script src="assets/js/vendor/date-range.js"></script>

	<!-- Main Custom -->
	<script src="assets/js/main.js"></script>
</body>
</html>