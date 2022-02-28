<nav class="fixed z-10 w-full h-20 mx-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="flex">
    
    <div class="flex items-center w-32 sm:w-64 pl-2">
      <img class="hidden sm:inline-block h-11 w-auto filter brightness-200" src="/img/europalete-logo-black_teal.png" alt="Europalete logo">
      <p class="hidden sm:inline-block text-teal-400">Europalete</p>
      @include('buttons.toggle_side_bar_button')
    </div>
    
    <div class="flex justify-between w-5/6 px-2">
      <div class="flex items-center">
        <a href="{{ route('home') }}"
          class="text-lg font-bold leading-5 text-gray-200 hover:text-white focus:outline-none">
          <i class="fas fa-home"></i><span
          class="hidden md:inline-block px-4">Glavna</span>
        </a>
      </div>
      <div class="flex py-4 items-center">
        <a href="{{ route('mail_index') }}"
          class="px-6 md:px-8 py-2 text-lg font-bold leading-5 text-gray-200 hover:text-white focus:outline-none">
          <!--<i class="fas fa-envelope fa-fade" style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.2;">
          </i>-->
          <i class="fas fa-envelope"></i>
        </a>
        @widget('update_notifications')
        <!-- Profile dropdown -->
        <div class="relative px-4">
          <div class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 rounded-xl">
            <button id="user_open" class="
            px-4 md:px-8 py-2 text-base font-medium leading-5 text-gray-200 hover:text-white  focus:outline-none transition duration-150 ease-in-out">
            <i class="fas fa-user"></i><span class="hidden md:inline-block px-4">{{ auth()->user()->name }}</span><i class="fas fa-angle-down px-2 md:px-0"></i></button>
          </div>
          <div id="user_profile"
            class="hidden origin-top-right absolute right-0 mt-6 w-48 rounded-md shadow-lg">
            <div class="py-1 rounded-md bg-gray-800 shadow-xl" role="menu" aria-orientation="vertical"
              aria-labelledby="user-menu"> 
              <a href="{{ route('logout') }}"
                class="block px-4 py-2 text-sm leading-5 text-gray-300 hover:text-gray-100 focus:outline-none transition duration-150 ease-in-out"
                role="menuitem" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Izlogujte se') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</nav>