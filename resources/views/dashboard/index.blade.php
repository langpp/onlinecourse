<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Dashboard - Course</title>

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
						<li class="active"><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-fire"></i> <span>Course</span></a></li>
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
							<div class="breadcrumb-item">Course</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>All Data Course</h4>
										<div class="card-header-action">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaladd"><i class="fas fa-plus"></i></button>
										</div>
									</div>
									<div class="card-body">
										<table class="table table-hover table-striped dataTables">
											<thead>
												<tr>
													<th>No</th>
													<th>Judul</th>
													<th>Kategori</th>
													<th>Level</th>
													<th>Harga</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; ?>
												@foreach ($allcourse as $all)
												<tr>
													<td>{{$no++}}</td>
													<td><a class="text-primary" href="{{url('course')}}/{{$all->slug}}">{{ $all->title }}</a></td>
													<td>{{ $all->kategori }}</td>
													<td>{{ $all->tingkat }}</td>
													<td>Rp {{ number_format($all->price,0,",",".") }}</td>
													<td>
														<button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#myModaledit{{ $all->id_course }}" aria-hidden="true" data-backdrop="false"><i class="fas fa-edit"></i></button>
														<button class="btn btn-danger btn-sm" type="button" onclick="deleteCourse('{{ $all->id_course }}')"><i class="fas fa-trash"></i></button>
														<!-- The Modal -->
														<div class="modal fade" id="myModaledit{{ $all->id_course }}">
															<div class="modal-dialog modal-dialog-centered modal-lg">
																<div class="modal-content">

																	<form action='{{url("/course/editcourse")}}' method="POST" enctype="multipart/form-data">
																		<!-- Modal Header -->
																		<div class="modal-header">
																			<h4 class="modal-title">Edit Course {{$all->title}}</h4>
																			<button type="button" class="close" data-dismiss="modal">&times;</button>
																		</div>

																		<!-- Modal body -->
																		<div class="modal-body">
																			<div class="row">
																				<input type="hidden" name="_token" value="{{ csrf_token() }}">
																				<input type="hidden" name="id_course" value="{{ $all->id_course }}">
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Judul Course</label>
																						<input type="text" class="form-control" name="juduledit" placeholder="Judul Course" required="" value="{{ $all->title }}">
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Level</label>
																						<select class="form-control" name="leveledit" required="">
																							<option value="Semua Level" @if($all->tingkat == "Semua Level") selected @endif>Semua Level</option>
																							<option value="Beginner" @if($all->tingkat == "Beginner") selected @endif>Beginner</option>
																							<option value="Intermediate" @if($all->tingkat == "Intermediate") selected @endif>Intermediate</option>
																							<option value="Expert" @if($all->tingkat == "Expert") selected @endif>Expert</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Harga</label>
																						<input type="int" class="form-control" name="hargaedit" placeholder="Harga Course" required="" value="{{ $all->price }}">
																					</div>
																				</div>
																				<div class="col-lg-12">
																					<div class="form-group">
																						<label>Tentang Kelas</label>
																						<textarea rows="20" type="text" class="form-control" name="tentangedit" placeholder="Tentang Kelas" required="">{{ $all->tentang_kelas }}</textarea>
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Url Video Course</label>
																						<input type="text" class="form-control" name="urledit" placeholder="Url Course" required="" value="{{ $all->url_video }}">
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Gambar Course</label>
																						<input type="file" class="form-control" name="gambaredit" accept="image/x-png,image/gif,image/jpeg">
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Jenis Course</label>
																						<select class="form-control" name="jenisedit" required="">
																							<option value="Premium" @if($all->premium == "Premium") selected @endif>Premium</option>
																							<option value="Starter" @if($all->premium == "Starter") selected @endif>Starter</option>
																							<option value="Freemium" @if($all->premium == "Freemium") selected @endif>Freemium</option>
																							<option value="Subscribe" @if($all->premium == "Subscribe") selected @endif>Subscribe</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Kategori Course</label>
																						<select class="form-control" name="kategoriedit" required="">
																							<option value="Design" @if($all->premium == "Design") selected @endif>Design</option>
																							<option value="Development" @if($all->premium == "Development") selected @endif>Development</option>
																							<option value="Soft Skill" @if($all->premium == "Soft Skill") selected @endif>Soft Skill</option>
																							<option value="Lainnya" @if($all->premium == "Lainnya") selected @endif>Lainnya</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Tools</label>
																						<input type="text" class="form-control" name="toolsedit" placeholder="Tools Course" required="" value="{{ $all->tools }}">
																						<small>Gunakan ; (titik koma) untuk membuat tools lebih dari 1</small>
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Sistem Operasi</label>
																						<input type="text" class="form-control" name="sistemoperasiedit" placeholder="Sistem Operasi Course" required="" value="{{ $all->sistemoperasi }}">
																						<small>Gunakan ; (titik koma) untuk membuat yang dipelajari lebih dari 1</small>
																					</div>
																				</div>
																				<div class="col-lg-2">
																					<div class="form-group">
																						<label>RAM</label>
																						<input type="text" class="form-control" name="ramedit" placeholder="{{ $all->ram }}" required="" value="4 gb">
																					</div>
																				</div>
																				<div class="col-lg-2">
																					<div class="form-group">
																						<label>ROM</label>
																						<input type="text" class="form-control" name="romedit" placeholder="{{ $all->rom }}" required="" value="min 10gb">
																					</div>
																				</div>
																				<div class="col-lg-12">
																					<div class="form-group">
																						<label>Yang Akan Dipelajari</label>
																						<textarea rows="20" type="text" class="form-control" name="pelajariedit" placeholder="Yang Akan Dipelajari" required="">{{ $all->pelajari }}</textarea>
																						<small>Gunakan ; (titik koma) untuk membuat yang dipelajari lebih dari 1</small>
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Sertifikat</label>
																						<select class="form-control" name="sertifikatedit" required="">
																							<option value="0" @if($all->sertifikat == "0") selected @endif>Ya</option>
																							<option value="1" @if($all->sertifikat == "1") selected @endif>Tidak</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Konsultasi</label>
																						<select class="form-control" name="konsultasiedit" required="">
																							<option value="0" @if($all->konsultasi == "0") selected @endif>Ya</option>
																							<option value="1" @if($all->konsultasi == "1") selected @endif>Tidak</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Sekali Bayar</label>
																						<select class="form-control" name="sekalibayaredit" required="">
																							<option value="0" @if($all->sekalibayar == "0") selected @endif>Ya</option>
																							<option value="1" @if($all->sekalibayar == "1") selected @endif>Tidak</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3">
																					<div class="form-group">
																						<label>Langganan</label>
																						<select class="form-control" name="langgananedit" required="">
																							<option value="0" @if($all->langganan == "0") selected @endif>Ya</option>
																							<option value="1" @if($all->langganan == "1") selected @endif>Tidak</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Pemateri</label>
																						<input type="text" class="form-control" name="pemateriedit" placeholder="Pemateri Course" required="" value="{{ $all->pemateri }}">
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Gambar Pemateri</label>
																						<input type="file" class="form-control" name="gambarpemateriedit" accept="image/x-png,image/gif,image/jpeg">
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Jabatan Pemateri</label>
																						<input type="text" class="form-control" name="jabatanpemateriedit" placeholder="Jabatan Pemateri Course" required="" value="{{ $all->jabatan }}">
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Part Course</label>
																						<input type="text" class="form-control" name="partedit" placeholder="Part Course" required="" value="{{ $all->part }}">
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Demo Course</label>
																						<input type="text" class="form-control" name="demoedit" placeholder="Demo Course" required="" value="{{ $all->demo_project }}">
																					</div>
																				</div>
																				<div class="col-lg-4">
																					<div class="form-group">
																						<label>Sertifikat Course</label>
																						<input type="file" class="form-control" name="imgsertifikatedit" accept="image/x-png,image/gif,image/jpeg">
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-group">
																						<label>Screenshot Project1</label>
																						<input type="file" class="form-control" name="screenshot1edit" accept="image/x-png,image/gif,image/jpeg">
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-group">
																						<label>Screenshot Project 2</label>
																						<input type="file" class="form-control" name="screenshot2edit" accept="image/x-png,image/gif,image/jpeg">
																					</div>
																				</div>
																			</div>
																		</div>
																		<!-- Modal footer -->
																		<div class="modal-footer">
																			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																			<button type="submit" class="btn btn-info">Simpan</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</td>
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

			<!-- The Modal -->
			<div class="modal fade" id="myModaladd">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content">

						<form action='{{url("/course/addcourse")}}' method="POST" enctype="multipart/form-data">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Add New Course</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="row">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="col-lg-4">
										<div class="form-group">
											<label>Judul Course</label>
											<input type="text" class="form-control" name="juduladd" placeholder="Judul Course" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Level</label>
											<select class="form-control" name="leveladd" required="">
												<option value="Semua Level">Semua Level</option>
												<option value="Beginner">Beginner</option>
												<option value="Intermediate">Intermediate</option>
												<option value="Expert">Expert</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Harga</label>
											<input type="int" class="form-control" name="hargaadd" placeholder="Harga Course" required="">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Tentang Kelas</label>
											<textarea rows="20" type="text" class="form-control" name="tentangadd" placeholder="Tentang Kelas" required=""></textarea>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Url Video Course</label>
											<input type="text" class="form-control" name="urladd" placeholder="Url Course" required="">
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Gambar Course</label>
											<input type="file" class="form-control" name="gambaradd" required="" accept="image/x-png,image/gif,image/jpeg">
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Jenis Course</label>
											<select class="form-control" name="jenisadd" required="">
												<option value="Premium">Premium</option>
												<option value="Starter">Starter</option>
												<option value="Freemium">Freemium</option>
												<option value="Subscribe">Subscribe</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Kategori Course</label>
											<select class="form-control" name="kategoriadd" required="">
												<option value="Design">Design</option>
												<option value="Development">Development</option>
												<option value="Soft Skill">Soft Skill</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Tools</label>
											<input type="text" class="form-control" name="toolsadd" placeholder="Tools Course" required="">
											<small>Gunakan ; (titik koma) untuk membuat tools lebih dari 1</small>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Sistem Operasi</label>
											<input type="text" class="form-control" name="sistemoperasiadd" placeholder="Sistem Operasi Course" required="">
											<small>Gunakan ; (titik koma) untuk membuat yang dipelajari lebih dari 1</small>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label>RAM</label>
											<input type="text" class="form-control" name="ramadd" placeholder="Ram Course" required="">
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label>ROM</label>
											<input type="text" class="form-control" name="romadd" placeholder="Rom Course" required="">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Yang Akan Dipelajari</label>
											<textarea rows="20" type="text" class="form-control" name="pelajariadd" placeholder="Yang Akan Dipelajari" required=""></textarea>
											<small>Gunakan ; (titik koma) untuk membuat yang dipelajari lebih dari 1</small>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Sertifikat</label>
											<select class="form-control" name="sertifikatadd" required="">
												<option value="0">Ya</option>
												<option value="1">Tidak</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Konsultasi</label>
											<select class="form-control" name="konsultasiadd" required="">
												<option value="0">Ya</option>
												<option value="1">Tidak</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Sekali Bayar</label>
											<select class="form-control" name="sekalibayaradd" required="">
												<option value="0">Ya</option>
												<option value="1">Tidak</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Langganan</label>
											<select class="form-control" name="langgananadd" required="">
												<option value="0">Ya</option>
												<option value="1">Tidak</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Pemateri</label>
											<input type="text" class="form-control" name="pemateriadd" placeholder="Pemateri Course" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Gambar Pemateri</label>
											<input type="file" class="form-control" name="gambarpemateriadd" accept="image/x-png,image/gif,image/jpeg">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Jabatan Pemateri</label>
											<input type="text" class="form-control" name="jabatanpemateriadd" placeholder="Jabatan Pemateri Course" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Part Course</label>
											<input type="text" class="form-control" name="partadd" placeholder="Part Course" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Demo Course</label>
											<input type="text" class="form-control" name="demoadd" placeholder="Demo Course" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Sertifikat Course</label>
											<input type="file" class="form-control" name="imgsertifikatadd" accept="image/x-png,image/gif,image/jpeg">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Screenshot Project1</label>
											<input type="file" class="form-control" name="screenshot1add" accept="image/x-png,image/gif,image/jpeg">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Screenshot Project 2</label>
											<input type="file" class="form-control" name="screenshot2add" accept="image/x-png,image/gif,image/jpeg">
										</div>
									</div>
								</div>
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-info">Simpan</button>
							</div>
						</form>
					</div>
				</div>
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

		function deleteCourse(id_course){
			swal({
				title: "Apa Anda Yakin Ingin Menghapus Data Ini?",
				text: "Data Yang Sudah Dihapus Tidak Dapat Dikembalikan!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
			            url: '{{url("/course/deletecourse")}}',
			            data: {id_course : id_course, "_token": "{{ csrf_token() }}",},
			            type: 'POST',
			            datatype: "JSON",
			            success: function (response) {
			              if (response == "ok") {
			                swal("Notifikasi", "Data Berhasil Dihapus", "success");
			                setTimeout(function(){ location.reload(); }, 1000);
			              }else{
			                swal("Notifikasi", "Data Gagal Dihapus", "error");
			              }
			            }
			          });
				} else {
				}
			});
		} 

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
