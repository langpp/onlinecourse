@extends('template/default')
@section('title','Course')
@section('container')

<section class="single-course-area ptb-100 pt-125">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="single-course-content">
					<h3>{{ $course->title }}</h3>
					<div class="row align-items-center">
						<div class="col-lg-4 col-sm-4">
							<div class="course-rating">
								<img src="../{{ $course->img_pemateri }}" alt="Image">
								<h4><a href="#">{{ $course->pemateri }}</a></h4>
								<span>{{ $course->jabatan }}</span>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="course-rating pl-0 text-center">
								<h4>Categories:</h4>
								<span>{{ $course->kategori }}</span>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="course-rating star pl-0">
								<h4>Reviews</h4>
								<div class="product-review">
									<div class="rating">
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
									</div>
									<a href="#" class="rating-count">2 reviews</a>
								</div>
							</div>
						</div>
					</div>
					<iframe width="100%" height="480" src="{{ $course->url_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<h3>Course Description</h3>
				<p>{{ $course->tentang_kelas }}</p>
				<br>
				<h3>What you’ll learn?</h3>
				<ul class="course-list">
					<?php $pelajari = explode(";", $course->pelajari) ?>
					@foreach($pelajari as $pelajar)
					<li>
						<i class="bx bx-check"></i>
						{{$pelajar}}
					</li>
					@endforeach
				</ul>
				<br>
				<h3>Certification Online & Screenshot</h3>
					<img src="../{{ $course->sertifikat_kelas }}" alt="Image" style="width: 100px;height: 100px;object-fit: cover;">
					<img src="../{{ $course->screenshot1 }}" alt="Image" style="width: 100px;height: 100px;object-fit: cover;">
					<img src="../{{ $course->screenshot2 }}" alt="Image" style="width: 100px;height: 100px;object-fit: cover;">
				<br>
				<br>
				<div class="curriculum-content">
					<h3>Part Course</h3>
					<div class="curriculum-list">
						<h4>{{$course->part}}</h4>
						<ul>
							@foreach($part as $partall)
							<li>
								<a href="{{url('/course')}}/{{$partall->slug}}" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									{{$partall->title}}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="account-wrap">
					<ul>
						<li>
							Tingkat <span>{{ $course->tingkat }}</span>
						</li>
						<li>
							Kategori <span>{{ $course->kategori }}</span>
						</li>
						<li>
							Jenis Course <span>{{ $course->premium }}</span>
						</li>
						<li>
							Price <span class="bold">Rp {{ number_format($course->price,0,",",".") }}</span>
						</li>
						<li>
							Free Sertifikat <span>@if($course->sertifikat == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif</span>
						</li>
						<li>
							Langganan <span>@if($course->langganan == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif</span>
						</li>
						<li>
							Sekali Bayar <span>@if($course->sekalibayar == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif</span>
						</li>
						<li>
							Konsultasi <span>@if($course->konsultasi == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif</span>
						</li>
						<li>
							Demo Project: <a href="{{$course->demo_project}}}" target="_blank">Klik Disini</a>
						</li>
					</ul>
					<a href="#" class="default-btn">Book now</a>
					<div class="social-content">
						<p>
							Share this course
							<i class="bx bxs-share-alt"></i>
						</p>
						<ul>
							<li>
								<a href="#">
									<i class='bx bxl-facebook'></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class='bx bxl-twitter'></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class='bx bxl-instagram'></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class='bx bxl-behance'></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<br>
				<div class="account-wrap">
					<ul>
						<li>
							Tools :  <ul class="course-list">
							<?php $tools = explode(";", $course->tools) ?>
							@foreach($tools as $tool)
							<li>
								<i class="bx bx-check"></i>
								{{$tool}}
							</li>
							@endforeach
						</ul>
						</li>
						<li>
							Sistem Operasi :  <ul class="course-list">
							<?php $sistemoperasi = explode(";", $course->sistemoperasi) ?>
							@foreach($sistemoperasi as $sisop)
							<li>
								<i class="bx bx-check"></i>
								{{$sisop}}
							</li>
							@endforeach
						</ul>
						</li>
						<li>
							Ram <span>{{$course->ram}}</span>
						</li>
						<li>
							Ram <span>{{$course->rom}}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="courses-two-area f5f6fa-bg-color ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Popular Courses</span>
			<h2>Popular online courses</h2>
			<img src="{{url('/img/section-title-shape.png')}}" alt="Image">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				@foreach ($allcourse as $all)
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}/{{$all->slug}}">
							<img src="../{{ $all->img }}" alt="Image" style="width: 100%;height: 300px;object-fit: cover;">
						</a>
						<div class="course-content">
							<span class="price">Rp {{ number_format($all->price,0,",",".") }}</span>
							<span class="tag">{{ $all->kategori }}</span>
							<a href="{{url('/course')}}/{{$all->slug}}">
								<h3>{{ $all->title }}</h3>
							</a>
							<ul class="rating">
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>
							<ul class="lessons">
								<li>{{ $all->tingkat }}</li>
								<li class="float">{{ $all->premium }}</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>@if($all->sekalibayar == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Sekali Bayar</li>
								<li class="float">@if($all->langganan == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>@if($all->sertifikat == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Free Sertifikat</li>
								<li class="float">@if($all->konsultasi == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="../{{ $all->img_pemateri }}" alt="Image" style="width: 70px;height: 70px;object-fit: cover;">
								<h3 class="mb-0">{{ $all->pemateri }}</h3>
								<span>{{ $all->jabatan }}</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
</section>