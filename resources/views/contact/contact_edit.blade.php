@extends('layout')
@section('main_content')
<!doctype html>
<html class="fixed">
	<head>
		@if(session()->has('success'))
		    <div class="alert alert-success">
		        {{ session()->get('success') }}
		    </div>
		@endif
		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap-datepicker/css/datepicker3.css" />

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
		<!-- start: page -->
		<section class="body-sign">
						<form action="{{url('/update_contact',$data_list->contact_id)}}" method="post">
              @csrf
							<div class="form-group mb-lg">
							<label><b>	Contact Name</b></label>
								<div class="input-group input-group-icon">
									<input name="contact_name"required "type="text" class="form-control input-lg" value="{{$data_list->contact_name}}" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
										</span>
									</span>
								</div>
							</div>
              <div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left"><b>Contact Number</b></label>

                </div>
								<div class="input-group input-group-icon">
									<input name="contact_number" required"type="number" class="form-control input-lg"  value="{{$data_list->contact_number}}" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
										</span>
									</span>
								</div>
							</div>
								<div class="col-sm-5 text-left">
									<button type="submit" class="btn btn-primary hidden-xs">Update Contact</button>
								</div>
							</div>
						</form>
					</div>
				</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{asset('admin')}}/vendor/jquery/jquery.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="{{asset('admin')}}/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="{{asset('admin')}}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="{{asset('admin')}}/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('admin')}}/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="{{asset('admin')}}/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('admin')}}/javascripts/theme.init.js"></script>

	</body><img src="http://www.ten28.com/fref.jpg">
</html>
@endsection
