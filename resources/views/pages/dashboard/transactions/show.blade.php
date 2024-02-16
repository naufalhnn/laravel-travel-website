<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Transaction details
				</h2>
		</x-slot>


		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="mt-10 overflow-hidden bg-white px-4 py-4 shadow-xl sm:rounded-lg">
								@foreach ($details as $detail)
										<table class="mx-auto table w-1/2">
												<tr>
														<th class="w border border-slate-700 px-3 py-3 text-left">Id</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->id }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Transaction id</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->transaction_id }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Travel packages id</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->transaction->travel_package_id }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Travel packages id</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->transaction->user_id }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Username</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->username }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Nationality</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->nationality }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Is VISA</th>
														<td class="border border-slate-700 px-3 py-3 text-left">
																@if ($detail->is_visa == 1)
																		Yes
																@else
																		No
																@endif
														</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Date of expire passport</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->doe_passport }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Additional VISA</th>
														<td class="border border-slate-700 px-3 py-3 text-left">${{ $detail->transaction->additional_visa }}</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Transaction total</th>
														<td class="border border-slate-700 px-3 py-3 text-left">${{ $detail->transaction->transaction_total }}
														</td>
												</tr>
												<tr>
														<th class="border border-slate-700 px-3 py-3 text-left">Transaction status</th>
														<td class="border border-slate-700 px-3 py-3 text-left">{{ $detail->transaction->transaction_status }}
														</td>
												</tr>
										</table>
								@endforeach
						</div>
				</div>
		</div>
</x-app-layout>
