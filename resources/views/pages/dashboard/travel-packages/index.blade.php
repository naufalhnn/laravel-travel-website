<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
						Travel Packages
				</h2>
		</x-slot>


		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<a href="{{ route('travel-packages.create') }}"><button
										class="rounded bg-blue-500 px-4 py-2 font-bold text-gray-800 transition duration-300 ease-in-out hover:bg-blue-700 dark:text-gray-200">
										Add
										travel package</button></a>
						<div class="mt-10 overflow-hidden bg-white px-4 py-4 shadow-xl sm:rounded-lg">
								<x-slot name="script">
										<script type="text/javascript">
												// ajax datatables
												$(document).ready(function() {
														$('#tbl_list').DataTable({
																processing: true,
																serverSide: true,
																ajax: "{!! url()->current() !!}",
																columns: [{
																				data: 'id',
																				name: 'id',
																				width: '5%'
																		},
																		{
																				data: 'title',
																				name: 'title'
																		},
																		{
																				data: 'location',
																				name: 'location'
																		},
																		{
																				data: 'action',
																				name: 'action',
																				orderable: false,
																				searchable: false,
																				width: '25%'
																		}
																]
														});
												});
										</script>
								</x-slot>
								<table id="tbl_list">
										<thead>
												<tr>
														<th>Id</th>
														<th>Title</th>
														<th>Location</th>
														<th>Action</th>
										</thead>
										<tbody>

										</tbody>
								</table>
						</div>
				</div>
		</div>
</x-app-layout>
