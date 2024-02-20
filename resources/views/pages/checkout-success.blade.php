@extends('layouts.page')
@section('title')
		NOMADS | CHECKOUT
@endsection
@section('content')

		<body>
				<!-- Semantic elements -->
				<!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

				<!-- Bootstrap navbar example -->
				<!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
				<div class="container">
						<nav class="row navbar navbar-expand-lg navbar-light bg-white">
								<div class="navbar-nav mr-sm-auto mr-lg-0 mr-md-auto ml-auto mr-auto">
										<a class="navbar-brand" href="index.html">
												<img src="{{ url('frontend/images/logo.png') }}" alt="" />
										</a>
								</div>
								<ul class="navbar-nav d-none d-lg-block mr-auto">
										<li>
												<span class="text-muted">| &nbsp; Beyond the explorer of the world</span>
										</li>
								</ul>
						</nav>
				</div>
				<main>
						<div class="section-success d-flex align-items-center">
								<div class="col text-center">
										<img src="{{ url('frontend/images/ic_mail.png') }}" alt="" />
										<h1>Yay! Success</h1>
										<p>
												We’ve sent you email for trip instruction <br />
												please read it as well
										</p>
										<a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
												Home Page
										</a>
								</div>
						</div>
				</main>
				@include('includes.footer')
				@include('includes.script')
				<script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
				<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
				<script>
						$(document).ready(function() {
								$('.xzoom, .xzoom-gallery').xzoom({
										zoomWidth: 500,
										title: false,
										tint: '#333',
										Xoffset: 15
								});

								$('.datepicker').datepicker({
										uiLibrary: 'bootstrap4',
										icons: {
												rightIcon: '<img src="frontend/images/ic_doe.png" alt="" />'
										}
								});
						});
				</script>
		</body>
@endsection
