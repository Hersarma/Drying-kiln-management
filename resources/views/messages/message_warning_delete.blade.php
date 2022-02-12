<div class="modal_warning hidden fixed z-50 inset-0 overflow-y-auto -mt-48 sm:-mt-0 md:-mt-0 lg:-mt-0">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>
    <div class="inline-block rounded-xl border-l-4 border-turquoise-light bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full md:w-1/3 shadow-2xl">
      <div class="px-4 py-5 sm:px-6">
        <p class="text-red-500"><i class="fas fa-exclamation-triangle fa-2x"></i></p>
        <p class="py-4 text-base text-gray-200 leading-6 font-bold">
          Ova akcija ne moze da se poništi!
        </p>
      </div>
      <div class="w-full mx-auto">
        <div class="py-2">
          <form method="POST" action="" class="route_id">
            @csrf
            @method('DELETE')
            <div class="flex justify-around">
              <button type="button" class="close_modal_warning py-1 w-1/4 transition ease-out duration-500 transform hover:scale-110 px-4 ml-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">Otkaži</button>
              <button type="submit"
              class="w-1/4 transition ease-out duration-500 transform hover:scale-110 py-1 px-4 mr-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-turquoise-medium hover:bg-turquoise-strong focus:outline-none">
              Potvrdi
              </button>
            </div>
            
          </form>
          
          
        </div>
      </div>
      <div>
      </div>
    </div>
  </div>
</div>