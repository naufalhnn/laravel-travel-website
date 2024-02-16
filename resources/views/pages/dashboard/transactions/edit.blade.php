<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Edit transaction status
				</h2>
		</x-slot>


		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="mt-10 overflow-hidden bg-white px-4 py-4 shadow-xl sm:rounded-lg">
								<form action="{{ route('transactions.update', $transaction->id) }}" method="post">
										@method('PUT')
										@csrf
										<div>
												<label for="status">Status</label>
												<select name="status" id="status" class="mx-3 w-1/4 rounded text-gray-800">
														<option value="{{ $transaction->transaction_status }}">
																{{ old('transaction_status') ?? $transaction->transaction_status }}</option>
														<option value="" disabled>-----</option>
														<option value="PENDING">PENDING</option>
														<option value="FAILED">FAILED</option>
														<option value="SUCCESS">SUCCESS</option>
														<option value="IN CART">IN CART</option>
												</select>
										</div>
										<button type="submit"
												class="mt-5 rounded bg-blue-500 px-4 py-2 font-bold text-gray-200 transition duration-300 ease-in-out hover:bg-blue-600">
												Save
										</button>
								</form>
						</div>
				</div>
		</div>
</x-app-layout>
