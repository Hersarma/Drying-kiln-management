@extends('layouts.app')
@section('content')
		@if($sentMail->isNotEmpty())
		<section class="hidden sm:block md:block lg:block w-full border-l-4 border-turquoise-light rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="md:px-8 md:flex justify-between w-full text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="px-8 py-8">
      <h1 class="text-xl font-bold text-gray-200">Poslate</h1>
    </div>
    
      <div class="flex items-center text-gray-600 px-4 md:px-12 py-4 md:py-8">
        <i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
        <input id="search_mail_sent" type="search" name="search_mail_sent" placeholder="Pretraga"
        class="bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
      </div>
  </div>

<div class="w-full mx-auto overflow-auto">
    <form method="post" action="{{ route('delete_checked_sent_mail') }}">
      @csrf
      <div>
        <div class="flex justify-between items-center px-4 border-b border-turquoise-light">
          <div class="flex items-center">
             <input class="check_all form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none" type="checkbox">
              <button type="button" class="trash delete_checked_items hidden focus:outline-none text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg ml-8"></i></button>
          </div>
          <p class="w-1/2 lg:w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Kome
          </p>
          <p class="hidden lg:block w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Naslov
          </p>
          <p class="w-1/2 lg:w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Datum
          </p>
          <p class="hidden lg:block w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Prikaži
          </p>
          <p class="hidden lg:block w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Obriši
          </p>
        </div>
        <div id="searchMailSent">
          @include('mail.sent.search_mail_sent')
        </div>
      </div>
      @if($sentMail->isNotEmpty())
      @include('messages.message_warning_delete_checked_items')
      @endif
    </form>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
  </div>
</section>
<section class="sm:hidden md:hidden lg:hidden">
    <div class="w-full my-3 px-4">
        <input id="search_mail_inbox" type="search" name="search_mail_inbox" placeholder="Pretražite poštu"
        class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20">
    </div>
    <div>
      @include('mail.sent.search_mail_sent')
    </div>
</section>
		@else
		<div class="flex items-center justify-center w-full h-screen_nav border-l-4 border-turquoise-light rounded-xl">
			<div>
			<p class="text-white text-xl font-bold text-center py-4">Nema poruka</p>
			<div id="show_message" class="opacity-50">
	      <img class="h-24 w-36 md:h-48 md:w-72" src="/img/mail.png" alt="Mail logo">
	     </div>
		</div>
		</div>
		@endif
@endsection