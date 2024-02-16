<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
						Travel Packages &raquo; {{ $travelPackage->title }} &raquo; Edit
				</h2>
		</x-slot>


		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="mt-10 overflow-hidden bg-white px-4 py-4 shadow-xl dark:bg-gray-800 sm:rounded-lg">
								<form action="{{ route('travel-packages.update', $travelPackage->id) }}" method="post"
										class="flex flex-col items-center text-gray-800 dark:text-gray-200" enctype="multipart/form-data">
										@method('PUT')
										@csrf
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="title">
														Title
												</label>
												<input type="text" name="title" value="{{ old('title') ?? $travelPackage->title }}"
														class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="location">
														Location
												</label>
												<input type="text" name="location" value="{{ old('location') ?? $travelPackage->location }}"
														class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="country">
														Country
												</label>
												<input type="text" name="country" value="{{ old('country') ?? $travelPackage->country }}"
														class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="about">
														About
												</label>
												<textarea name="about" rows="5" cols="50" name="about" class="rounded text-gray-800">{!! old('about') ?? strip_tags($travelPackage->about) !!} </textarea>
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="featured_event">
														Featured event
												</label>
												<input type="text" name="featured_event"
														value="{{ old('featured_event') ?? $travelPackage->featured_event }}" class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="language">
														language
												</label>
												<input type="text" name="language" value="{{ old('language') ?? $travelPackage->language }}"
														class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="foods">
														Foods
												</label>
												<input type="text" name="foods" value="{{ old('foods') ?? $travelPackage->foods }}"
														class="rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="departure_date">
														Departure date
												</label>
												<input type="date" name="departure_date"
														value="{{ old('departure_date') ?? $travelPackage->departure_date }}" class="w-1/6 rounded text-gray-800">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="duration">
														Duration
												</label>
												<input type="text" name="duration" value="{{ old('duration') ?? $travelPackage->duration }}"
														class="rounded text-gray-800" placeholder="e.g. 2D 1N">
										</div>
										<div class="mx-10 my-5 flex w-3/4 flex-col gap-2">
												<label for="type">
														Type {{-- Dropdown --}}
												</label>
												<select name="type" id="type" class="rounded text-gray-800">
														<option value="{{ $travelPackage->type }}">{{ $travelPackage->type }}</option>
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
														<input type="number" name="price" value="{{ old('price') ?? $travelPackage->price }}"
																class="w-full rounded text-gray-800">
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
</x-app-layout>
