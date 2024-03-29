<div class="container">
		<nav class="row navbar navbar-expand-lg navbar-light bg-white">
				<a class="navbar-brand" href="#">
						<img src="{{ url('frontend/images/logo.png') }}" alt="" />
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
						<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Menu -->
				<div class="navbar-collapse collapse" id="navb">
						<ul class="navbar-nav ml-auto mr-3">
								<li class="nav-item mx-md-2">
										<a class="nav-link active" href="#">Home</a>
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
								<a href="{{ route('login') }}" class="btn btn-login my-sm-0 my-2">
										Masuk
								</a>
						</form>
						<!-- Desktop Button -->
						@if (auth()->guest())
								<form class="form-inline my-lg-0 d-none d-md-block my-2">
										<a href="{{ route('login') }}" class="btn btn-login btn-navbar-right my-sm-0 px-4 pt-4">
												Masuk
										</a>
								</form>
						@endif
				</div>
		</nav>
</div>
