@extends('layouts.app')
@section('content')
<div class="flex justify-between items-center px-2 md:px-10 mb-10 py-6 border-l-4 border-teal-400 rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
	<p class="text-gray-200">Prikaz sušara</p>
	<button
	class="toggle_modal_create_drykiln transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
	Dodaj novu sušaru
	</button>
</div>
<div class="flex flex-wrap justify-between items-center">
	@foreach($drykilns as $drykiln)
	<div class="w-full md:w-1/2 px-2 md:px-5 lg:px-5">
		<div class="flex justify-center">
			@if(!$drykiln->dry_kiln_config->dry_kiln_status)
			<img class="h-20 w-20" src="img/vent.png">
			@else
			<img class="animate-spin-slow h-20 w-20" src="img/vent.png">
			@endif
		</div>
		<div onclick="window.location = '{{ route('drykiln.show',$drykiln )}}'" class="cursor-pointer transition ease-out duration-200 transform hover:scale-105 border-l-4 border-r-4 border-teal-400 rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-lg shadow-cyan-400/50">
			<div>
				<div class="md:flex md:justify-between md:items-center py-4 px-4">
					<p class="py-1 px-1 text-white text-xl font-bold">Sušara: {{ $drykiln->name }}</p>
					<p class="py-1 px-1 text-white text-xl font-bold">Status:
						@if(!$drykiln->dry_kiln_config->dry_kiln_status)
						<span class="text-gray-500">Neaktivna</span>
						@else
						<span class="text-green-500">Aktivna</span>
						@endif
					</p>
				</div>
				<div class="flex justify-between items-center md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-clock fa-lg px-4"></i>
						<span class="hidden md:inline-block">Početak procesa</span>
					</p>
					@if(!empty($drykiln->dry_kiln_config->created_at))
					<p class="text-gray-200">{{ $drykiln->dry_kiln_config->created_at->format('d-m-Y H:m') }}</p>
					@else
					<p class="text-gray-200">/</p>
					@endif
				</div>
				<div class="flex justify-between items-center md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-user fa-lg px-4"></i>
						<span class="hidden md:inline-block">Klijenti</span>
					</p>
					<p class="text-gray-200">{{ $drykiln->dry_kiln_config->client ?: '/'}}</p>
				</div>
				<div class="flex justify-between items-center md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-align-left fa-lg px-4"></i>
						<span class="hidden md:inline-block">Drvo</span>
					</p>
					<p class="text-gray-200">{{ $drykiln->dry_kiln_config->type_of_wood ?: '/'}}</p>
				</div>
				<div class="flex justify-between items-center md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-thermometer fa-lg px-4"></i>
						<span class="hidden md:inline-block">Aktivne sonde</span>
					</p>
					<div class="flex">
						<p class="text-gray-200">
							{!! !empty($drykiln->dry_kiln_config->probe_1_status) ? '<span class="text-green-400 px-1">1,</span>' : '<span class="text-gray-700 px-1">1,</span>' !!}
						</p>
						<p class="text-gray-200">
							{!! !empty($drykiln->dry_kiln_config->probe_2_status) ? '<span class="text-green-400 px-1"> 2,</span>' : '<span class="text-gray-700 px-1"> 2,</span>' !!}
						</p>
						<p class="text-gray-200">
							{!! !empty($drykiln->dry_kiln_config->probe_3_status) ? '<span class="text-green-400 px-1">3,</span>' : '<span class="text-gray-700 px-1">3,</span>' !!}
						</p>
						<p class="text-gray-200">
							{!! !empty($drykiln->dry_kiln_config->probe_4_status) ? '<span class="text-green-400 px-1"> 4,</span>' : '<span class="text-gray-700 px-1"> 4,</span>' !!}
						</p>
						<p class="text-gray-200">
							{!! !empty($drykiln->dry_kiln_config->probe_5_status) ? '<span class="text-green-400 px-1">5,</span>' : '<span class="text-gray-700 px-1">5,</span>' !!}
						</p>
						<p class="text-gray-200">
							{!! !empty($drykiln->dry_kiln_config->probe_6_status) ? '<span class="text-green-400 px-1">6</span>' : '<span class="text-gray-700 px-1">6</span>' !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
@include('drykiln.modals.create')
@endsection