@extends('layouts.app')
@section('content')
		@if($mailInboxDeleted->isNotEmpty())
		<section class="hidden sm:block md:block lg:block w-full border-l-4 border-turquoise-light rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="md:px-8 md:flex justify-between w-full text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="px-8 py-8">
      <h1 class="text-xl font-bold text-gray-200">Otpad</h1>
    </div>
      <div class="flex items-center text-gray-600 px-4 md:px-12 py-4 md:py-8">
        <i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
        <input id="search_mail_inbox_deleted" type="search" name="search_mail_inbox_deleted" placeholder="Pretraga"
        class="bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
      </div>
  </div>

<div class="w-full mx-auto overflow-auto">
    <form method="" action="" class="submit_checked">
      @csrf
      <div>
        <div class="flex justify-between items-center px-4 border-b border-turquoise-light">
          <div class="flex items-center">
                <input class="check_all form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none" type="checkbox">
                 <button type="button" class="trash delete_checked_mail_permanently hidden focus:outline-none text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash ml-8"></i><span class="hidden">{{route('delete_permanently_checked_mail_inbox')}}</span></button>
                  <button type="button" class="restore_mail hidden focus:outline-none text-green-400 hover:text-green-600"><i class="transition ease-out duration-500 transform hover:scale-110 fa fa-undo ml-8"></i><span class="hidden">{{route('mail_inbox_restore_checked_deleted')}}</span></button>
              </div>
          <p class="w-1/3 lg:w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Ime
          </p>
          <p class="w-1/3 lg:w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Mail
          </p>
          <p class="hidden lg:block w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Naslov
          </p>
          <p class="w-1/3 lg:w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Datum
          </p>
          <p class="hidden lg:block w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Prikaži
          </p>
          <p class="hidden lg:block w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Vrati
          </p>
          <p class="hidden lg:block w-1/6 py-3 tracking-wider text-gray-100 text-sm text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            Obriši
          </p>
        </div>
        <div id="searchMailDeleted">
          @include('mail.deleted.search_mail_inbox_deleted')
        </div>
      </div>
      @include('messages.message_warning_delete_checked_mail_permanently')
      @include('messages.message_warning_restore_checked_mail')
    </form>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
  </div>
</section>
<section class="sm:hidden md:hidden lg:hidden">
    <div class="w-full my-3 px-4">
        <input id="search_mail_inbox_deleted" type="search" name="search_mail_inbox_deleted" placeholder="Pretraga"
        class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20">
    </div>
    <div>
      @include('mail.deleted.search_mail_inbox_deleted')
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