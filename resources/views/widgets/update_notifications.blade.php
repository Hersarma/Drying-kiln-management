@if(auth()->user()->unreadNotifications()->count() === 0)
<a href="#" class="focus:outline-none py-2">
  <i class="fa fa-bell text-gray-200 hover:text-white" aria-hidden="true"></i>
</a>
@else
<a href="#" class="focus:outline-none py-2">
  <i class="fa fa-bell fa-lg animate-bounce text-green-500 hover:text-white" aria-hidden="true"></i>
</a>
@endif