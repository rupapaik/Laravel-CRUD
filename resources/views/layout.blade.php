<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('admin')}}/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('admin')}}/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('admin')}}/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="{{asset('admin')}}/vendor/modernizr/modernizr.js"></script>
	
	</head>
	<body>
		<section class="body">

						<!-- start: header -->
						<header class="header">
							<div class="logo-container">
								<a href="../" class="logo">
									<img src="{{asset('admin')}}/images/logo.png" height="35" alt="JSOFT Admin" />
								</a>
								<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
									<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
								</div>
							</div>

							<!-- start: search & user box -->
							<div class="header-right">
								<ul class="notifications">
										<div class="dropdown-menu notification-menu large">
									<div class="dropdown-menu notification-menu">
							</div>
						</li>
					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{asset('admin')}}/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="{{asset('admin')}}/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">Rupa Paik</span>
								<span class="role">administrator</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">

						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">

						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="{{URL::to('/dashboard')}}">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="{{URL::to('/addcontact')}}">
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Add Contact</span>
										</a>
									</li>
									<li class="nav-parent">
											<a href="{{URL::to('/allcontact')}}">
												<i class="fa fa-table" aria-hidden="true"></i>
											<span>All Contact</span>
										</a>

						<div class="sidebar-widget widget-stats">
								<div class="widget-header">

									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
							</div>
						</div>

					</div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

				@yield('main_content')
		<!-- Vendor -->
		<script src="{{asset('admin')}}/vendor/jquery/jquery.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="{{asset('admin')}}/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="{{asset('admin')}}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="{{asset('admin')}}/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="{{asset('admin')}}/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="{{asset('admin')}}/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="{{asset('admin')}}/vendor/flot/jquery.flot.js"></script>
		<script src="{{asset('admin')}}/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="{{asset('admin')}}/vendor/flot/jquery.flot.pie.js"></script>
		<script src="{{asset('admin')}}/vendor/flot/jquery.flot.categories.js"></script>
		<script src="{{asset('admin')}}/vendor/flot/jquery.flot.resize.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="{{asset('admin')}}/vendor/raphael/raphael.js"></script>
		<script src="{{asset('admin')}}/vendor/morris/morris.js"></script>
		<script src="{{asset('admin')}}/vendor/gauge/gauge.js"></script>
		<script src="{{asset('admin')}}/vendor/snap-svg/snap.svg.js"></script>
		<script src="{{asset('admin')}}/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="{{asset('admin')}}/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('admin')}}/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="{{asset('admin')}}/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('admin')}}/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="{{asset('admin')}}/javascripts/dashboard/examples.dashboard.js"></script>


	</body>
</html>
