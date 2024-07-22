
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="js">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="DepEd - EHRMS" />
  <meta name="author" content="DepEd" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('assets/img/logo/Full_Size_DepEd_Official_Seal2.png') }}" />
	<title>404 Not Found</title>

	<!-- Main CSS -->
	<link id="mainCss" href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


</head>

<body data-fx-mode="light">
	<main class="wrapper sb-default">
		<section class="auth-section fx-error-page">
			<div class="content-detail">
				<div class="main-info">
					<div class="hero-container">
                        <h1>404</h1>
						<h4>Oops!</h4>
						<p>We're sorry, <br>The page you were looking for doesn't exist anymore.</p>
						<a class="fx-btn ripple-btn color-success" href="{{route('home')}}">Home</a>
					</div>
				</div>
			</div>
		</section>
	</main>

</body>

</html>