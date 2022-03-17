@extends('layouts.app')
@section('content')
<div class="relative text-center md:text-left lg:text-left px-2 md:px-10 mb-10 py-6 overflow-auto bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded shadow-lg">
	<p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
	<p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
	<p class="text-gray-200">Notifikacije</p>
</div>
@foreach($notifications as $notification)
		<div class="relative mb-5 md:flex md:justify-between md:items-center py-3 px-4 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-lg shadow-lg">
			<p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
			<p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
			<div class="flex items-center px-4">
				<p class="hidden sm:block md:block lg:block cursor-pointer text-sm text-gray-200 group-hover:text-teal-600">
        		{{ $loop->iteration }}
        		</p>
				<p class="text-gray-200 px-4">{{ $notification->message }}</p>
			</div>
			
			<div class="flex items-center px-4 mt-4 md:mt-0">
				<p class="text-gray-200 text-sm px-4">{{ $notification->created_at->format('d-m-Y') }}</p>
				<p class="cursor-pointer px-4 get_route_id text-red-600 hover:text-red-700 text-center">
				<i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
  				<span class="hidden">{{route('notifications_destroy', $notification)}}</span>
  				<em class="hidden">{{ $loop->iteration }}</em>
				</p>
			</div>
		</div>
@endforeach
<div class="px-4 py-2">
  {{ $notifications->links() }}
</div>
@endsection