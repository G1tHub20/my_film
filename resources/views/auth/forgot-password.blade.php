<x-guest-layout>
    <nav>
        <div class="flex sm:-my-px sm:ml-10 h-16 items-center justify-end">
            <div>
                <x-nav-link :href="route('login')" :active="request()->routeIs('login')" class="mr-4">ログイン</x-nav-link>
                <x-nav-link :href="route('register')" :active="request()->routeIs('register')" class="mr-4">新規登録</x-nav-link>
            </div>
        </div>
    </nav>
    
    <x-auth-card>
        <x-slot name="logo">
            <a href="/movie">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('auth.Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('auth.Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="inline-flex items-center justify-center rounded-md bg-neutral-950 p-3 font-normal text-base text-neutral-50 transition active:scale-110 text-sm">【無効】パスワード再設定URLを送信</button>
                {{-- <x-primary-button>
                    {{ __('auth.Email Password Reset Link') }}
                </x-primary-button> --}}
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
