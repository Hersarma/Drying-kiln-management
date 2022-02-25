@extends('layouts.app')
@section('content')
<div class="container px-2 md:px-6 py-8 mx-auto">
<h1 class="text-3xl font-semibold text-center text-gray-200 lg:text-4xl dark:text-white">Konfiguracija imejla</h1>

<div class="grid grid-cols-1 gap-8 mt-6 md:mt-24 xl:gap-12 md:grid-cols-2">
<div class="relative w-full p-8 space-y-8 text-center bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 shadow-lg rounded-lg">
  <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
    <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
  <div class="md:flex justify-around items-center">
     <div class="mb-4 sm:mb-0 md:mb-0">
      <p class="text-5xl font-bold text-gray-200 uppercase">
      <i class="fas fa-sign-out-alt"></i>
      </p>
    </div>
    @if(empty($mailConfigOutgoing))
    <div class="mb-4 md:mb-0 py-2 px-2 rounded-lg shadow-xl bg-gray-100 border-l-4 border-red-500">
      <div class="flex justify-center items-center">
        <p class="flex justify-center items-center rounded-full w-10 h-10 bg-red-500">
          <i class="fas fa-times fa-lg text-white" aria-hidden="true"></i>
        </p>
        <p class="px-4 text-lg text-gray-700">Konfiguracija nije podešena</p>
      </div>
    </div>
    @else
    <div class="mb-4 md:mb-0 py-2 px-2 rounded-lg shadow-xl bg-gray-100 border-l-4 border-green-400">
      <div class="flex justify-center items-center">
        <p class="flex justify-center items-center rounded-full w-10 h-10 bg-green-400">
          <i class="fa fa-check fa-lg text-white" aria-hidden="true"></i>
        </p>
        <p class="px-4 text-lg text-gray-700">Konfiguracija podešena</p>
      </div>
    </div>
    @endif
  </div>
<p class="font-medium text-lg text-gray-400">Odlazni imejl</p>
@if(empty($mailConfigOutgoing))
<button type="button" class="toggle_modal_create_mail_outgoing w-2/3 px-4 py-1 mt-10 tracking-wide text-white text-lg transition ease-out duration-500 transform hover:scale-110 bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 rounded-xl focus:outline-none">Nova konfiguracija
</button>
@else
 <button type="button" class="toggle_modal_edit_mail_outgoing w-2/3 px-4 py-1 mt-10 tracking-wide text-white text-lg transition ease-out duration-500 transform hover:scale-110 bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 rounded-xl focus:outline-none">Izmeni konfiguraciju
</button>
@endif
</div>

<div class="relative w-full p-8 space-y-8 text-center bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 shadow-lg rounded-lg">
  <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
    <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
 <div class="md:flex justify-around items-center">
    <div class="mb-4 sm:mb-0 md:mb-0">
      <p class="text-5xl font-bold text-gray-200 uppercase">
    <i class="fas fa-sign-in-alt"></i>
    </p>
    </div>
    @if(empty($mailConfigIncoming))
    <div class="mb-4 md:mb-0 py-2 px-2 rounded-lg shadow-xl bg-gray-100 border-l-4 border-red-500">
      <div class="flex justify-center items-center">
        <p class="flex justify-center items-center rounded-full w-10 h-10 bg-red-500">
          <i class="fas fa-times fa-lg text-white" aria-hidden="true"></i>
        </p>
        <p class="px-4 text-lg text-gray-700">Konfiguracija nije podešena</p>
      </div>
    </div>
    @else
    <div class="mb-4 md:mb-0 py-2 px-2 rounded-lg shadow-xl bg-gray-100 border-l-4 border-green-400">
      <div class="flex justify-center items-center">
        <p class="flex justify-center items-center rounded-full w-10 h-10 bg-green-400">
          <i class="fa fa-check fa-lg text-white" aria-hidden="true"></i>
        </p>
        <p class="px-4 text-lg text-gray-700">Konfiguracija podešena</p>
      </div>
    </div>
    @endif
  </div>
<p class="font-medium text-lg text-gray-400">Dolazni imejl</p>
@if(empty($mailConfigIncoming))
 <button type="button" class="toggle_modal_create_mail_incoming w-2/3 px-4 py-1 mt-10 tracking-wide text-white text-lg transition ease-out duration-500 transform hover:scale-110 bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 rounded-xl focus:outline-none">Nova konfiguracija
</button>
@else
<button type="button" class="toggle_modal_edit_mail_incoming w-2/3 px-4 py-1 mt-10 tracking-wide text-white text-lg transition ease-out duration-500 transform hover:scale-110 bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 rounded-xl focus:outline-none">Izmeni konfiguraciju
</button>
@endif
</div>
</div>
</div>
@if(empty($mailConfigIncoming))
@include('settings.mail.modals.mail_incoming_config_create')
@else
@include('settings.mail.modals.mail_incoming_config_edit')
@endif

@if(empty($mailConfigOutgoing))
@include('settings.mail.modals.mail_outgoing_config_create')
@else
@include('settings.mail.modals.mail_outgoing_config_edit')
@endif
@include('mail.src.animation_mail_server')
@endsection