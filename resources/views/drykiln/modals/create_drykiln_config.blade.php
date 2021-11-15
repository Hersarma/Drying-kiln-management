<div class="modal_create_drykiln_config fixed hidden z-20 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block rounded-xl border-l-4 border-turquoise-light bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full md:w-2/3 shadow-2xl">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-base text-gray-200 leading-6 font-bold">
        Podesavanje susare
        </h3>
      </div>
      <div class="w-full px-4 mx-auto">
        <form method="post" action="{{ route('create_drykiln_config') }}" class="py-8 px-8 md:px-0">
          @csrf
          <input id="dry_kiln_id" class="hidden" name="dry_kiln_id" value="{{ $drykiln->id }}">
          <input id="dry_kiln_status" class="hidden" name="dry_kiln_status" value="1">
          <div class="flex flex-wrap justify-between items-center">

            <div class="w-full md:w-2/3">
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Klijent
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg"
              id="client" name="client">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_timber_incoming->first('clients') }}
              </p>
            </div>
          </div>
          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Vrsta drveta
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg"
              id="type_of_wood" name="type_of_wood">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_timber_incoming->first('type_of_wood') }}
              </p>
            </div>
          </div>
          
          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Beleske
              </label>
            </div>
            <div class="md:w-2/3">
              <textarea class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg" id="notes" name="notes" rows="4"></textarea>
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_timber_incoming->first('notes') }}
              </p>
            </div>
          </div>
            </div>

            <div class="w-full md:w-1/4 px-4 rounded-xl border-l-4 border-turquoise-light">
              <p class="text-turquoise-medium font-bold px-4 py-4">Aktiviraj sonde</p>
              <div class="flex items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 1
              </label>
              </div>
              <div class="px-4">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_1_status" name="probe_1_status">
              </div>
              </div>
              <div class="flex items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 2
              </label>
              </div>
              <div class="px-4">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_2_status" name="probe_2_status">
              </div>
              </div>
              <div class="flex items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 3
              </label>
              </div>
              <div class="px-4">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_3_status" name="probe_3_status">
              </div>
              </div>
              <div class="flex items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 4
              </label>
              </div>
              <div class="px-4">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_4_status" name="probe_4_status">
              </div>
              </div>
              <div class="flex items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 5
              </label>
              </div>
              <div class="px-4">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_5_status" name="probe_5_status">
              </div>
              </div>
              <div class="flex items-center py-2">
                <div class="px-4">
                  <label class="block font-bold text-gray-200 px-4" for="inline-full-name">
                Sonda 6
              </label>
              </div>
              <div class="px-4">
                <input type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
              id="probe_6_status" name="probe_6_status">
              </div>
              </div>
            </div>
          </div>
          
          
          <div class="flex justify-between">
            <button type="button"
            class="close_modal_create_drykiln_config py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
            Otkaži
            </button>
            <button type="submit"
            class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-turquoise-medium hover:bg-turquoise-strong focus:outline-none">
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