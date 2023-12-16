<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
						Travel Packages &rsaquo; Add
				</h2>
		</x-slot>


		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						@if ($errors->any())
								<div class="mb-3" role="alert">
										<div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
												There's something wrong!
										</div>
										<div class="border-t-6 rounded-b border border-red-400 bg-red-100 px-4 py-3 text-red-700">
												<p>
												<ul>
														@foreach ($errors->all() as $error)
																<li>{{ $error }}</li>
														@endforeach
												</ul>
												</p>
										</div>
								</div>
						@endif
						<a href="{{ route('travel-packages.create') }}"><button
										class="rounded bg-blue-500 px-4 py-2 font-bold text-gray-800 transition duration-300 ease-in-out hover:bg-blue-700 dark:text-gray-200">
										Add travel package</button></a>
						<div class="mt-10 overflow-hidden bg-white px-4 py-4 shadow-xl dark:bg-gray-800 sm:rounded-lg">


								<div class="mx-10 my-5 flex w-3/4 flex-col gap-2 text-white">
										<div class="panel-body">
												@if ($message = Session::get('success'))
														<div class="alert alert-success alert-dismissible fade show" role="alert">
																<strong>{{ $message }}</strong>
																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																</button>
														</div>
														<img class="mb-3" src="images/{{ Session::get('image') }}" style="width: 250px;">
												@endif

												<form action="{{ route('travel-packages.gallery.store', $travelPackage->id) }}" method="POST"
														enctype="multipart/form-data">
														@csrf
														<div class="mb-3">
																<input type="file" name="image" id="inputImage"
																		class="form-control @error('image') is-invalid @enderror">

																@error('image')
																		<span class="text-danger">{{ $message }}</span>
																@enderror
														</div>

														<div class="mb-3">
																<button type="submit"
																		class="rounded bg-blue-500 px-4 py-2 font-bold text-gray-300 transition duration-300 ease-in-out hover:bg-blue-600">Upload</button>
														</div>
												</form>
										</div>
								</div>
						</div>
</x-app-layout>
