<div class="modal_edit_drykiln_config fixed hidden z-20 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
   <div class="relative inline-block bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded overflow-hidden transform transition-all sm:my-8 align-middle w-full sm:w-3/4 md:2/3 shadow-2xl">
      <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
      <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
      <div class="md:flex justify-between items-center md:px-20 md:py-8">
        <div>
          <h3 class="text-base text-gray-200 leading-6 font-bold py-4">
        Podešavanje sušare
        </h3>
        </div>
        
        <div class="mt-6 mb-6">
          <p class="get_route_id_drykiln cursor-pointer transition ease-out duration-500 transform hover:scale-110"><span class="hidden">{{ route('delete_drykiln_config',$drykiln->dry_kiln_config->id )}}</span>
            <i class="fa fa-power-off fa-3x text-red-500" aria-hidden="true"></i>
          </p>
          <p class="py-2 text-gray-200">Ugasi</p>
        </div>
      </div>
      <div class="w-full px-4 mx-auto">
        <form method="post" action="{{ route('update_drykiln_config', $drykiln->dry_kiln_config->id) }}" class="py-8">
          @csrf
          <div class="flex flex-wrap justify-between items-center">

            <div class="w-full md:w-2/3">
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Klijent
              </label>
            </div>
            <div class="relative md:w-2/3">
              <div class="flex items-center">
              <input class="hidden" name="proces_id" value="{{ $proces->id }}">
                <input type="hidden" name="client" value="{{ $drykiln->dry_kiln_config->client }}" class="client_name_value_edit hidden text-black hidden">
                <button type="button" class="client_edit bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-8 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20 flex justify-between items-center"><p>Izaberi klijenta: <span class="set_client_edit">{{ $drykiln->dry_kiln_config->client }}</span></p><i class="fas fa-angle-down fa-lg px-2"></i>
                </button>
                <p class="remove_client_edit cursor-pointer px-2 py-2"><i class="fas fa-times fa-lg text-red-500" aria-hidden="true"></i></p>
              </div>
              <p class="text-red-500 text-sm italic mt-4">
                 {{ $errors->edit_drykiln_config->first('client') }}
              </p>
              <div class="clients_edit h-96 overflow-auto hidden absolute z-50 mt-4 w-full bg-blue_gray-800 rounded-xl border-l-4 border-teal-400 w-full py-3 px-8 text-gray-200 leading-tight">
                <div class="flex justify-end">
                   <p class="client_edit cursor-pointer"><i class="fas fa-times fa-lg text-red-500" aria-hidden="true"></i></p>
                </div>
               
                <div class="flex justify-center items-center text-gray-600 px-4 md:px-12    py-4 md:py-4">
                  <i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
                  <input type="search" name="search_clients" placeholder="Pretraga"
                  class="search_clients_edit bg-transparent text-gray-100 border-b border-gray-200 rounded-b focus:outline-none w-1/2">
                </div>
                <ul class="searchClient">
                  @include('drykiln.search_client')
                </ul>
                <p class="show_client_link hidden"><a href="{{ route('clients.index') }}"><button type="button" class="transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">Dodaj novog klijenta</button></a></p>
              </div>
            </div>
          </div>
          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Vrsta drveta
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="type_of_wood" name="type_of_wood" value="{{ $drykiln->dry_kiln_config->type_of_wood }}">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->edit_drykiln_config->first('type_of_wood') }}
              </p>
            </div>
          </div>
          
          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Beleške
              </label>
            </div>
            <div class="md:w-2/3">
              <textarea class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="notes" name="notes" rows="4">{{ $drykiln->dry_kiln_config->notes }}</textarea>
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->edit_drykiln_config->first('notes') }}
              </p>
            </div>
          </div>
            </div>

            <div class="w-full md:w-1/4 px-4 rounded-xl border-l-4 border-teal-400">
              <p class="text-gray-200 font-bold px-4 py-4">Aktiviraj sonde</p>
              <div class="flex justify-between items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 1
              </label>
              </div>
              <div class="px-4">
                <input type="hidden" name="probe_1_status" value="0">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_1_status" name="probe_1_status" @if($drykiln->dry_kiln_config->probe_1_status) checked @endif>
              </div>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 2
              </label>
              </div>
              <div class="px-4">
                <input type="hidden" name="probe_2_status" value="0">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_2_status" name="probe_2_status" @if($drykiln->dry_kiln_config->probe_2_status) checked @endif>
              </div>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 3
              </label>
              </div>
              <div class="px-4">
                <input type="hidden" name="probe_3_status" value="0">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_3_status" name="probe_3_status" @if($drykiln->dry_kiln_config->probe_3_status) checked @endif>
              </div>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 4
              </label>
              </div>
              <div class="px-4">
                <input type="hidden" name="probe_4_status" value="0">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_4_status" name="probe_4_status" @if($drykiln->dry_kiln_config->probe_4_status) checked @endif>
              </div>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 5
              </label>
              </div>
              <div class="px-4">
                <input type="hidden" name="probe_5_status" value="0">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_5_status" name="probe_5_status" @if($drykiln->dry_kiln_config->probe_5_status) checked @endif>
              </div>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 6
              </label>
              </div>
              <div class="px-4">
                <input type="hidden" name="probe_6_status" value="0">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_6_status" name="probe_6_status" @if($drykiln->dry_kiln_config->probe_6_status) checked @endif>
              </div>
              </div>
            </div>
          </div>
          
          
          <div class="flex justify-between mt-12 px-4">
            <button type="button"
            class="toggle_modal_edit_drykiln_config py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
            Otkaži
            </button>
            <button type="submit"
            class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">
            Sačuvaj
            </button>
          </div>
        </form>
      </div>
      <div>
      </div>
    </div>
  </div>
</div>
@include('messages.message_warning_powerof_drykiln')