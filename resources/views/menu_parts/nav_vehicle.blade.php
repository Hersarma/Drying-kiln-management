<nav class="p-4 bg-gray-100">

    <div class="flex justify-start">
        <a href="{{ route('vehicle-show', $vehicle) }}"
           class="ml-4 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('vehicles/show/'.$vehicle->id) ? 'border-b-2 border-teal-400 text-gray-900' : 'text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }} "><i
                    class="fa fa-home pr-0 md:pr-3"></i><span class="hidden md:inline-block">Glavna</span></a>
        <a href="{{ route('vehicle-show_drivers', $vehicle) }}"
           class="ml-4 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('vehicles/show/vehicle_drivers/'.$vehicle->id) ? 'border-b-2 border-teal-400 text-gray-900' : 'text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }} "><i
                    class="fa fa-id-card pr-0 md:pr-3"></i><span class="hidden md:inline-block">Vozaci</span>
        </a>
        <a href="#"
           class="ml-4 px-3 py-2 text-sm font-medium leading-5 text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out"><i
                    class="fas fa-database pr-0 md:pr-3" aria-hidden="true"></i><span class="hidden md:inline-block">Podaci o potrosnji goriva</span>
        </a>
        <a href="#"
           class="ml-4 px-3 py-2 text-sm font-medium leading-5 text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out"><i
                    class="fa fa-wrench pr-0 md:pr-3" aria-hidden="true"></i><span class="hidden md:inline-block">Odrzavanje vozila</span>
        </a>
    </div>

</nav>
