<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
						Travel Packages &rsaquo; {{ $travelPackage->title }} &rsaquo; Gallery
				</h2>
		</x-slot>


		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<a href="{{ route('travel-packages.gallery.create', $travelPackage->id) }}"><button
										class="rounded bg-blue-500 px-4 py-2 font-bold text-gray-800 transition duration-300 ease-in-out hover:bg-blue-700 dark:text-gray-200">
										Add image</button></a>
						<div class="mt-10 overflow-hidden bg-white px-4 py-4 shadow-xl sm:rounded-lg">

								<table class="table w-full table-auto">
										<thead class="border border-black">
												<tr>
														<th class="border border-black">Id</th>
														<th class="border border-black">Image</th>
														<th class="border border-black">Action</th>
										</thead>
										<tbody class="border border-black">
												@foreach ($items as $item)
														<tr class="border border-black">
																<td class="border border-black p-2 text-center">{{ $item->id }}</td>
																<td class="border border-black p-2 text-center"><img style="max-width: 150px"
																				src="{{ Storage::url($item->image) }}" alt=""></td>
																<td class="border border-black p-2 text-center">
																		<form action="{{ route('gallery.destroy', $item->id) }}" class="inline-block" method="POST">
																				@csrf
																				@method('delete')
																				<button class="mx-2 rounded-md bg-red-500 px-2 py-1 text-white">
																						Delete
																				</button>
																		</form>
																</td>
														</tr>
												@endforeach
										</tbody>
								</table>
						</div>
				</div>
		</div>
</x-app-layout>
