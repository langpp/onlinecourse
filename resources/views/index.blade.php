@extends('template/default')
@section('title','Home')
@section('container')

<section class="banner-area-two">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container-fluid social">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="banner-content">
							<h1 class="wow fadeInLeft" data-wow-delay="0.3s">Expert IT training when and where you need it</h1>
							<p class="wow fadeInLeft" data-wow-delay="0.6s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas architecto doloremque fugiat! Tempora, molestias minus mollitia optio laboriosam nulla, sed, numquam ad tempore</p>
							<a href="#" class="default-btn wow fadeInLeft" data-wow-delay="0.9s">
								View Courses
							</a>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="banner-img wow fadeInRight" data-wow-delay="0.3s">
							<img src="{{url('/img/banner-img/banner-img-2.png')}}" alt="Image">
							<div class="banner-shape-1">
								<img src="{{url('/img/banner-img/shape-img-1.png')}}" alt="Image">
							</div>
							<div class="banner-shape-2">
								<img src="{{url('/img/banner-img/shape-img-2.png')}}" alt="Image">
							</div>
							<div class="banner-shape-3">
								<img src="{{url('/img/banner-img/shape-img-3.png')}}" alt="Image">
							</div>
							<div class="banner-shape-4">
								<img src="{{url('/img/banner-img/shape-img-4.png')}}" alt="Image">
							</div>
							<div class="banner-shape-5 rotated">
								<img src="{{url('/img/banner-img/shape-img-5.png')}}" alt="Image">
							</div>
							<div class="banner-shape-6">
								<img src="{{url('/img/banner-img/shape-img-6.png')}}" alt="Image">
							</div>
							<div class="banner-shape-7 rotated">
								<img src="{{url('/img/banner-img/shape-img-7.png')}}" alt="Image">
							</div>
							<div class="banner-shape-8">
								<img src="{{url('/img/banner-img/shape-img-8.png')}}" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="affordable-area pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			<span>Our Affordable</span>
			<h2>Your benefit with Eduon</h2>
			<img src="{{url('/img/section-title-shape.png')}}" alt="Image">
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-affordable one">
					<i class="flaticon-investment"></i>
					<h3>Save time & money</h3>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-affordable two">
					<i class="flaticon-balance"></i>
					<h3>Balance learning with life</h3>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-affordable three">
					<i class="flaticon-online-education"></i>
					<h3>Gain valuable knowledge</h3>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-affordable four">
					<i class="flaticon-route"></i>
					<h3>Finish what you started</h3>
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
							<img src="{{ $all->img }}" alt="Image" style="width: 100%;height: 300px;object-fit: cover;">
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
								<img src="{{ $all->img_pemateri }}" alt="Image" style="width: 70px;height: 70px;object-fit: cover;">
								<h3 class="mb-0">{{ $all->pemateri }}</h3>
								<span>{{ $all->jabatan }}</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- <div class="row justify-content-center">
				<div class="col-lg-3">
					<a href="#" class="default-btn col-lg-12">View Other Course</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
</section>

<section class="feature-area">
	<div class="container">
		<div class="feature-wrap">
			<div class="row m-0">
				<div class="col-lg-4 col-sm-6">
					<div class="single-feature">
						<i class="flaticon-online"></i>
						<h3>Go at your own course</h3>
						<p>Enjoy lifetime access to courses on Eduon website</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="single-feature">
						<i class="flaticon-expert"></i>
						<h3>Learn from our experts</h3>
						<p>Enjoy lifetime access to courses on Eduon website</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
					<div class="single-feature">
						<i class="flaticon-online-class"></i>
						<h3>Find video courses</h3>
						<p>Enjoy lifetime access to courses on Eduon website</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feedback-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Feedback</span>
			<h2>What students say</h2>
			<img src="{{url('/img/section-title-shape.png')}}" alt="Image">
		</div>
		<div class="feedback-slider owl-theme owl-carousel">
			<div class="feedback-item">
				<i class="flaticon-quotation"></i>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				<div class="feedback-title">
					<img src="{{url('/img/feedback-img/feedback-img-1.jpg')}}" alt="Image">
					<h3>Jessica Molony</h3>
					<span>Designer</span>
				</div>
			</div>
			<div class="feedback-item">
				<i class="flaticon-quotation"></i>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				<div class="feedback-title">
					<img src="{{url('/img/feedback-img/feedback-img-2.jpg')}}" alt="Image">
					<h3>Juhon Dew</h3>
					<span>Marketer </span>
				</div>
			</div>
			<div class="feedback-item">
				<i class="flaticon-quotation"></i>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				<div class="feedback-title">
					<img src="{{url('/img/feedback-img/feedback-img-3.jpg')}}" alt="Image">
					<h3>Kilva Smith</h3>
					<span>Designer</span>
				</div>
			</div>
		</div>
	</div>
	<div class="feedback-shape-1">
		<img src="{{url('/img/feedback-img/feedback-shape-1.png')}}" alt="Image">
	</div>
	<div class="feedback-shape-2">
		<img src="{{url('/img/feedback-img/feedback-shape-2.png')}}" alt="Image">
	</div>
</section>

<div class="partner-area f5f6fa-bg-color ptb-100">
	<div class="container">
		<div class="partner-wrap owl-theme owl-carousel">
			<div class="partner-item">
				<a href="#">
					<img src="{{url('/img/partner-logo/partner-logo-1.png')}}" alt="Image">
				</a>
			</div>
			<div class="partner-item">
				<a href="#">
					<img src="{{url('/img/partner-logo/partner-logo-2.png')}}" alt="Image">
				</a>
			</div>
			<div class="partner-item">
				<a href="#">
					<img src="{{url('/img/partner-logo/partner-logo-3.png')}}" alt="Image">
				</a>
			</div>
			<div class="partner-item">
				<a href="#">
					<img src="{{url('/img/partner-logo/partner-logo-4.png')}}" alt="Image">
				</a>
			</div>
			<div class="partner-item">
				<a href="#">
					<img src="{{url('/img/partner-logo/partner-logo-5.png')}}" alt="Image">
				</a>
			</div>
		</div>
	</div>
</div>