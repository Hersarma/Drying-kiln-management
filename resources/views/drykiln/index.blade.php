@extends('layouts.app')
@section('content')
<div class="w-full lg:w-1/4 md:w-1/2 mb-10 py-6 border-l-4 border-turquoise-light rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
        <p class="px-8 text-gray-200">Prikaz susara</p>
    </div>
<div class="flex flex-wrap justify-between items-center">
	@foreach($drykilns as $drykiln)
	<div class="w-full md:w-1/2 px-4">
		<div class="flex justify-center">
			@if(!$drykiln->status)
			<img class="h-20 w-20" src="img/vent.png">
			@else
			<img class="animate-spin-slow h-20 w-20" src="img/vent.png">
			@endif
		</div>
		<div class="border-l-4 border-r-4 border-turquoise-light rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
			<div>
				<div class="flex justify-between items-center py-4 px-4">
					<p class="py-1 px-1 text-white text-xl font-bold">Susara: 1</p>
					<p class="py-1 px-1 text-white text-xl font-bold">Status: 
						@if(!$drykiln->status)
						<span class="text-gray-500">Aktivna</span>
						@else
						<span class="text-green-500">Aktivna</span>
						@endif
					</p>
				</div>
				
				<div class="flex justify-between items-center px-8">
					<p class="py-4 text-gray-200">
	            	<i class="fas fa-clock fa-lg px-4"></i>
	            	Pocetak procesa
	        		</p>
	        		<p class="text-gray-200">21.10.2021</p>
				</div>
				<div class="flex justify-between items-center px-8">
					<p class="py-4 text-gray-200">
	            	<i class="fas fa-clock fa-lg px-4"></i>
	            	Pocetak procesa
	        		</p>
	        		<p class="text-gray-200">21.10.2021</p>
				</div>
				<div class="flex justify-between items-center px-8">
					<p class="py-4 text-gray-200">
	            	<i class="fas fa-clock fa-lg px-4"></i>
	            	Pocetak procesa
	        		</p>
	        		<p class="text-gray-200">21.10.2021</p>
				</div>
	        </div>
		</div>
	</div>
	@endforeach
</div>
@endsection

