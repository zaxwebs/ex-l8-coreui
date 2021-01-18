<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CoreUI CSS -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">

	<title>@yield('title', 'Core UI')</title>

</head>

<body class="c-app">

	@include('layouts.partials.sidebar')

	<div class="c-wrapper">
		<header class="c-header">
			<!-- Header content here -->
			<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
				data-class="c-sidebar-lg-show" responsive="true">
				<i class="cil-hamburger-menu"></i>
			</button>
		</header>
		<div class="c-body">
			<main class="c-main">
				@yield('content')
			</main>
		</div>
		<footer class="c-footer">
			<!-- Footer content here -->
			&copy; Zack Webster
		</footer>
	</div>
	<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>