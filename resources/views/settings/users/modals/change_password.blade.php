<div class="modal_edit_user_password hidden fixed z-20 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="relative inline-block bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded shadow-2xl overflow-hidden transform transition-all sm:my-8 align-middle w-full sm:w-3/4 md:2/3">
      <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
      <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-base text-gray-200 leading-6 font-bold">
        Novi korisnik
        </h3>
      </div>
      <div class="w-full max-w-3xl mx-auto">
        <form method="post" action="{{ route('changeUserPassword', $user) }}" class="py-8 px-8 md:px-0">
          @csrf
          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-current_password">
                Stara lozinka
              </label>
            </div>
            <div class="md:w-2/3">
              <input type="password" class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="current_password" name="current_password">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->change_password->first('current_password') }}
              </p>
              @if(session('message_warning_password'))
               <p class="text-red-500 text-sm italic mt-4">
                {{ session('message_warning_password') }}
              </p>
              @endif
            </div>
          </div>
          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-new_password">
                Nova lozinka
              </label>
            </div>
            <div class="md:w-2/3">
              <input type="password" class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="new_password" name="new_password">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->change_password->first('new_password') }}
              </p>
            </div>
          </div>
          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-new_confirm_password">
                Potvrdi lozinku
              </label>
            </div>
            <div class="md:w-2/3">
              <input type="password" class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
              id="new_confirm_password" name="new_confirm_password">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->change_password->first('new_confirm_password') }}
              </p>
            </div>
          </div>
          <div class="flex justify-between mt-12">
            <button type="button"
            class="toggle_modal_edit_user_password py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
            Otka??i
            </button>
            <button type="submit"
            class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">
            Sa??uvaj
            </button>
          </div>
        </form>
      </div>
      <div>
      </div>
    </div>
  </div>
</div>