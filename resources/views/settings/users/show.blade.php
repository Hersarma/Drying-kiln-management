@extends('layouts.app')
@section('content')
<p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('users_index' )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<section class="px-1 md:px-8 lg:px-8">
  <div class="relative w-full lg:w-1/4 md:w-1/2 mb-6 py-6 overflow-auto bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded shadow-lg">
  <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
  <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
    <p class="px-8 text-gray-200">Korisnik</p>
  </div>
  <div class="relative md:flex lg:flex flex-wrap items-center justify-between overflow-auto md:px-4 py-4 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded shadow-lg">
  <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
  <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
    <div class="">
      <div class="flex justify-start items-center text-sm md:text-base lg:text-lg text-gray-200">
        <i class="fas fa-user px-4"></i>
        <p class="py-4 px-4">
        {{ Ucfirst($user->name)}}
      </p>
      </div>
      <div class="flex justify-start items-center text-sm md:text-base lg:text-lg text-gray-200">
        <i class="fas fa-user px-4"></i>
        <p class="py-4 px-4">
        {{ Ucfirst($user->last_name)}}
      </p>
      </div>
      <div class="flex justify-start items-center text-sm md:text-base lg:text-lg text-gray-200">
        <i class="fas fa-envelope px-4"></i>
        <p class="py-4 px-4">
        {{ $user->email}}
      </p>
      </div>

    </div>
  </div>
  <div class="flex mx-auto">
    <button type="button" class="toggle_modal_edit_user transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-teal-400 border-0 py-2 px-4 focus:outline-none hover:bg-teal-500 rounded text-base shadow-lg shadow-teal-400/20"><i
    class="px-2 fas fa-edit"></i>Izmeni</button>
    <p class="get_route_id cursor-pointer transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded text-base shadow-xl"><span class="hidden">{{ route('user_delete',$user )}}</span>
      <em class="hidden">{{ $user->name }}</em>
      <i
  class="px-2 fas fa-trash"></i>Obriši</p>
</div>
</section>
@include('settings.users.modals.edit')
@endsection
