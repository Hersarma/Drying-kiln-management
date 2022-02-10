@extends('layouts.app')
@section('content')
<p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('clients.index' )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<section class="px-8">
  <div class="w-full lg:w-1/4 md:w-1/2 mb-6 py-6 border-l-4 border-turquoise-light rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <p class="px-8 text-gray-200">{{ Ucfirst($client->name)}}</p>
  </div>
  <div class="flex flex-wrap items-center justify-between border-l-4 border-turquoise-light rounded-xl overflow-auto px-4 py-4 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="">
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-flag fa-lg px-4"></i>
        {{ Ucfirst($client->state ?: '/')}}
      </p>
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-building fa-lg px-4"></i>
        {{ Ucfirst($client->city ?: '/')}}
      </p>
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-address-card fa-lg px-4"></i>
        {{ Ucfirst($client->address_1 ?: '/')}}
      </p>
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-address-card fa-lg px-4"></i>
        {{ Ucfirst($client->address_2 ?: '/')}}
      </p>
    </div>
    <div class="">
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-phone fa-lg px-4"></i>
        {{ $client->contact ?: '/'}}
      </p>
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-envelope fa-lg px-4"></i>
        {{ $client->email ?: '/'}}
      </p>
        <a class="text-teal-500 underline" href="https://{{ $client->website }}"
          target="_blank">
            <p class="py-4 px-4 text-gray-200">
              <i class="fab fa-firefox fa-lg px-4"></i>
              {{ $client->website ?: '/' }}
            </p>
          </a>
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-sticky-note fa-lg px-4"></i>
        {{ Ucfirst($client->notes ?: '/')}}
      </p>
    </div>
    <div class="">
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-sort-down fa-lg px-4">pib</i>
        {{ $client->pib ?: '/'}}
      </p>
      <p class="py-4 px-4 text-gray-200">
        <i class="fas fa-sort-down fa-lg px-4">mb</i>
        {{ $client->mb ?: '/'}}
      </p>
    </div>
  </div>
  <div class="flex mx-auto">
    <button type="button" class="toggle_modal_edit_client transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-teal-400 border-0 py-2 px-4 focus:outline-none hover:bg-teal-500 rounded text-base shadow-lg shadow-teal-400/20"><i
    class="px-2 fas fa-edit"></i>Izmeni</button>
    <p class="get_route_id cursor-pointer transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded text-base shadow-xl"><span class="hidden">{{ route('clients.destroy',$client )}}</span><i
  class="px-2 fas fa-trash"></i>Obriši</p>
</div>
</section>

@include('clients.modals.edit')
@endsection