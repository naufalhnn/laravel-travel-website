@extends('layouts.home')
@section('title')
		NOMADS
@endsection
@section('content')

		<body>
				<!-- Semantic elements -->
				<!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

				<!-- Bootstrap navbar example -->
				<!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
				<div class="container">
						<nav class="row navbar navbar-expand-lg navbar-light bg-white">
								<a class="navbar-brand" href="index.html">
										<img src="frontend/images/logo.png" alt="" />
								</a>
								<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
										<span class="navbar-toggler-icon"></span>
								</button>

								<!-- Menu -->
								<div class="navbar-collapse collapse" id="navb">
										<ul class="navbar-nav ml-auto mr-3">
												<li class="nav-item mx-md-2">
														<a class="nav-link active" href="index.html">Home</a>
												</li>
												<li class="nav-item mx-md-2">
														<a class="nav-link" href="#">Paket Travel</a>
												</li>
												<li class="nav-item dropdown">
														<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
																Services
														</a>
														<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Link 1</a>
																<a class="dropdown-item" href="#">Link 2</a>
																<a class="dropdown-item" href="#">Link 3</a>
														</div>
												</li>
												<li class="nav-item mx-md-2">
														<a class="nav-link" href="#">Testimonial</a>
												</li>
										</ul>

										<!-- Mobile button -->
										<form class="form-inline d-sm-block d-md-none">
												<button class="btn btn-login my-sm-0 my-2">
														Masuk
												</button>
										</form>
										<!-- Desktop Button -->
										<form class="form-inline my-lg-0 d-none d-md-block my-2">
												<button class="btn btn-login btn-navbar-right my-sm-0 my-2 px-4">
														Masuk
												</button>
										</form>
								</div>
						</nav>
				</div>
				<main>
						<section class="section-details-header"></section>
						<section class="section-details-content">
								<div class="container">
										<div class="row">
												<div class="col pl-lg-0 p-0 pl-3"">
														<nav aria-label="breadcrumb">
																<ol class="breadcrumb">
																		<li class="breadcrumb-item" aria-current="page">
																				Paket Travel
																		</li>
																		<li class="breadcrumb-item active" aria-current="page">
																				Details
																		</li>
																</ol>
														</nav>
												</div>
										</div>
										<div class="row">
												<div class="col-lg-8 pl-lg-0">
														<div class="card card-details">
																<h1>{{ $travelPackage->title }}</h1>
																<p>
																		{{ $travelPackage->country }}
																</p>
																<div class="gallery">
																		<div class="xzoom-container">
																				<img class="xzoom" id="xzoom-default"
																						src="{{ Storage::url($travelPackage->galleries->first()->image) }}"
																						xoriginal="{{ Storage::url($travelPackage->galleries->first()->image) }}" />
																				<div class="xzoom-thumbs">
																						@foreach ($travelPackage->galleries as $gallery)
																								<a href="{{ Storage::url($gallery->image) }}"><img class="xzoom-gallery" width="128"
																												src="{{ Storage::url($gallery->image) }}"
																												xpreview="{{ Storage::url($gallery->image) }}" /></a>
																						@endforeach
																				</div>
																		</div>
																		<h2 class="mt-5">Description</h2>
																		<p>
																				{{ strip_tags($travelPackage->about) }}
																		</p>
																		<div class="features row pt-3">
																				<div class="col-md-4">
																						<img src="frontend/images/ic_event.png" alt="" class="features-image" />
																						<div class="description">
																								<h3>Featured Event</h3>
																								<p>{{ $travelPackage->featured_event }}</p>
																						</div>
																				</div>
																				<div class="col-md-4 border-left">
																						<img src="frontend/images/ic_bahasa.png" alt="" class="features-image" />
																						<div class="description">
																								<h3>Language</h3>
																								<p>{{ $travelPackage->language }}</p>
																						</div>
																				</div>
																				<div class="col-md-4 border-left">
																						<img src="frontend/images/ic_foods.png" alt="" class="features-image" />
																						<div class="description">
																								<h3>Foods</h3>
																								<p>{{ $travelPackage->foods }}</p>
																						</div>
																				</div>
																		</div>
																</div>
														</div>
												</div>
												<div class="col-lg-4">
														<div class="card card-details card-right">
																<h2>Members are going</h2>
																<div class="members my-2">
																		<img src="frontend/images/members.png" alt="" class="w-75" />
																</div>
																<hr />
																<h2>Trip Informations</h2>
																<table class="trip-informations">
																		<tr>
																				<th width="50%">Date of Departure</th>
																				<td width="50%" class="text-right">22 Aug, 2019</td>
																		</tr>
																		<tr>
																				<th width="50%">Duration</th>
																				<td width="50%" class="text-right">4D 3N</td>
																		</tr>
																		<tr>
																				<th width="50%">Type</th>
																				<td width="50%" class="text-right">Open Trip</td>
																		</tr>
																		<tr>
																				<th width="50%">Price</th>
																				<td width="50%" class="text-right">$80,00 / person</td>
																		</tr>
																</table>
														</div>
														<div class="join-container">
																<a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
														</div>
												</div>
										</div>
								</div>
						</section>
				</main>

				@include('includes.footer')

				<script src="frontend/libraries/xzoom/dist/xzoom.min.js"></script>
				<script>
						$(document).ready(function() {
								$('.xzoom, .xzoom-gallery').xzoom({
										zoomWidth: 500,
										title: false,
										tint: '#333',
										Xoffset: 15
								});
						});
				</script>

				@include('includes.script')
		</body>
@endsection
