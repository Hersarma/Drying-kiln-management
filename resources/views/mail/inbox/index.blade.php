@extends('layouts.app')
@section('content')
		@if($mailInbox->isNotEmpty())
	<section class="relative hidden sm:block md:block lg:block w-full overflow-auto py-2 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded shadow-lg">
  <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
  <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
  <div class="md:px-8 md:flex justify-between items-center w-full">
    <div class="px-8 py-8">
      <p class="text-xl font-bold text-gray-200">Vaša imejl adresa: {{ $yourMail->username }}</p>
    </div>
    
      <div class="flex items-center text-gray-600 px-4 md:px-12 py-4 md:py-8">
        <i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
        <input id="" type="search" name="search_mail_inbox" placeholder="Pretraga"
        class="search_mail_inbox bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
      </div>
  </div>
  <div class="w-full mx-auto overflow-auto">
    <form method="post" action="{{ route('delete_checked_mail_inbox') }}">
      @csrf
      <div>
        <div class="flex justify-between items-center px-4 border-b border-gray-700">
          <div class="flex items-center">
             <input class="check_all form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none" type="checkbox">
              <button type="button" class="trash delete_checked_items hidden focus:outline-none text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg ml-8"></i></button>
          </div>
          <p class="w-1/3 lg:w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center">
            Ime
          </p>
          <p class="w-1/3 lg:w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center">
            Mail
          </p>
          <p class="hidden lg:block w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center">
            Naslov
          </p>
          <p class="w-1/3 lg:w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center">
            Datum
          </p>
          <p class="hidden lg:block w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center">
            Prikaži
          </p>
          <p class="hidden lg:block w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center">
            Obriši
          </p>
        </div>
        <div class="searchMailInbox">
          @include('mail.inbox.search_mail_inbox')
        </div>
      </div>
      @if($mailInbox->isNotEmpty())
      @include('messages.message_warning_delete_checked_items')
      @endif
    </form>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
  </div>
</section>
<!--Mobile-->
<section class="sm:hidden md:hidden lg:hidden">
    <div class="w-full my-3 px-4">
        <input id="search_mail_inbox" type="search" name="search_mail_inbox" placeholder="Pretražite poštu"
        class="search_mail_inbox appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20">
    </div>
    <div class="searchMailInbox">
      @include('mail.inbox.search_mail_inbox')
    </div>
</section>
<!--Mobile-end-->
		@else
		<div class="flex items-center justify-center w-full h-screen_nav border-l-4 border-teal-400 rounded-xl">
			<div>
			<p class="text-white text-xl font-bold text-center py-4">Nema poruka</p>
			<div id="show_message" class="opacity-50">
	      <img class="h-24 w-36 md:h-48 md:w-72" src="/img/mail.png" alt="Mail logo">
	     </div>
		</div>
		</div>
		@endif
@endsection