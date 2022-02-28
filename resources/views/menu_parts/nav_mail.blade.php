<nav class="py-2">
  <div class="flex justify-center">
    <a href="{{ route('mail_index') }}"
    class="mx-3 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/inbox',
    'mail/inbox/*') ? 'border-b-2 border-teal-400 text-gray-200' : 'text-gray-500 hover:text-gray-200 border-b-2 border-gray-500 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }} ">
    <i class="fas fa-inbox pr-0 md:pr-3">
    </i>
    <span class="hidden md:inline-block">Primljene</span>
    </a>
    <a href="{{ route('mail_index_deleted') }}"
    class="mx-3 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/deleted/*') ? 'border-b-2 border-teal-400 text-gray-200' : 'text-gray-500 hover:text-gray-200 border-b-2 border-gray-500 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }}">
    <i class="fas fa-trash pr-0 md:pr-3">
    </i>
    <span class="hidden md:inline-block">Otpad</span>
    </a>
    <a href="#"
    class="mx-3 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/deleted') ? 'border-b-2 border-teal-400 text-gray-200' : 'text-gray-500 hover:text-gray-200 border-b-2 border-gray-500 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }}">
    <i class="fa fa-ban pr-0 md:pr-3" aria-hidden="true">
    </i>
    <span class="hidden md:inline-block">Nepozeljne</span>
    </a>
    <a href="{{ route('mail_sent_index') }}"
    class="mx-3 mr-6 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/sent', 'mail/sent/*') ? 'border-b-2 border-teal-400 text-gray-200' : 'text-gray-500 hover:text-gray-200 border-b-2 border-gray-500 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }}">
    <i class="fa fa-paper-plane pr-0 md:pr-3" aria-hidden="true">
    </i><span class="hidden md:inline-block">Poslate</span>
    </a>
    <a href="{{ route('new_mail') }}"
    class="mx-3 mr-6 px-3 py-2 text-sm font-medium leading-5 {{ Request::is('mail/new_mail') ? 'border-b-2 border-teal-400 text-gray-200' : 'text-gray-500 hover:text-gray-200 border-b-2 border-gray-500 hover:border-teal-400 focus:outline-none transition duration-150 ease-in-out' }}">
    <i class="fa fa-plus pr-0 md:pr-3" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nova poruka</span>
    </a>
  </div>
</nav>
