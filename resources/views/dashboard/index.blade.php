@extends('layouts.app')
@section('content')
<section class="px-4 mb-20">
	<div class="mb-10 px-2">
		<p class="text-gray-200 text-lg font-bold">Radna površina</p>
	</div>
	<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 md:gap-4">
		<div class="text-center py-2">
			<div class="relative w-full sm:w-2/3 md:w-2/3 mx-auto bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-lg shadow-lg py-2">
			<p class="absolute top-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
			<p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
			<p class="text-white py-4"><i class="fas fa-users fa-2x"></i></p>
			<p class="text-white py-4">Klijenti</p>
			<p class="text-white text-xl font-bold py-4">{{ $clients }}</p>
			</div>
		</div>
		<div class="text-center py-2">
			<div class="relative w-full sm:w-2/3 md:w-2/3 mx-auto bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-lg shadow-lg rounded-lg py-2">
			<p class="absolute top-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
			<p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
			<p class="text-white py-4"><i class="fas fa-users fa-2x"></i></p>
			<p class="text-white py-4">Lager ulaz</p>
			<p class="text-white text-xl font-bold py-4">{{ $incomings }}</p>
			</div>
		</div>
		<div class="text-center py-2">
			<div class="relative w-full sm:w-2/3 md:w-2/3 mx-auto bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-lg shadow-lg rounded-lg py-2">
			<p class="absolute top-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
			<p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
			<p class="text-white py-4"><i class="fas fa-users fa-2x"></i></p>
			<p class="text-white py-4">Lager izlaz</p>
			<p class="text-white text-xl font-bold py-4">{{ $outgoings }}</p>
			</div>
		</div>
		<div class="text-center py-2">
			<div class="relative w-full sm:w-2/3 md:w-2/3 mx-auto bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-lg shadow-lg rounded-lg py-2">
			<p class="absolute top-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
			<p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
			<p class="text-white py-4"><i class="fas fa-users fa-2x"></i></p>
			<p class="text-white py-4">Aktivne sušare</p>
			<p class="text-white text-xl font-bold py-4">{{ $drykiln }}</p>
			</div>
		</div>
	</div>
</section>
<section class="px-4 mb-20">
	<div class="mb-10 px-2">
		<p class="text-gray-200 text-lg font-bold">Nedavni ulazi</p>
	</div>
	<div class="flex justify-between items-center px-4 border-b border-turquoise-light">
     <p class="w-1/3 py-3 tracking-wider text-gray-100 text-sm bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
        Klijent
    </p>
    <p class="w-1/3 py-3 tracking-wider text-gray-100 text-sm bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
      Beleške
    </p>
    <p class="w-1/3 py-3 tracking-wider text-gray-100 text-sm bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
        Datum
    </p>
    </div>
	@foreach($recentIncomings as $incomings)
	<div class="flex justify-between items-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 px-4">
		<p class="w-1/3 cursor-pointer py-3 text-sm text-gray-200 hover:text-teal-600">
  	{{ ucfirst($incomings->clients->name ?: '/') }}
	</p>
	<p class="w-1/3 cursor-pointer py-3 text-sm text-gray-200 hover:text-teal-600">
  	{{ $incomings->notes ?: '/' }}
	</p>
	<p class="w-1/3 cursor-pointer py-3 text-sm text-gray-200 hover:text-teal-600">
  	{{ $incomings->created_at->format('d-m-Y') }}
	</p>
	</div>
	
	@endforeach
</section>
@endsection