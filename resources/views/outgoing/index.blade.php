@extends('layouts.app')
@section('content')
<section class="border-l-4 border-turquoise-light rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="md:px-8 md:flex justify-between w-full text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="px-8 py-8">
      <h1 class="text-xl font-bold text-gray-200">Prikaz izlaza</h1>
    </div>
    
    <div class="flex justify-between">
      <div class="flex items-center text-gray-600 px-4 md:px-12 py-4 md:py-8">
        <i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
        <input id="search_outgoing" type="search" name="search_outgoing" placeholder="Pretraga"
        class="bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
      </div>
      <div class="flex px-4 md:px-12 py-4 md:py-8">
        <button type="button"
        class="open_modal_create_outgoing transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
        <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
  <div class="w-full mx-auto overflow-auto">
    <form method="post" action="{{ route('delete_checked_outgoing') }}">
      @csrf
      <table class="table-auto w-full text-left whitespace-normal">
        <thead>
          <tr class="border-b border-turquoise-light">
            <th class="px-4 py-3 tracking-wider bg-blue_gray-900 md:w-28">
              <input class="check_all form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none" type="checkbox">
              <button type="submit" onclick="return window.confirm('Da li ste sigurni da zelite da obrisete sve izlaze')" class="trash hidden focus:outline-none text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg ml-8"></i></button>
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
        <tbody id="search_timber_incoming">
          @include('outgoing.search')
          @if($outgoing->isEmpty())
          <tr>
            <td colspan="8" class="text-center text-gray-200 text-xl p-24">
              Baza je trenutno prazna
            </td>
          </tr>
          <tr>
            <td colspan="8" class="overflow-hidden">
              <div class="flex justify-center mt-5 md:mt-0">
                <button type="button" 
                class="open_modal_create_outgoing transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md font-bold text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
                Dodaj novi izlaz
                </button>
              </div>
            </td>
          </tr>
          @endif
        </tbody>
      </table>
    </form>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
  </div>
  {{ $outgoing->links() }}
</section>
@include('outgoing.modals.create')

@endsection