<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
						Transactions
				</h2>
		</x-slot>


		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
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
																				data: 'travel_package_id',
																				name: 'travel_package_id',
																				width: '5%'
																		},
																		{
																				data: 'user_id',
																				name: 'user_id'
																		},
																		{
																				data: 'additional_visa',
																				name: 'additional_visa'
																		},
																		{
																				data: 'transaction_total',
																				name: 'transaction_total'
																		},
																		{
																				data: 'transaction_status',
																				name: 'transaction_status'
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
														<th>Travel package id</th>
														<th>User id</th>
														<th>Additional visa</th>
														<th>Transaction total</th>
														<th>Transaction status</th>
														<th>Action</th>
										</thead>
										<tbody>

										</tbody>
								</table>
						</div>
				</div>
		</div>
</x-app-layout>
