{{-- <x-guest-layout>
<x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <img class="w-20 h-20" src="{{ asset('img/logo.svg')}} " alt="Logo">
        </a>
    </x-slot>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('lupa kata sandi Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirim email kepada Anda tautan reset kata sandi yang memungkinkan Anda memilih yang baru.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
        
            <x-button class="px-4 py-3 my-3 font-bold text-white transition duration-300 ease-in-out transform bg-blue-500 rounded-md shadow-lg focus:outline-none focus:shadow-outline hover:bg-blue-500 hover:scale-105">
                    {{ __('Tautan Atur Ulang Kata Sandi Email') }}
            </x-button>
        </div>
    </form>
</x-auth-card>
</x-guest-layout> --}}