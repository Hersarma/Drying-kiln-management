@extends('layouts.app')
@section('content')
<p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('users_index' )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<section class="px-1 md:px-8 lg:px-8">
  <div class="w-full lg:w-1/4 md:w-1/2 mb-6 py-6 border-l-4 border-teal-400 rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <p class="px-8 text-gray-200">Korisnik</p>
  </div>
  
</section>
@include('settings.users.modals.edit')
@endsection