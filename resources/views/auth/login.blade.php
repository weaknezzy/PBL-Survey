<x-guest-layout>
    <div class="login-box">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>
            <p>Please login to continue</p>
            <!-- Email Address -->
            <div class="input-box">
                <x-text-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 input-box">
                <x-text-input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <button type="submit">
                {{ __('Log in') }}
            </button>

            <div class="options mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>
        </form>
    </div>
</x-guest-layout>
