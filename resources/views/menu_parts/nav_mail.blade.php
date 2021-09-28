<nav class="py-2 bg-gray_white-dark hidden">

        <div class="flex justify-center">
            <a href="{{ route('mail-index') }}"
               class="ml-4 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail') ? 'border-b-2 border-teal-400 text-gray-900' : 'text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }} "><i
                        class="fas fa-inbox pr-0 md:pr-3"></i><span class="hidden md:inline-block">Inbox</span></a>
            <a href="{{ route('mail-deleted') }}"
               class="ml-4 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/deleted') ? 'border-b-2 border-teal-400 text-gray-900' : 'text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }} "><i
                        class="fas fa-trash pr-0 md:pr-3"></i><span class="hidden md:inline-block">Otpad</span>
            </a>
            <a href="#"
               class="ml-4 px-3 py-2 text-sm font-medium leading-5 text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out"><i
                        class="fa fa-ban pr-0 md:pr-3" aria-hidden="true"></i><span class="hidden md:inline-block">Nepozeljne</span>
            </a>
            <a href="{{ route('mail-sent') }}"
               class="ml-4 mr-6 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/sent') ? 'border-b-2 border-teal-400 text-gray-900' : 'text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }}"><i
                        class="fa fa-paper-plane pr-0 md:pr-3" aria-hidden="true"></i><span class="hidden md:inline-block">Poslate</span>
            </a>
            <a href="{{ route('mail-new') }}"
               class="ml-4 mr-6 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/new') ? 'border-b-2 border-teal-400 text-gray-900' : 'text-gray-600 hover:text-gray-900 border-b-2 border-gray-100 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }}"><i
                        class="fa fa-plus pr-0 md:pr-3" aria-hidden="true"></i><span class="hidden md:inline-block">Nova poruka</span>
            </a>
        </div>

</nav>
