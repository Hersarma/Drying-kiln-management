<div class="modal_create_mail_outgoing hidden fixed z-20 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block rounded-xl border-l-4 border-turquoise-light bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full md:w-1/2 shadow-2xl">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-base text-gray-200 leading-6 font-bold">
        Podešavanja odlaznih imejlova
        </h3>
      </div>
      <div class="w-full max-w-2xl mx-auto">
        <form method="post" action="{{ route('create_mail_outgoing_config') }}" class="py-8 px-8 md:px-0">
          @csrf

          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Ime hosta
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="host" name="host" placeholder="mail.vašdomen.rs/com">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('host') }}
              </p>
            </div>
          </div>

           <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Port
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="port" name="port" placeholder="smtp port: 465">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('port') }}
              </p>
            </div>
          </div>

          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Enkripcija
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="encryption" name="encryption" placeholder="ssl">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('encryption') }}
              </p>
            </div>
          </div>

          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Protokol
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="protocol" name="protocol" placeholder="smtp">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('protocol') }}
              </p>
            </div>
          </div>

          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Username
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="username" name="username" placeholder="email@vašdomen.rs/com">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('username') }}
              </p>
            </div>
          </div>

           <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Password
              </label>
            </div>
            <div class="md:w-2/3">
              <input type="password" autocomplete="new-password" class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="password" name="password" placeholder="lozinka za pristup email nalogu na vašem hostingu">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('password') }}
              </p>
            </div>
          </div>

          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Ime pošiljaoca
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="sender_name" name="sender_name" placeholder="ime">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('sender_name') }}
              </p>
            </div>
          </div>

          <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
            <div class="md:w-1/3">
              <label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                Imejl adresa pošiljaoca
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="placeholder-gray-200 placeholder-opacity-25 appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl focus:shadow-teal-400/20"
              id="sender_email" name="sender_email" placeholder="imejl adresa">
              <p class="text-red-500 text-sm italic mt-4">
                {{ $errors->create_mail_outgoing_config->first('sender_email') }}
              </p>
            </div>
          </div>
          @include('messages.message_test_mail_error')
          <div class="flex justify-between mt-12">
            <button type="button"
            class="toggle_modal_create_mail_outgoing py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
            Otkaži
            </button>
            <button type="submit"
            class="animate_mail_server py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">
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