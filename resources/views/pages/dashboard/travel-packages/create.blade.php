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
								<form action="{{ route('travel-packages.store') }}" method="post"
										class="flex flex-col items-center text-gray-800 dark:text-gray-200" enctype="multipart/form-data">

										@csrf

										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="title">
														Title
												</label>
												<input type="text" name="title" value="{{ old('title') }}" class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="location">
														Location
												</label>
												<input type="text" name="location" value="{{ old('location') }}" class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="country">
														Country
												</label>
												<input type="text" name="country" value="{{ old('country') }}" class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="about">
														About
												</label>
												<textarea name="about" rows="5" cols="50" name="about" class="rounded text-gray-800">{!! old('about') !!} </textarea>
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="featured_event">
														Featured event
												</label>
												<input type="text" name="featured_event" value="{{ old('featured_event') }}"
														class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="language">
														language
												</label>
												<input type="text" name="language" value="{{ old('language') }}" class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="foods">
														Foods
												</label>
												<input type="text" name="foods" class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="departure_date">
														Departure date
												</label>
												<input type="date" name="departure_date" value="{{ old('departure_date') }}"
														class="w-1/6 rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="duration">
														Duration
												</label>
												<input type="text" name="duration" value="{{ old('duration') }}" class="rounded text-gray-800"
														placeholder="e.g. 2D 1N">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="type">
														Type {{-- Dropdown --}}
												</label>
												<select name="type" id="type" class="rounded text-gray-800">
														<option value="">--- Select type ---</option>
														<option value="OPEN TRIP">Open Trip</option>
														<option value="FAMILY TRIP">Family Trip</option>
														<option value="SOLO TRIP">Solo</option>
												</select>
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="price">
														Price
												</label>
												<div class="flex gap-1">
														<div class="flex w-10 items-center justify-center rounded bg-gray-300 text-xl font-bold text-gray-800">$
														</div>
														<input type="number" name="price" value="{{ old('price') }}" class="w-full rounded text-gray-800">
												</div>
										</div>

										<div class="mx-10 my-5 flex w-3/4"> <button type="submit"
														class="w-full rounded bg-blue-500 px-4 py-2 font-bold text-gray-300 transition duration-300 ease-in-out hover:bg-blue-600">
														Save
												</button>
										</div>
								</form>
						</div>
				</div>
		</div>
		<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
		<script>
				CKEDITOR.replace('about');
		</script>
</x-app-layout>
