<nav class="fixed z-10 w-full h-20 mx-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="flex">
    
    <div class="flex items-center w-32 sm:w-64 pl-2">
      <img class="hidden sm:inline-block h-11 w-auto filter brightness-200" src="/img/europalete-logo-black_teal.png" alt="Europalete logo">
      <p class="hidden sm:inline-block text-turquoise-light">Europalete</p>
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
        <a href="#"
          class="px-4 md:px-8 py-2 text-lg font-bold leading-5 text-gray-200 hover:text-white focus:outline-none">
          <i class="fas fa-envelope"></i>
          <span id="count_mail" class="">
            @if(isset($countmail))
            @include('widgets.count_mail')
            @endif
          </span>
        </a>
        @widget('update_notifications')
        <!-- Profile dropdown -->
        <div class="relative">
          <div class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
            <button id="user_open" class="
            px-4 md:px-8 py-2 text-base font-medium leading-5 text-gray-200 hover:text-white  focus:outline-none transition duration-150 ease-in-out">
            <i class="fas fa-user"></i><span class="hidden md:inline-block px-4">{{ auth()->user()->name }}</span><i class="fas fa-angle-down"></i></button>
          </div>
          <div id="user_profile"
            class="hidden origin-top-right absolute right-0 mt-6 w-48 rounded-md shadow-lg">
            <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
              aria-labelledby="user-menu">
              <a href="#"
                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
              role="menuitem">Profil</a>
              
              <a href="#"
                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
              role="menuitem">Podesavanje korisnika</a>
              
              <a href="{{ route('logout') }}"
                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                role="menuitem" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
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