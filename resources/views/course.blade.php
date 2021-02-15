@extends('template/default')
@section('title','Course')
@section('container')


<section class="single-course-area ptb-100 pt-125">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="single-course-content">
					<h3>Leading the way with lifelong learning</h3>
					<div class="row align-items-center">
						<div class="col-lg-4 col-sm-4">
							<div class="course-rating">
								<img src="{{url('/img/single-course/rating-img-1.jpg')}}" alt="Image">
								<h4><a href="#">Instructor:</a></h4>
								<span>Jeremy Cioara</span>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="course-rating pl-0 text-center">
								<h4>Categories:</h4>
								<span>Career Advice</span>
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
										<i class='bx bxs-star-half'></i>
									</div>
									<a href="#" class="rating-count">2 reviews</a>
								</div>
							</div>
						</div>
					</div>
					<img src="{{url('/img/single-course/single-course.jpg')}}" alt="Image">
				</div>

				<h3>Course Description</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has svived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>
				<h3>Certification Online</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				<h3>What you’ll learn?</h3>
				<ul class="course-list">
					<li>
						<i class="bx bx-check"></i>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					</li>
					<li>
						<i class="bx bx-check"></i>
						Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</li>
					<li>
						<i class="bx bx-check"></i>
						Quis ipsum suspendisse ultrices gravida.
					</li>
					<li>
						<i class="bx bx-check"></i>
						Risus commodo viverra maecenas accumsan lacus vel facilisis.
					</li>
				</ul>
				<h3>Who This Course is for</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				<div class="curriculum-content">
					<h3>Education introduction</h3>
					<div class="curriculum-list">
						<h4>Section 1</h4>
						<ul>
							<li>
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Introduction
								</a>
								<a href="#" class="meet-time">
									<span class="min">01 hour</span>
									<span class="preview">Preview</span>
								</a>
							</li>
							<li class="transparent">
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Environment setup
								</a>
								<a href="#" class="meet-time">
									<span class="min">02 hours</span>
									<span class="preview">Preview</span>
								</a>
							</li>
							<li>
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Quiz one
								</a>
								<a href="#" class="meet-time">
									<span class="min">01 min</span>
									<span class="preview">4 question</span>
									<i class="bx bxs-lock-alt"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="curriculum-list">
						<h4>Section 2</h4>
						<ul>
							<li>
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Utility modules
								</a>
								<a href="#" class="meet-time">
									<span class="min">03 hours</span>
									<i class="bx bxs-lock-alt"></i>
								</a>
							</li>
							<li class="transparent">
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Express framework
								</a>
								<a href="#" class="meet-time">
									<span class="min">05 min</span>
									<i class="bx bxs-lock-alt"></i>
								</a>
							</li>
							<li>
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Web module
								</a>
								<a href="#" class="meet-time">
									<span class="min">01 hour</span>
									<i class="bx bxs-lock-alt"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="curriculum-list">
						<h4>Section 3</h4>
						<ul>
							<li>
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Video introduction
								</a>
								<a href="#" class="meet-time">
									<span class="min">30 min</span>
									<i class="bx bxs-lock-alt"></i>
								</a>
							</li>
							<li class="transparent">
								<a href="#" class="meet-title">
									<i class="bx bx-right-arrow"></i>
									Web module
								</a>
								<a href="#" class="meet-time">
									<span class="min">05 hours</span>
									<i class="bx bxs-lock-alt"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="account-wrap">
					<ul>
						<li>
							Price <span class="bold">$29.00</span>
						</li>
						<li>
							Start <span>Sep 01, 2020</span>
						</li>
						<li>
							End <span>Sep 02, 2020</span>
						</li>
						<li>
							Event Category <span>Education</span>
						</li>
						<li>
							Total Slot: <span>100</span>
						</li>
						<li>
							Booked Slot: <span>00</span>
						</li>
						<li>
							Website: <a href="#">www.eduon.com</a>
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
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="instructor-content mt-3">
					<div class="row align-items-center">
						<div class="col-lg-4">
							<div class="advisor-img">
								<img src="{{url('/img/instructor-img.jpg')}}" alt="Image">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="advisor-content">
								<a href="#">
									<h3>Anna Dew</h3>
								</a>
								<span>Agile Project Expert</span>
								<p>Jone Smit is a celebrated photographer, author, and writer who brings passion to everything he does.</p>
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
											<i class='bx bxl-youtube'></i>
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
					</div>
				</div>
				<div class="review-content">
					<h3>Course rating</h3>
					<ul class="rating-star">
						<li>
							<i class='bx bxs-star'></i>
						</li>
						<li>
							<i class='bx bxs-star'></i>
						</li>
						<li>
							<i class='bx bxs-star'></i>
						</li>
						<li>
							<i class='bx bxs-star'></i>
						</li>
						<li>
							<i class='bx bxs-star'></i>
						</li>
					</ul>
					<span>5.00 average based on 1 rating</span>
					<div class="course-reviews-content">
						<h3>Reviews</h3>
						<ul class="course-reviews">
							<li>
								<img src="{{url('/img/course-reviews-img.jpg')}}" alt="Image">
								<h3>Anna Dew</h3>
								<span>Cover all my needs</span>
								<p>The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options.</p>
							</li>
						</ul>
					</div>
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
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}">
							<img src="{{url('/img/course-img/course-img-1.jpg')}}" alt="Image">
						</a>
						<div class="course-content">
							<span class="price">Rp 120.000</span>
							<span class="tag">Education</span>
							<a href="{{url('/course')}}">
								<h3>Programming foundations: real-world examples</h3>
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
								<li>0 Lessons</li>
								<li class="float">44 Students</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Sekali Bayar</li>
								<li class="float">Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Free Sertifikat</li>
								<li class="float">Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="{{url('/img/feedback-img/feedback-img-1.jpg')}}" alt="Image">
								<h3 class="mb-0">Jessica Molony</h3>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}">
							<img src="{{url('/img/course-img/course-img-2.jpg')}}" alt="Image">
						</a>
						<div class="course-content">
							<span class="price">Rp 150.000</span>
							<span class="tag">School</span>
							<a href="{{url('/course')}}">
								<h3>Teaching assistant certificate in learning in schools</h3>
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
								<li>0 Lessons</li>
								<li class="float">44 Students</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Sekali Bayar</li>
								<li class="float">Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Free Sertifikat</li>
								<li class="float">Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="{{url('/img/feedback-img/feedback-img-1.jpg')}}" alt="Image">
								<h3 class="mb-0">Jessica Molony</h3>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}">
							<img src="{{url('/img/course-img/course-img-3.jpg')}}" alt="Image">
						</a>
						<div class="course-content">
							<span class="price">Rp 220.000</span>
							<span class="tag">Language</span>
							<a href="{{url('/course')}}">
								<h3>English: spelling, punctuation and grammar</h3>
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
								<li>0 Lessons</li>
								<li class="float">39 Students</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Sekali Bayar</li>
								<li class="float">Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Free Sertifikat</li>
								<li class="float">Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="{{url('/img/feedback-img/feedback-img-1.jpg')}}" alt="Image">
								<h3 class="mb-0">Jessica Molony</h3>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}">
							<img src="{{url('/img/course-img/course-img-4.jpg')}}" alt="Image">
						</a>
						<div class="course-content">
							<span class="price">Rp 420.000</span>
							<span class="tag">Teaching</span>
							<a href="{{url('/course')}}">
								<h3>Introduction to cybersecurity for teachers</h3>
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
								<li>0 Lessons</li>
								<li class="float">50 Students</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Sekali Bayar</li>
								<li class="float">Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Free Sertifikat</li>
								<li class="float">Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="{{url('/img/feedback-img/feedback-img-1.jpg')}}" alt="Image">
								<h3 class="mb-0">Jessica Molony</h3>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}">
							<img src="{{url('/img/course-img/course-img-5.jpg')}}" alt="Image">
						</a>
						<div class="course-content">
							<span class="price">Rp 520.000</span>
							<span class="tag">Teaching</span>
							<a href="{{url('/course')}}">
								<h3>Learning Implementing Formative Assessment</h3>
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
								<li>0 Lessons</li>
								<li class="float">44 Students</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Sekali Bayar</li>
								<li class="float">Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Free Sertifikat</li>
								<li class="float">Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="{{url('/img/feedback-img/feedback-img-1.jpg')}}" alt="Image">
								<h3 class="mb-0">Jessica Molony</h3>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="single-course">
						<a href="{{url('/course')}}">
							<img src="{{url('/img/course-img/course-img-1.jpg')}}" alt="Image">
						</a>
						<div class="course-content">
							<span class="price">Rp 170.000</span>
							<span class="tag">Education</span>
							<a href="{{url('/course')}}">
								<h3>Teaching languages in primary schools: putting research</h3>
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
								<li>0 Lessons</li>
								<li class="float">44 Students</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Sekali Bayar</li>
								<li class="float">Berlangganan</li>
							</ul>
							<hr>
							<ul class="lessons">
								<li>Free Sertifikat</li>
								<li class="float">Free Konsultasi</li>
							</ul>
							<div class="feedback-title mt-3">
								<img src="{{url('/img/feedback-img/feedback-img-1.jpg')}}" alt="Image">
								<h3 class="mb-0">Jessica Molony</h3>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>