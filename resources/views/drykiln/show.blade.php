@extends('layouts.app')
@section('content')
<div class="flex flex-wrap justify-between items-center">
	<div class="w-full md:w-2/3 mx-auto px-4">
		<div class="flex justify-center">
			@if(!$drykiln->dry_kiln_config->dry_kiln_status)
			<img class="h-20 w-20" src="/img/vent.png">
			@else
			<img class="animate-spin-slow h-20 w-20" src="/img/vent.png">
			@endif
		</div>
		<div class="border-l-4 border-r-4 border-turquoise-light rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
			<div>
				<div class="flex justify-between items-center py-4 px-4">
					<p class="py-1 px-1 text-white text-xl font-bold">Susara: {{ $drykiln->name }}</p>
					<p class="py-1 px-1 text-white text-xl font-bold">Status:
						@if(!$drykiln->dry_kiln_config->dry_kiln_status)
						<span class="text-gray-500">Neaktivna</span>
						@else
						<span class="text-green-500">Aktivna</span>
						@endif
					</p>
				</div>
				
				<div class="flex justify-between items-center px-1 md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-clock fa-lg px-4"></i>
						Pocetak procesa
					</p>
					@if(!empty($drykiln->dry_kiln_config->created_at))
					<p class="text-gray-200">{{ $drykiln->dry_kiln_config->created_at->format('d-m-Y H:m') }}</p>
					@else
					<p class="text-gray-200">/</p>
					@endif
				</div>
				<div class="md:flex md:justify-between md:items-center px-1 md:px-8">
					<p class="py-4 text-gray-200 text-center">
						<i class="fas fa-user fa-lg px-4"></i>
						Klijenti
					</p>
					<p class="py-4 text-gray-200">{{ $drykiln->dry_kiln_config->client ?: '/'}}</p>
				</div>
				<div class="flex justify-between items-center px-1 md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-align-left fa-lg px-4"></i>
						Drvo
					</p>
					<p class="text-gray-200">{{ $drykiln->dry_kiln_config->type_of_wood ?: '/'}}</p>
				</div>
				<div class="flex justify-between items-center px-1 md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-thermometer fa-lg px-4"></i>
						Aktivne sonde
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
			<div class="flex justify-center py-4">
				@if(!$drykiln->dry_kiln_config->dry_kiln_status)
				<button
				class="open_modal_create_drykiln_config font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
				Startuj susaru
				</button>
				@else
				<button
				class="open_modal_edit_drykiln_config font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
				Podesavanja
				</button>
				@endif
			</div>
			
		</div>
	</div>
	
	<div class="w-full md:w-1/3 mx-auto px-4 mt-20">
		<div class="border-l-4 border-r-4 border-turquoise-light rounded-xl overflow-auto px-2 py-4 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
			<div class="flex justify-around items-center py-4">
				<div class="flex items-center">
					<i class="fas fa-temperature-high fa-5x text-red-500"></i>
				</div>
				<div>
					<div class="flex items-center">
						<p class="text-gray-200 text-xl font-bold px-2"></p>
						<i class="fas fa-genderless text-gray-200 -mt-2"></i>
						<p class="text-gray-200">C</p>
					</div>
				</div>
			</div>
			<div class="flex justify-around items-center py-4">
				<i class="fas fa-tint fa-5x text-blue-300"></i>
				<p class="text-gray-200 text-xl font-bold"><i class="fas fa-percentage px-2"></i></p>
			</div>
		</div>
	</div>
</div>

<div class="px-4 py-6">
	<div class="flex px-4 justify-between items-center w-full mb-6 py-6 border-l-4 border-turquoise-light rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <p class="px-8 text-gray-200">Proces susenja</p>
    <div class="flex space-x-4">
    	<button
				class="open_modal_crete_drykiln_reading font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
				Novi unos
		</button>
		<button
				class="font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
				Istorija susenja
		</button>
    </div>
  </div>
	<table class="border-collapse table-auto md:table-fixed w-full text-left whitespace-normal">
		<thead>
			<tr class="border-b border-turquoise-light">
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Temperatura</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Vlaga</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 1</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 2</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 3</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 4</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 5</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 6</th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($readings as $reading)
			<tr class="group cursor-pointer bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->temp_needed }}<span class="px-1 text-green-400"><i class="fa fa-arrow-right" aria-hidden="true"></i>
				</span>{{ $reading->temp_current }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_needed }}<span class="px-1 text-green-400"><i class="fa fa-arrow-right" aria-hidden="true"></i>
				</span>{{ $reading->moisture_current }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_1 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_2 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_3 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_4 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_5 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_6 ?: '/' }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $readings->links() }}
</div>
@include('drykiln.modals.create_drykiln_config')
@endsection