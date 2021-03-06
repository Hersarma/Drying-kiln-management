<div class="modal_create_client fixed hidden z-20 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>
    <div class="relative inline-block bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded overflow-hidden transform transition-all sm:my-8 align-middle w-full sm:w-3/4 md:2/3 shadow-2xl">
      <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
      <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-base text-gray-200 leading-6 font-bold">
        Novi klijent
        </h3>
      </div>
      <div class="w-3/4 md:w-full mx-auto">
        <form method="post" action="{{ route('clients.store') }}" class="py-8">
          @csrf
          <div class="md:flex justify-between items-center">
            <div class="md:px-4 md:w-1/2">
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Ime Firme
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
                  id="name" name="name">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('name') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Mesto
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="city" name="city">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('city') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Zemlja
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="state" name="state">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('state') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Adresa 1
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="address_1" name="address_1">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('address_1') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Adresa 2
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="address_2" name="address_2">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('address_2') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    PIB
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="pib" name="pib">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('pib') }}
                  </p>
                </div>
              </div>
            </div>
            <div class="md:px-4 md:w-1/2">
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Mati??ni broj
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="mb" name="mb">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('mb') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Broj telefona
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="phone_number" name="phone_number">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('phone_number') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Web stranica
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="website" name="website">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('website') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    E-mail adresa
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="email" name="email">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('email') }}
                  </p>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                <div class="md:w-1/3">
                  <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    Bele??ke
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="notes" name="notes">
                  <p class="text-red-500 text-sm italic mt-4">
                    {{ $errors->create_client->first('notes') }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-between mt-12 md:px-8">
            <button type="button" class="toggle_modal_create_client py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 ml-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">Otka??i</button>
            <button type="submit" class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 mr-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">Sa??uvaj</button>
          </div>
        </form>
      </div>
      <div>
      </div>
    </div>
  </div>
</div>