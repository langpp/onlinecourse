<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Dashboard - Payment</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
	<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{url('assets_dashboard/css/style.css')}}">
	<link rel="stylesheet" href="{{url('assets_dashboard/css/custom.css')}}">
	<link rel="stylesheet" href="{{url('assets_dashboard/css/components.css')}}">
</head>

<body>
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
					</ul>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
						<img alt="image" src="{{url('assets_dashboard/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
						<div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<a href="{{url('dashboard')}}">Online Course</a>
					</div>
					<div class="sidebar-brand sidebar-brand-sm">
						<a href="{{url('dashboard')}}">OC</a>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Dashboard</li>
						<li><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-fire"></i> <span>Course</span></a></li>
						<li class="active"><a class="nav-link" href="{{url('dashboard/payment')}}"><i class="fas fa-dollar-sign"></i> <span>Payment</span></a></li>
						<li class="menu-header">Other Menu</li>
						<li><a class="nav-link" href="#" onclick="logout()"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
					</ul>
					<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
						<a href="{{url('')}}" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
							<i class="fas fa-rocket"></i> Home
						</a>
					</div>
				</aside>
			</div>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Online Course</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
							<div class="breadcrumb-item">Payment</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>All Payment</h4>
									</div>
									<div class="card-body">
										<table class="table table-hover table-striped dataTables text-center">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Lengkap</th>
													<th>Email, No Telp</th>
													<th>Alamat</th>
													<th>Course</th>
													<th>Tanggal</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; ?>
												@foreach ($allpayment as $all)
												<tr>
													<td>{{$no++}}</td>
													<td>{{ $all->first_name }} {{ $all->last_name }}</td>
													<td>{{ $all->email }} <br> {{ $all->phone }}</td>
													<td>{{ $all->address }} - {{ $all->country }}</td>
													<td>{{ $all->title }} - Rp {{ number_format($all->price,0,",",".") }}</td>
													<td>{{ $all->created_at}}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<footer class="main-footer">
				<div class="footer-left">
					Copyright &copy; <div class="bullet"></div> Design By <a href="#">KampusBiner</a>
				</div>
				<div class="footer-right">
					2021
				</div>
			</footer>
		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"
	type="text/javascript"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="{{url('assets_dashboard/js/stisla.js')}}"></script>
	<!-- Template JS File -->
	<script src="{{url('assets_dashboard/js/scripts.js')}}"></script>
	<script src="{{url('assets_dashboard/js/custom.js')}}"></script>
	@if(\Session::has('alert'))
	<script type="text/javascript">swal('Notifikasi', "{{Session::get('alert')}}", "error");</script>
	@endif
	@if(\Session::has('alert-success'))
	<script type="text/javascript">swal('Notifikasi', "{{Session::get('alert-success')}}", "success");</script>
	@endif
	<script type="text/javascript">
		function logout(){
			swal({
				title: "Apa Anda Ingin Keluar?",
				text: "Jika anda keluar maka anda harus login lagi terlebih dahulu!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location.href = '{{url("actionLogout")}}';
				} else {
				}
			});
		} 
	</script>
	<script type="text/javascript">
		window.addEventListener( "pageshow", function ( event ) {
			var historyTraversal = event.persisted || 
			( typeof window.performance != "undefined" && 
				window.performance.navigation.type === 2 );
			if ( historyTraversal ) {
				window.location.reload();
			}
		});
	</script>
</body>
</html>
