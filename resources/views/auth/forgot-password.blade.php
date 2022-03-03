@extends('layouts.guest')
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                 <img class="mx-auto h-24 w-auto" src="/img/europalete-logo-black_teal.png" alt="logo">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Upišite vašu imejl adresu i dobićete link za resetovanje lozinke na vašu imejl adresu.') }}
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

                <x-input id="email" class="block mt-1 w-full py-1 bg-gray-200 focus:outline-none" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Pošalji link za resetovanje lozinke na imejl') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>

