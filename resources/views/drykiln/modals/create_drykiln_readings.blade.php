<div class="modal_create_drykiln_readings hidden fixed z-20 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block rounded-xl border-l-4 border-teal-400 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full sm:w-3/4 md:2/3 shadow-2xl">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-base text-gray-200 leading-6 font-bold">
        Nova očitavanja sondi
        </h3>
      </div>
      <div class="w-3/4 md:w-full mx-auto">
        <form method="post" action="{{ route('create_drykiln_reading') }}" class="py-8">
          @csrf
          <input class="hidden" type="hidden" name="drying_proces_id" value="{{ $proces->id ?? ''}}">
          <div class="md:flex justify-between items-center">
            <div class="md:px-4 md:w-1/2">
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              @if($drykiln->dry_kiln_config->probe_1_status)
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 1
              </label>
              @else
              <label class="block font-bold text-gray-500 text-opacity-50 md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 1
              </label>
              @endif
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_probe_1" name="moisture_probe_1">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_probe_1') }}
              </p>
              </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
             @if($drykiln->dry_kiln_config->probe_2_status)
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 2
              </label>
              @else
              <label class="block font-bold text-gray-500 text-opacity-50 md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 2
              </label>
              @endif
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_probe_2" name="moisture_probe_2">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_probe_2') }}
              </p>
              </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              @if($drykiln->dry_kiln_config->probe_3_status)
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 3
              </label>
              @else
              <label class="block font-bold text-gray-500 text-opacity-50 md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 3
              </label>
              @endif
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_probe_3" name="moisture_probe_3">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_probe_3') }}
              </p>
              </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              @if($drykiln->dry_kiln_config->probe_4_status)
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 4
              </label>
              @else
              <label class="block font-bold text-gray-500 text-opacity-50 md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 4
              </label>
              @endif
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_probe_4" name="moisture_probe_4">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_probe_4') }}
              </p>
              </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              @if($drykiln->dry_kiln_config->probe_5_status)
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 5
              </label>
              @else
              <label class="block font-bold text-gray-500 text-opacity-50 md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 5
              </label>
              @endif
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_probe_5" name="moisture_probe_5">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_probe_5') }}
              </p>
              </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              @if($drykiln->dry_kiln_config->probe_6_status)
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 6
              </label>
              @else
              <label class="block font-bold text-gray-500 text-opacity-50 md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Sonda 6
              </label>
              @endif
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_probe_6" name="moisture_probe_6">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_probe_6') }}
              </p>
              </div>
              </div>
            </div>
            <div class="md:px-4 md:w-1/2">
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Trenutna temperatura
              </label>
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="temp_current" name="temp_current">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('temp_current') }}
              </p>
              </div>
              </div>
               <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Potrebna temperatura
              </label>
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="temp_needed" name="temp_needed">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('temp_needed') }}
              </p>
              </div>
              </div>
               <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Trenutna vlaga
              </label>
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_current" name="moisture_current">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_current') }}
              </p>
              </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Potrebna vlaga
              </label>
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_needed" name="moisture_needed">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_needed') }}
              </p>
              </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
              <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Prosečna vlaga sondi
              </label>
              </div>
              <div class="md:w-2/3">
              <input class="comma appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="moisture_probes_average" name="moisture_probes_average">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_drykiln_readings->first('moisture_probes_average') }}
              </p>
              </div>
              </div>
            </div>
          </div>
          
          <div class="flex justify-between mt-12 px-8">
            <button type="button"
            class="toggle_modal_create_drykiln_readings py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
            Otkaži
            </button>
            <button type="submit"
            class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">
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