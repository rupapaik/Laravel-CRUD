@extends('layout')

@section('main_content')
<h1>All Contact</h2>
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

		<title>All Contact</title>
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

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/select2/select2.css" />
		<link rel="stylesheet" href="{{asset('admin')}}/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
						<img src="{{asset('admin')}}/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
        <div class="header-right">

          <form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
          <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
      		</div>
    	</header>

					<!-- table -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>

								<h2 class="panel-title">Data Show</h2>
							</header>
            </td>

            <table class="table table-bordered table-striped mb-none" id="datatable-all-contact">
									<thead>
										<tr>
											<th>Contact Id</th>
											<th>Contact Name</th>
											<th>Contact Number</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                    @foreach($data_list as $key => $data)
        <tr>
          <td>{{$data->contact_id}}</td>
          <td>{{$data->contact_name}}</td>
          <td>{{$data->contact_number}}</td>
          <td class="actions">
               <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
               <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
               <a href="{{URL::to('/edit_contact/'.$data->contact_id)}}" class="btn btn-info">Edit</a>
              <a href="{{URL::to('/delete_contact/'.$data->contact_id)}}" class="btn btn-danger">Delete</a>
             </td>
            </tr>
          @endforeach
    		</tbody>
			</table>
  	</section>


 		<!-- Vendor -->
		<script src="{{asset('admin')}}/vendor/jquery/jquery.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="{{asset('admin')}}/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="{{asset('admin')}}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="{{asset('admin')}}/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="{{asset('admin')}}/vendor/select2/select2.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="{{asset('admin')}}/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('admin')}}/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="{{asset('admin')}}/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('admin')}}/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="{{asset('admin')}}/javascripts/tables/examples.datatables.editable.js"></script>
    <script>

    $('#datatable-all-contact').dataTable( {
  "language": {
    "paginate": {
      "previous": "Previous page"
    }
  }
} );

    </script>
	</body>
</html>
@endsection
