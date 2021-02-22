@extends('template/default')
@section('title','Pencarian')
@section('container')
<br>
<section class="courses-two-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Search Courses <u>{{$carian}}</u></span>
			<h2>Search online courses</h2>
			<img src="{{url('/img/section-title-shape.png')}}" alt="Image">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				@foreach ($searchcourse as $search)
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}/{{$search->slug}}">
							<img src="../{{ $search->img }}" alt="Image" style="width: 100%;height: 300px;object-fit: cover;">
						</a>
						<div class="course-content">
							<span class="price">Rp {{ number_format($search->price,0,",",".") }}</span>
							<span class="tag">{{ $search->kategori }}</span>
							<a href="{{url('/course')}}/{{$search->slug}}">
								<h3>{{ $search->title }}</h3>
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
								<li>{{ $search->tingkat }}</li>
								<li class="float">{{ $search->premium }}</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>@if($search->sekalibayar == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Sekali Bayar</li>
								<li class="float">@if($search->langganan == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>@if($search->sertifikat == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Free Sertifikat</li>
								<li class="float">@if($search->konsultasi == "0") <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="../{{ $search->img_pemateri }}" alt="Image" style="width: 70px;height: 70px;object-fit: cover;">
								<h3 class="mb-0">{{ $search->pemateri }}</h3>
								<span>{{ $search->jabatan }}</span>
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