<div>
  <div id="side_bar" class="fixed inset-0 flex z-40 hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
    <div class="relative flex-1 flex flex-col max-w-xs w-3/4 min-h-screen pt-5 pb-4 bg-gradient-to-b from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
      <div class="absolute top-0 right-0 -mr-12 pt-2">
        <button id="hamburger_close" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <span class="sr-only">Close sidebar</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-shrink-0 flex items-center px-4">
        
      <img class="h-11 w-auto filter brightness-200" src="/img/europalete-logo-black_teal.png" alt="Europalete logo">
      <p class="text-teal-400">Europalete</p>
      </div>
      <div class="mt-5 flex-1 h-0 overflow-y-auto">
        <nav class="px-2 space-y-1">
          <ul class="inline-block w-full list-reset flex flex-col">
    <li class="group py-6 px-4 text-center cursor-pointer text-gray-300 {{ Request::segment(1) === 'clients' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('clients.index')}}" class="no-underline flex items-center">
        <i class="fas fa-users group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Klijenti
        </p>
      </a>
    </li>
    
    <li class="group px-4 cursor-pointer text-gray-300 {{ Request::is('incoming','incoming/*', 'outgoing', 'outgoing/*') ? 'rounded-xl shadow-2xl bg-gray-900 border-l-4 border-teal-400' : '' }}">
      <div class="open_timber flex justify-between items-center py-6">
        <div class="flex items-center">
          <i class="fas fa-truck group-hover:text-teal-400"></i>
          <p class="ml-6 group-hover:text-teal-400 whitespace-nowrap">
            Lager
          </p>
        </div>
        <div>
          <i class="fas fa-angle-down"></i>
        </div>
      </div>
      <ul class="timber_links hidden py-3 text-center">
        <li class="flex-1 py-3 {{ Request::is('incoming','incoming/*') ? 'rounded-xl shadow-2xl border-r-4 border-teal-400 bg-gray-700 text-white' : '' }}">
          <a href="{{ route('incoming.index') }}"
            class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-teal-400 hover:text-white">
            <i class="fas fa-sign-in-alt group-hover:text-teal-400 px-4"></i>
            Ulaz
          </a>
        </li>
        <li class="flex-1 py-3 {{ Request::is('outgoing', 'outgoing/*') ? 'rounded-xl shadow-2xl border-r-4 border-teal-400 bg-gray-700 text-white' : '' }}">
          <a href="{{ route('outgoing.index') }}"
            class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-teal-400 hover:text-white">
            <i class="fas fa-sign-out-alt group-hover:text-teal-400 px-4"></i>
            Izlaz
          </a>
        </li>
      </ul>
    </li>
    <li class="group py-6 px-4 text-center cursor-pointer text-gray-300 {{ Request::segment(1) === 'drykiln' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('drykiln.index')}}" class="no-underline flex items-center">
        <i class="fas fa-warehouse group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Sušara
        </p>
      </a>
    </li>
    <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'mail' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('mail_index') }}" class="no-underline flex items-center">
        <i class="fas fa-envelope group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Pošta
        </p>
      </a>
    </li>
    <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'notifications_index' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('notifications_index') }}" class="no-underline flex items-center">
        <i class="fa fa-bell group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Notifikacije
        </p>
      </a>
    </li>
    <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'settings' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('settings_index') }}" class="no-underline flex items-center">
        <i class="fas fa-cogs group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Podešavanja
        </p>
      </a>
    </li>
  </ul>
        </nav>
      </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
    </div>
  </div>

  <!-- Static sidebar for desktop -->
    
<div
  class="hidden lg:flex lg:flex-col lg:fixed lg:inset-y-0 z-10 overflow-hidden mt-20 w-56 bg-gradient-to-b from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 min-h-screen">
  <ul class="inline-block w-full list-reset flex flex-col">
    <li class="group py-6 px-4 text-center cursor-pointer text-gray-300 {{ Request::segment(1) === 'clients' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('clients.index')}}" class="no-underline flex items-center">
        <i class="fas fa-users group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Klijenti
        </p>
      </a>
    </li>
    
    <li class="group px-4 cursor-pointer text-gray-300 {{ Request::is('incoming','incoming/*', 'outgoing', 'outgoing/*') ? 'rounded-xl shadow-2xl bg-gray-900 border-l-4 border-teal-400' : '' }}">
      <div class="open_timber flex justify-between items-center py-6">
        <div class="flex items-center">
          <i class="fas fa-truck group-hover:text-teal-400"></i>
          <p class="ml-6 group-hover:text-teal-400 whitespace-nowrap">
            Lager
          </p>
        </div>
        <div>
          <i class="fas fa-angle-down"></i>
        </div>
      </div>
      <ul class="timber_links hidden py-3 text-center">
        <li class="flex-1 py-3 {{ Request::is('incoming','incoming/*') ? 'rounded-xl shadow-2xl border-r-4 border-teal-400 bg-gray-700 text-white' : '' }}">
          <a href="{{ route('incoming.index') }}"
            class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-teal-400 hover:text-white">
            <i class="fas fa-sign-in-alt group-hover:text-teal-400 px-4"></i>
            Ulaz
          </a>
        </li>
        <li class="flex-1 py-3 {{ Request::is('outgoing', 'outgoing/*') ? 'rounded-xl shadow-2xl border-r-4 border-teal-400 bg-gray-700 text-white' : '' }}">
          <a href="{{ route('outgoing.index') }}"
            class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-teal-400 hover:text-white">
            <i class="fas fa-sign-out-alt group-hover:text-teal-400 px-4"></i>
            Izlaz
          </a>
        </li>
      </ul>
    </li>
    <li class="group py-6 px-4 text-center cursor-pointer text-gray-300 {{ Request::segment(1) === 'drykiln' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('drykiln.index')}}" class="no-underline flex items-center">
        <i class="fas fa-warehouse group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Sušara
        </p>
      </a>
    </li>
    <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'mail' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('mail_index') }}" class="no-underline flex items-center">
        <i class="fas fa-envelope group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Pošta
        </p>
      </a>
    </li>
    <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'notifications_index' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('notifications_index') }}" class="no-underline flex items-center">
        <i class="fa fa-bell group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Notifikacije
        </p>
      </a>
    </li>
    <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'settings' ? 'rounded-xl bg-gray-900 border-l-4 border-teal-400 shadow-2xl' : '' }}">
      <a href="{{ route('settings_index') }}" class="no-underline flex items-center">
        <i class="fas fa-cogs group-hover:text-teal-400"></i>
        <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-teal-400">
          Podešavanja
        </p>
      </a>
    </li>
  </ul>
</div>
</div>
