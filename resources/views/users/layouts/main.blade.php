 <!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 07:06:15 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('/images/zyro-image.png') }}" type="image/png"/>
	<!--plugins-->
	<link href="{{ asset('assets users/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets users/plugins/simplebar/css/simplebar.css" rel="stylesheet') }}" />
	<link href="{{ asset('assets users/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets users/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
	<!-- loader-->
	<link href="{{ asset('assets users/css/pace.min.css') }}" rel="stylesheet"/>
	<script src="{{ asset('assets users/js/pace.min.js') }}"></script>
	{{-- Boostrap 5 --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets users/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets users/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets users/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets users/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets users/css/dark-theme.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets users/css/semi-dark.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets users/css/header-colors.css') }}"/>
	<link rel="stylesheet" href="profile.css">
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('users.partials.side-bar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('users.partials.nav-bar')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				@yield('content')
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('users.partials.footer')
	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets users/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets users/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets users/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets users/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets users/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('assets users/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets users/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('assets users/plugins/chartjs/js/Chart.min.js') }}"></script>
	<script src="{{ asset('assets users/plugins/chartjs/js/Chart.extension.js') }}"></script>
	<script src="{{ asset('assets users/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets users/js/app.js') }}"></script>
	{{-- Sweet-alert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	@stack('js')
</body>
</html>