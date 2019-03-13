@extends('frontend.layouts.master')

@section('page-title', 'Show')

@section('main-content')
<!-- page-content -->
<div class="page-header">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-md-12">
				<div class="page-area">
					<img src="{{ asset('frontend/img/page-banner/cat-banner.jpg') }}" alt="">
					<div class="page-link">
						<ul class="page-menu">
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="#">Category</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="category-page-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="all-caterory">
					<div class="row">
						@forelse ($products as $product)
						<div class="col-md-3">
							<div class="single-caterory">
								<img src="{{ asset('frontend/img/category/1.jpg') }}" alt="">
								<h3>{{ $product->name }}</h3>
								<p class="price"><span>$300</span>$100</p>
								<p class="desc">{{ str_limit($product->short_description, 50, '') }} </p>
								<button class="card-button btn btn-gray btn-sm "> View Details </button>
								<button class="card-button btn btn-dark btn-sm "> Add To Card </button>
							</div>
						</div>
						@empty
						<p class="text-danger text-center">No items found for this category</p>
						@endforelse

					</div>
					<nav aria-label="...">
					  <ul class="pagination justify-content-end">
					    <li class="page-item disabled">
					      <a class="page-link" href="#" tabindex="-1">Previous</a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item active">
					      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#">Next</a>
					    </li>
					  </ul>
					</nav>

				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- page-content -->
@endsection