@extends('layouts.app')
@section('content')
<p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('outgoing.index' )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<section class="md:px-12">
  <div class="w-full lg:w-1/4 md:w-1/2 mb-6 py-6 border-l-4 border-teal-400 rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <p class="px-8 text-gray-200">Detaljni prikaz</p>
  </div>
  <div class="w-full border-l-4 border-teal-400 rounded-xl overflow-auto px-4 py-4 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="flex flex-wrap justify-between items-center md:px-24 lg:px-24">
        <div class="w-full md:w-auto">
          <div class="flex md:justify-between items-center text-gray-200">
            <p><i class="fas fa-user fa-lg px-2"></i><span class="hidden md:inline-block">Klijent: </span></p>
            <p class="py-4 px-2">
            {{ Ucfirst($client->name) ?: '/'}}
            </p>
          </div>
          <div class="flex md:justify-between items-center text-gray-200">
            <p><i class="fas fa-sticky-note fa-lg px-2"></i><span class="hidden md:inline-block">Beleške: </span></p>
            <p class="py-4 px-2">
              {{ Ucfirst($outgoing->notes) ?: '/'}}
            </p>
          </div>
        </div>
        <div class="w-full md:w-auto">
          <div class="flex md:justify-between items-center text-gray-200">
            <p><i class="fas fa-truck fa-lg px-2"></i><span class="hidden md:inline-block">Prevoznik: </span></p>
            <p class="py-4 px-2 text-gray-200">
            {{ Ucfirst($outgoing->transport_company) ?: '/'}}
            </p>
          </div>
          <div class="flex md:justify-between items-center text-gray-200">
            <p><i class="fas fa-sticky-note fa-lg px-2"></i><span class="hidden md:inline-block">Broj fakture/otpremnice: </span></p>
            <p class="py-4 px-2 text-gray-200">
                {{ Ucfirst($outgoing->invoice_number) ?: '/'}}
              </p>
          </div>
          <div class="flex md:justify-between items-center text-gray-200">
            <p> <i class="fa fa-calendar fa-lg px-2"></i><span class="hidden md:inline-block">Datum: </span></p>
             <p class="py-4 px-2 text-gray-200">
                {{ Ucfirst($outgoing->created_at->format('d-m-Y H:m'))}}
              </p>
          </div>
        </div>
    </div>
      <div class="">
        <p class="px-8 py-4 text-center font-bold text-lg text-gray-200">Artikli</p>
      </div>
      <table class="table-auto w-full text-left whitespace-normal">
                        <thead>
                          <tr class="border-b border-teal-400">
                            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
                              
                            </th>
                            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
                              Vrsta građe
                            </th>
                            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
                              Broj paleta
                            </th>
                            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
                              Kubikaža
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                         <tr
                          class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                            {{ $loop->iteration }}
                          </td>
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                            {{ $item->item_name }}
                          </td>
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                              {{ $item->quantity }}
                          </td>
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                              {{ $item->cubic_metre }}
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
    
    
  </div>
  <div class="flex mx-auto">
    <button type="button" class="toggle_modal_edit_outgoing transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-teal-400 border-0 py-2 px-4 focus:outline-none hover:bg-teal-500 rounded text-base shadow-lg shadow-teal-400/20"><i
    class="px-2 fas fa-edit"></i>Izmeni</button>
    <p class="get_route_id cursor-pointer transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded text-base shadow-xl"><span class="hidden">{{ route('outgoing.destroy',$outgoing )}}</span><i
  class="px-2 fas fa-trash"></i>Obrisi</p>
</div>
</section>

@include('outgoing.modals.edit')
@endsection