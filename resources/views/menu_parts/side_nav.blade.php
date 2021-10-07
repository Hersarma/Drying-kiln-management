<!--Main Content-->
<div id="side_bar"
     class="fixed hidden lg:block z-10 overflow-hidden mt-20 w-56 bg-gradient-to-b from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 min-h-screen">
    <ul class="inline-block w-full list-reset flex flex-col">
        <li class="group py-6 px-4 text-center cursor-pointer text-gray-300 {{ Request::segment(1) === 'clients' ? 'rounded-xl bg-gray-900 border-l-4 border-turquoise-light shadow-2xl' : '' }}">
            <a href="{{ route('clients.index')}}" class="no-underline flex items-center">
                <i class="fas fa-users group-hover:text-turquoise-light"></i>

                <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-turquoise-light">
                    Klijenti
                </p>
            </a>

        </li>
        
        <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'timber' ? 'rounded-xl shadow-2xl bg-gray-900 border-l-4 border-turquoise-light' : '' }}">

            <div class="open_timber flex justify-between items-center">
                <div class="flex items-center">
                    <i class="fas fa-truck group-hover:text-turquoise-light"></i>

                    <p class="ml-6 group-hover:text-turquoise-light whitespace-nowrap">
                        Građa
                    </p>
                </div>
                <div>
                    <i class="fas fa-angle-down"></i>
                </div>

            </div>
            <ul class="timber_links hidden py-3 text-center">
                <li class="flex-1 py-3 {{ Request::is('timber/incoming') ? 'rounded-xl shadow-2xl border-r-4 border-turquoise-light bg-gray-700 text-white' : '' }}">
                    <a href="{{ route('timberIncoming.index') }}"
                       class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-turquoise-light hover:text-white">
                       <i class="fas fa-sign-in-alt group-hover:text-turquoise-light px-4"></i>
                        Ulaz
                    </a>
                </li>
                <li class="flex-1 py-3 {{ Request::is('timber/outgoing') ? 'rounded-xl shadow-2xl border-r-4 border-turquoise-light bg-gray-700 text-white' : '' }}">
                    <a href="{{ route('timberOutgoing.index') }}"
                       class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-turquoise-light hover:text-white">
                       <i class="fas fa-sign-out-alt group-hover:text-turquoise-light px-4"></i>
                        Izlaz
                    </a>
                </li>
            </ul>
        </li>
        <li class="group py-6 px-4 text-center cursor-pointer text-gray-300 {{ Request::is('drykiln') ? 'rounded-xl bg-gray-900 border-l-4 border-turquoise-light shadow-2xl' : '' }}">
            <a href="{{ route('drykiln.index')}}" class="no-underline flex items-center">
                <i class="fas fa-warehouse group-hover:text-turquoise-light"></i>

                <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-turquoise-light">
                    Sušara
                </p>
            </a>

        </li>
        <li class="group py-6 px-4 cursor-pointer text-gray-300">
            <a href="#" class="no-underline flex items-center">
                <i class="fas fa-euro-sign group-hover:text-turquoise-light"></i>

                <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-turquoise-light">
                    Troskovi
                </p>
            </a>

        </li>

        <li class="group py-6 px-4 cursor-pointer text-gray-300 {{ Request::segment(1) === 'invoices' ? 'rounded-xl shadow-2xl bg-gray-900 border-l-4 border-turquoise-light' : '' }}">

            <div class="open_invoices flex justify-between items-center">
                <div class="flex items-center">
                    <i class="fas fa-file-invoice-dollar group-hover:text-turquoise-light"></i>

                    <p class="ml-6 group-hover:text-turquoise-light whitespace-nowrap">
                        Fakture
                    </p>
                </div>
                <div>
                    <i class="fas fa-angle-down"></i>
                </div>

            </div>
            <ul class="invoices_links hidden py-3 text-center">
                <li class="flex-1 py-3 {{ Request::is('invoices') ? 'rounded-xl shadow-2xl border-r-4 border-turquoise-light bg-gray-700 text-white' : '' }}">
                    <a href="#"
                       class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-turquoise-light hover:text-white">
                        Racun
                    </a>
                </li>
                <li class="flex-1 py-3 {{ Request::is('invoices/estimates') ? 'rounded-xl shadow-2xl border-r-4 border-turquoise-light bg-gray-700 text-white' : '' }}">
                    <a href="#"
                       class="focus:outline-none block align-middle no-underline border-l border-transparent hover:border-turquoise-light hover:text-white">
                        Predracun
                    </a>
                </li>
            </ul>
        </li>

        <li class="group py-6 px-4 cursor-pointer text-gray-300">
            <a href="#" class="no-underline flex items-center">
                <i class="fas fa-cogs group-hover:text-turquoise-light"></i>

                <p class="focus:outline-none py-1 align-middle ml-6 group-hover:text-turquoise-light">
                    Podesavanja
                </p>
            </a>

        </li>
    </ul>


</div>