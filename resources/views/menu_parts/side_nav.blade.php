<!--Main Content-->
<div id="side_bar"
  class="fixed hidden lg:block z-10 overflow-hidden mt-20 w-56 bg-gradient-to-b from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 min-h-screen">
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