@extends('layouts.app')
@section('content')
<section class="border-l-4 border-turquoise-light rounded-xl overflow-auto px-1 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="md:px-8 md:flex justify-between w-full text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="py-8">
      <h1 class="text-xl font-bold text-gray-200">Prikaz ulaza</h1>
    </div>
    
    <div class="flex justify-between">
      <div class="flex items-center text-gray-600 px-1 md:px-12 py-4 md:py-8">
        <i class="fa fa-search fa-lg px-1 text-gray-400" aria-hidden="true"></i>
        <input id="search_incoming" type="search" name="search_incoming" placeholder="Pretraga"
        class="bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
      </div>
      <div class="flex px-2 md:px-12 py-4 md:py-8">
        <button type="button"
        class="toggle_modal_create_incoming transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
        <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
  <div class="w-full mx-auto overflow-auto">
    <form method="post" action="{{ route('delete_checked_incoming') }}">
      @csrf
      <table class="table-auto w-full text-left whitespace-normal">
        <thead>
          <tr class="border-b border-turquoise-light">
            <th class="px-4 py-3 tracking-wider bg-blue_gray-900 md:w-28">
              <input class="check_all form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none" type="checkbox">
              <button type="button" class="trash delete_checked_items hidden focus:outline-none text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg ml-8"></i></button>
            </th>
            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Klijent
            </th>
            <th class="hidden md:table-cell px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Beleške
            </th>
            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Datum
            </th>
            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Prikaži
            </th>
            <th class="hidden md:table-cell px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Izbriši
            </th>
          </tr>
        </thead>
        <tbody id="searchIncoming">
          @include('incoming.search')
          
        </tbody>
      </table>
      @if($incoming->isNotEmpty())
      @include('messages.message_warning_delete_checked_items')
      @endif
    </form>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
  </div>
  
</section>
@include('incoming.modals.create')

@endsection