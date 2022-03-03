@extends('layouts.guest')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue_gray-300 via-blue_gray-200 to-blue_gray-300">
        <div class="max-w-md w-full py-12 px-6">
            <img class="mx-auto h-24 w-auto" src="/img/europalete-text-logo-teal.png" alt="logo">
            <p class="mt-6 text-sm text-center text-gray-900">Prijavite se na Vaš nalog</p>
            <form class="mt-5" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm">
                    <div>
                        <input aria-label="Email address" name="email" class="border-gray-300 placeholder-gray-500 appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Email adresa" value="">
                        @error('email')
                        <p class="text-red-500 text-base italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="-mt-px relative">
                        <input aria-label="Password" name="password" type="password" class="border-gray-300 placeholder-gray-500 appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Lozinka">
                        @error('password')
                        <p class="text-red-500 text-base italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                        @if(Route::has('password.request'))
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm">
                                <a href="{{ route('password.request') }}" class="text-gray-900 underline">Zaboravili ste lozinku?</a>
                            </div>
                        @endif
                    </div>
                </div>


                <div class="mt-5">
                    <button type="submit" class="relative block w-full py-2 px-3 border border-transparent rounded-md text-white font-semibold bg-gray-800 hover:bg-gray-700 focus:bg-gray-900 focus:outline-none focus:shadow-outline sm:text-sm">
          <span class="absolute left-0 inset-y pl-3">
            <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
                        Prijavite se
                    </button>
                </div>
            </form>
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>

                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-200 text-gray-500">Europalete</span>
                    </div>
                </div>
                @if (Route::has('register'))
                    <div class="mt-6">
                        <a href="{{ route('register') }}" class="block w-full text-center py-2 px-3 border border-gray-300 rounded-md text-gray-900 font-medium hover:border-gray-400 focus:outline-none focus:border-gray-400 sm:text-sm">
                            Registracija
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection


