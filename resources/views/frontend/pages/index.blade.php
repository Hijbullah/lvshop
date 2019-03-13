@extends('frontend.layouts.master')

@section('page-title', 'Home')

@section('main-content')

<!-- slider start-->
@include('frontend._includes.slider')
<!-- slider end-->

<!-- main categories start -->
<div class="main-categoris">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="main-categoris-area">
					<div class="row">
						@foreach ($categories as $category)
						<div class="col-md-2">
							<a href="{{ route('cats.show', $category->id) }}">
								<div class="single-section">
									<img src="{{ asset('frontend/img/maincat/') }}{{ '/' }}{{$loop->index + 1 }}{{ ('.png') }}" alt="">
									<h3 class="title">{{ $category->name }}</h3>
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- main categories end -->

<!-- must need start-->
<div class="must-need">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<div class="must-need-text-section text-center">
					<h3 class="font-weight-bold">MUST HAVES FOR EVERY CAR </h3>
					<p>Enjoy an entirely new level of driving experience with our in-depth selection of superior car bulbs, brake pads, spark plugs, and other automotive parts and accessories designed to keep your car running at its absolute best.</p>
				</div>
			</div>
			<div class="col-12">
				<div class="must-need-section">
					<div class="row">

						<div class="col-md-3">
							<div class="section-one">
								<div class="row">
									<div class="col-12">
										<div class="single-section">
											<img src="{{ asset('frontend/img/must-have/1.jpg') }}" alt="">
											<div class="overlay">
												<div class="desc">
													<button class="btn btn-sm btn-primary">See All</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="single-section">
											<img src="{{ asset('frontend/img/must-have/2.jpg') }}" alt="">
											<div class="overlay">
												<div class="desc">
													<button class="btn btn-sm btn-primary">See All</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="section-two">
								<div class="single-section">
									<img src="{{ asset('frontend/img/must-have/full.jpg') }}" alt="">
									<div class="overlay">
										<div class="desc">
											<button class="btn btn-sm btn-primary">See All</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="section-three">
								<div class="row">
									<div class="col-12">
										<div class="single-section">
											<img src="{{ asset('frontend/img/must-have/3.jpg') }}" alt="">
											<div class="overlay">
												<div class="desc">
													<button class="btn btn-sm btn-primary">See All</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="single-section">
											<img src="{{ asset('frontend/img/must-have/4.jpg') }}" alt="">
											<div class="overlay">
												<div class="desc">
													<button class="btn btn-sm btn-primary">See All</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	<!-- must need end-->

<!-- top categories start-->
<div class="top-categories-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav mb-3" id="pills-tab" role="tablist">
					{{-- <li class="nav-item">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Top Categories</a>
					</li> --}}
					@foreach ($categories as $category)
					@continue(count($category->descendants) == 0)
					<li class="nav-item">
						<a class="nav-link text-dark {{ $loop->index == 0 ? 'active' : '' }}" id="pills-{{ $category->slug }}-tab" data-toggle="pill" href="#pills-{{ $category->slug }}" role="tab" aria-controls="pills-{{ $category->slug }}" aria-selected="true">{{ $category->name }}</a>
					</li>
					@endforeach
				
				</ul>

				<div class="tab-content" id="pills-tabContent">
					@foreach ($categories as $category)

					@continue(count($category->descendants) == 0)

					<div class="tab-pane fade {{ $loop->index == 0 ? 'show active' : '' }}" id="pills-{{ $category->slug }}" role="tabpanel" aria-labelledby="pills-{{ $category->slug }}-tab">
						<div class="row">
							@foreach ($category->descendants as $category)
							<div class="col-md-3 col-sm-6">
								<a href="{{ route('cats.show', $category->id) }}">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/1.jpg') }}" alt="">
										<p>{{ $category->name }}</p>
									</div>
								</a>
							</div>
							@endforeach
						</div>
					</div>
					@endforeach
					

					{{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/3.jpg') }}" alt="">
										<p>Custom Wheels</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/4.jpg') }}" alt="">
										<p>Headlights</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/1.jpg') }}" alt="">
										<p>Tires</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/5.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/7.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/5.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/6.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/9.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/8.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/10.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/10.jpg') }}" alt="">
										<p>Custom Wheels</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/9.jpg') }}" alt="">
										<p>Headlights</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/8.jpg') }}" alt="">
										<p>Tires</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/7.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/6.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/5.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/4.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/3.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/2.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="#">
									<div class="single-cat">
										<img src="{{ asset('frontend/img/category/1.jpg') }}" alt="">
										<p>Exhaust Systems</p>
									</div>
								</a>
							</div>
						</div>
					</div> --}}
				</div>				
			</div>
		</div>
	</div>
</div><!-- top categories start-->

<!-- login-registration start-->
<div class="container-fluid p-0">
	<div class="row">
		<div class="col-md-12">
			<div class="login-registration-area">
				<img src="{{ asset('frontend/img/login.png') }}" alt="">
				<p class="over-img">Process your shopping</p>
				<button class="btn btn-lg btn-outline-danger">Registration</button>
				<button class="btn btn-lg btn-outline-danger">Login</button>

			</div>
		</div>

	</div>
</div><!-- login-registration end-->

<!-- about-us start-->
<div class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h2>About Us</h2>
					<p>We are passionate about providing our customers with quality products they desire from reputed brands while maintaining the highest level of integrity towards our stakeholders.</p>

					<p>We endeavor to become a premier global supplier of performance parts. We strive to be the best supplier by providing consumer value, customer and employee satisfaction, and consistent growth in our industry.</p>

					<a class="btn btn-sm btn-outline-danger" href="#">Read more</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- about-us end-->


@endsection