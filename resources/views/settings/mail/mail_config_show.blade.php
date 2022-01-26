@extends('layouts.app')
@section('content')
<div class="container px-6 py-8 mx-auto">
<h1 class="text-3xl font-semibold text-center text-gray-200 lg:text-4xl dark:text-white">Konfiguracija imejla</h1>

<div class="grid grid-cols-1 gap-8 mt-6 md:mt-24 xl:gap-12 md:grid-cols-2">
<div class="w-full p-8 space-y-8 text-center border-l-0 border-r-0 border-t-4 border-b-4 md:border-l-4 md:border-r-4 md:border-t-0 md:border-b-0 border-turquoise-light rounded-lg">
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fas fa-sign-out-alt"></i>
 </h2>
<p class="font-medium text-gray-400">Odlazni imejl</p>
@if(empty($mailConfigOutgoing))
<button type="button" class="toggle_modal_create_mail_outgoing w-2/3 px-4 py-2 mt-10 tracking-wide text-white transition ease-out duration-500 transform hover:scale-110 bg-teal-500 rounded-xl focus:outline-none">Nova konfiguracija
</button>
@else
 <button type="button" class="toggle_modal_edit_mail_outgoing w-2/3 px-4 py-2 mt-10 tracking-wide text-white transition ease-out duration-500 transform hover:scale-110 bg-teal-500 rounded-xl focus:outline-none">Izmeni konfiguraciju
</button>
@endif
</div>
<div class="w-full p-8 space-y-8 text-center border-l-0 border-r-0 border-t-4 border-b-4 md:border-l-4 md:border-r-4 md:border-t-0 md:border-b-0 border-turquoise-light rounded-lg">
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fas fa-sign-in-alt"></i>
 </h2>
<p class="font-medium text-gray-400">Dolazni imejl</p>
@if(empty($mailConfigIncoming))
 <button type="button" class="toggle_modal_create_mail_incoming w-2/3 px-4 py-2 mt-10 tracking-wide text-white transition ease-out duration-500 transform hover:scale-110 bg-teal-500 rounded-xl focus:outline-none">Nova konfiguracija
</button>
@else
<button type="button" class="toggle_modal_edit_mail_incoming w-2/3 px-4 py-2 mt-10 tracking-wide text-white transition ease-out duration-500 transform hover:scale-110 bg-teal-500 rounded-xl focus:outline-none">Izmeni konfiguraciju
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
@endsection