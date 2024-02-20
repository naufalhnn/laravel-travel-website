<x-guest-layout>
		<x-authentication-card>
				<x-slot name="logo">
						<x-authentication-card-logo />
				</x-slot>

				<x-validation-errors class="mb-4" />

				@if (session('status'))
						<div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
								{{ session('status') }}
						</div>
				@endif

				<form method="POST" action="{{ route('login') }}">
						@csrf

						<div>
								<x-label for="email" value="{{ __('Email') }}" />
								<x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
										autofocus autocomplete="username" />
						</div>

						<div class="mt-4">
								<x-label for="password" value="{{ __('Password') }}" />
								<x-input id="password" class="mt-1 block w-full" type="password" name="password" required
										autocomplete="current-password" />
						</div>

						<div class="mt-4 block">
								<label for="remember_me" class="flex items-center">
										<x-checkbox id="remember_me" name="remember" />
										<span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
								</label>
						</div>

						<div class="mt-4 flex items-center justify-end">
								@if (Route::has('password.request'))
										<a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
												href="{{ route('password.request') }}">
												{{ __('Forgot your password?') }}
										</a>
								@endif

								<x-button class="ms-4">
										{{ __('Log in') }}
								</x-button>
						</div>

						<div class="mt-4 flex items-center justify-center">
								<p>dont have an account? <span><a
														class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
														href="{{ route('register') }}">
														{{ __('register here') }}
												</a></span></p>

						</div>

				</form>
		</x-authentication-card>
</x-guest-layout>
