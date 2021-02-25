@extends('template/default')
@section('title','Checkout')
@section('container')
<br>
<br>
<section class="checkout-area ptb-100">
	<div class="container">
		<form action="{{url('/payment/submit')}}" method="POST">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="billing-details">
						<h3 class="title">Billing details</h3>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id_course" value="{{ $course->id_course }}">
						<input type="hidden" name="harga" value="{{ $course->price }}">
						<input type="hidden" name="barang" value="{{ $course->title }}">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>First name <span class="required">*</span></label>
									<input type="text" class="form-control" name="first_name" required="">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Last name <span class="required">*</span></label>
									<input type="text" class="form-control" name="last_name" required="">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<label>Address <span class="required">*</span>
									</label>
									<textarea class="form-control" name="address" required="" cols="20" rows="8"></textarea>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Town / City <span class="required">*</span></label>
									<input type="text" class="form-control" name="city">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Zip <span class="required">*</span></label>
									<input type="text" class="form-control" name="postal_code">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Phone <span class="required">*</span></label>
									<input type="text" class="form-control" name="phone">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Country <span class="required">*</span></label>
									<input type="text" class="form-control" maxlength="3" name="country_code">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<label>Email <span class="required">*</span></label>
									<input type="email" class="form-control" name="email">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<label>Order notes (Optional)</label>
									<textarea name="notes" id="notes" cols="30" rows="8" class="form-control" name="notes"></textarea>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="float-right text-right">
									<button type="submit" class="default-btn two col-lg-12">
										Order
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="order-details">
						<div class="cart-totals">
							<h3>Checkout Detail</h3>
							<ul>
								<li>Judul <span>{{ $course->title }}</span></li>
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
									Demo Project: <span><a href="{{$course->demo_project}}}" target="_blank">Klik Disini</a></span>
								</li>
								<li><b>Price </b><span><b>Rp {{ number_format($course->price,0,",",".") }}</b></span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>