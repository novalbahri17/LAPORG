<x-guest-layout>
    <x-auth-card class="p-8 my-12 bg-white rounded-lg shadow-md">
        <!-- Logo -->
        <x-slot name="logo">
            <a href="/" class="flex justify-center">
                <img class="w-24 h-24" src="{{ asset('img/logo.svg') }}" alt="Logo">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-red-500" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NIK -->
            <div>
                <x-label for="nik" :value="__('NIK')" class="font-semibold text-gray-700" />
                <x-input 
                    id="nik" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    type="text" 
                    name="nik" 
                    :value="old('nik')" 
                    required 
                    autofocus />
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Nama')" class="font-semibold text-gray-700" />
                <x-input 
                    id="name" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    type="text" 
                    name="name" 
                    :value="old('name')" 
                    required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
                <x-input 
                    id="email" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('No. HP')" class="font-semibold text-gray-700" />
                <x-input 
                    id="phone" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    type="text" 
                    name="phone" 
                    :value="old('phone')" 
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Kata Sandi')" class="font-semibold text-gray-700" />
                <x-input 
                    id="password" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" class="font-semibold text-gray-700" />
                <x-input 
                    id="password_confirmation" 
                    class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    type="password" 
                    name="password_confirmation" 
                    required />
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm font-medium text-blue-500 hover:text-blue-700" href="{{ route('login') }}">
                    {{ __('Sudah punya akun? Masuk') }}
                </a>
                <x-button class="px-6 py-2 font-bold text-white transition-transform transform bg-blue-500 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 hover:scale-105">
                    {{ __('Daftar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
