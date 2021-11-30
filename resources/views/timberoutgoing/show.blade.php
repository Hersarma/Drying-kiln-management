@extends('layouts.app')
@section('content')

<section class="px-12">
  <div class="w-full lg:w-1/4 md:w-1/2 mb-6 py-6 border-l-4 border-turquoise-light rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <p class="px-8 text-gray-200">Detaljni prikaz</p>
  </div>
  <div class="w-full border-l-4 border-turquoise-light rounded-xl overflow-auto px-4 py-4 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="flex flex-wrap justify-between items-center px-8">
        <div>
            <p class="py-4 px-2 text-gray-200">
            <i class="fas fa-user fa-lg px-2"></i><span>Klijent: </span>
            {{ Ucfirst($client->name)}}
            </p>
              <p class="py-4 px-2 text-gray-200">
                <i class="fas fa-sticky-note fa-lg px-2"></i><span>Beleške: </span>
                {{ Ucfirst($timberoutgoing->notes)}}
              </p>
        </div>
        <div>
            <p class="py-4 px-2 text-gray-200">
            <i class="fas fa-truck fa-lg px-2"></i><span>Prevoznik: </span>
            {{ Ucfirst($timberoutgoing->transport_company)}}
            </p>
              <p class="py-4 px-2 text-gray-200">
                <i class="fas fa-sticky-note fa-lg px-2"></i><span>Broj fakture/otpremnice: </span>
                {{ Ucfirst($timberoutgoing->invoice_number)}}
              </p>
              <p class="py-4 px-2 text-gray-200">
                <i class="fa fa-calendar fa-lg px-2"></i><span>Datum: </span>
                {{ Ucfirst($timberoutgoing->created_at->format('d-m-Y H:m'))}}
              </p>
        </div>
        
    </div>
      <div class="">
        <p class="px-8 py-4 text-center font-bold text-lg text-gray-200">Artikli</p>
      </div>
      <table class="table-auto w-full text-left whitespace-normal">
                        <thead>
                          <tr class="border-b border-turquoise-light">
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
                            @foreach($items as $timber)
                         <tr
                          class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                            {{ $loop->iteration }}
                          </td>
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                            {{ $timber->item_name }}
                          </td>
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                              {{ $timber->quantity }}
                          </td>
                          <td class="px-4 py-3 text-left md:text-center text-gray-200">
                              {{ $timber->cubic_metre }}
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
    
    
  </div>
  <div class="flex mx-auto">
    <button type="button" class="open_modal_edit_timber_incoming transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-teal-400 border-0 py-2 px-4 focus:outline-none hover:bg-teal-500 rounded text-base shadow-xl"><i
    class="px-2 fas fa-edit"></i>Izmeni</button>
    <p class="get_route_id cursor-pointer transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded text-base shadow-xl"><span class="hidden">{{ route('timberoutgoing.destroy',$timberoutgoing )}}</span><i
  class="px-2 fas fa-trash"></i>Obrisi</p>
</div>
</section>

@include('timberoutgoing.modals.edit')
@endsection