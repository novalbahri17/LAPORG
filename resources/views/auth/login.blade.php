<x-guest-layout>
    <x-auth-card class="p-8 bg-white rounded-lg shadow-md">
        <!-- Logo -->
        <x-slot name="logo">
            <a href="/">
                <img class="w-24 h-24 mx-auto" src="{{ asset('img/logo.svg') }}" alt="Logo">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-green-500" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-red-500" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
                <x-input 
                    id="email" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />
                <x-input 
                    id="password" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mt-4">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    name="remember" />
                <label for="remember_me" class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm font-medium text-blue-500 hover:text-blue-700" href="{{ url('register') }}">
                    {{ __('Belum Punya Akun? Daftar') }}
                </a>
                <x-button class="px-5 py-2 font-bold text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    {{ __('Masuk') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
