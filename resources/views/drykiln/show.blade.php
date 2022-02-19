@extends('layouts.app')
@section('content')
<p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('drykiln.index' )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<div class="flex flex-wrap justify-between items-center">
	<div class="w-full md:w-2/3 md:px-4">
		<div class="flex justify-center">
			@if(!$drykiln->dry_kiln_config->dry_kiln_status)
			<img class="h-20 w-20" src="/img/vent.png">
			@else
			<img class="animate-spin-slow h-20 w-20" src="/img/vent.png">
			@endif
		</div>
		<div class="border-l-4 border-r-4 border-turquoise-light rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
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
				
				<div class="flex justify-between items-center px-1 md:px-8">
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
				<div class="flex justify-between items-center px-1 md:px-8">
					<p class="py-4 text-gray-200 text-center">
						<i class="fas fa-user fa-lg px-4"></i>
						<span class="hidden md:inline-block">Klijenti</span>
					</p>
					<p class="py-4 text-gray-200">{{ Str::of($drykiln->dry_kiln_config->client)->replaceLast(',', '.')  ?: '/'}}</p>
				</div>
				<div class="flex justify-between items-center px-1 md:px-8">
					<p class="py-4 text-gray-200">
						<i class="fas fa-align-left fa-lg px-4"></i>
						<span class="hidden md:inline-block">Drvo</span>
					</p>
					<p class="text-gray-200">{{ $drykiln->dry_kiln_config->type_of_wood ?: '/'}}</p>
				</div>
				<div class="flex justify-between items-center px-1 md:px-8">
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
			<div class="flex justify-center py-4">
				@if(!$drykiln->dry_kiln_config->dry_kiln_status)
				<button
				class="toggle_modal_create_drykiln_config font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
				Startuj sušaru
				</button>
				@else
				<button
				class="toggle_modal_edit_drykiln_config font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
				Konfiguracija
				</button>
				@endif
			</div>
			
		</div>
	</div>
	
	<div class="w-full md:w-1/3 md:px-4 mt-20">
		<div class="relative mb-2 border-l-4 border-r-4 border-turquoise-light rounded-xl">
		  <div class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
		  <button id="legend_open" class="
		  px-4 md:px-8 py-2 text-base font-medium leading-5 text-gray-200 hover:text-white  focus:outline-none">
		  <span class="inline-block px-4">Legenda</span><i class="fas fa-angle-down"></i></button>
		  </div>
		  <div id="legend_show"
		  class="hidden absolute mt-6 shadow-lg">
		  <div class="bg-gray-900 opacity-80 py-2 px-4">
		  	<p class="text-gray-200 px-4 py-2">
		  		<i class="fas fa-temperature-high fa-lg text-red-500 px-2"></i>
		  	Temperatura u sušari
		  	</p>
		  	<p class="text-gray-200 px-4 py-2">
		  		<i class="fas fa-tint fa-lg text-blue-300 px-2"></i>
		  	Vlaga u sušari
		  	</p>
		  	<p class="text-gray-200 px-4 py-2">
		  		<i class="fas fa-circle text-orange-600 px-2"></i>
		  	Tražena
		  	</p>
		  	<p class="text-gray-200 px-4 py-2">
		  		<i class="fas fa-circle text-yellow-400 px-2"></i>
		  	Trenutna
		  	</p>
		  	<p class="text-gray-200 px-4 py-2">
		  		<i class="fas fa-thermometer fa-lg text-gray-200 px-2"></i>
		  	Prosecna vlaga sondi
		  	</p>
		  </div>
		  </div>
		</div>
		<div class="border-l-4 border-r-4 border-turquoise-light rounded-xl overflow-auto px-2 py-4 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
			<div class="flex justify-around items-center py-4">
				<div class="flex items-center">
					<i class="fas fa-temperature-high fa-4x text-red-500"></i>
				</div>
				<div>
					<div class="flex items-center">
						@if($drykiln->dry_kiln_config->dry_kiln_status)
						<p class="text-gray-200 text-xl font-bold">
							<span class="text-orange-600">.</span>
							{{ $drykiln->drykilnreadings()->latest()->first()->temp_needed }}
						</p>
						<i class="fas fa-genderless text-gray-200 -mt-4"></i>
						<p class="text-gray-200">
						C
						</p>
						<i class="fas fa-slash transform rotate-90 text-gray-200"></i>
						<p class="text-gray-200 text-xl font-bold">
							<span class="text-yellow-400">.</span>
							{{ $drykiln->drykilnreadings()->latest()->first()->temp_current }}
						</p>
						<i class="fas fa-genderless text-gray-200 -mt-4"></i>
						<p class="text-gray-200">
						C
						</p>
						@endif
					</div>
				</div>
			</div>
			<div class="flex justify-around items-center py-4">
				<i class="fas fa-tint fa-4x text-blue-300"></i>
				<div class="flex items-center">
					@if($drykiln->dry_kiln_config->dry_kiln_status)
					<p class="text-gray-200 text-xl font-bold">
					<span class="text-orange-600">.</span>
					{{ $drykiln->drykilnreadings()->latest()->first()->moisture_needed }}
					<i class="fas fa-percentage"></i></p>
					<i class="fas fa-slash transform rotate-90 text-gray-200"></i>
					<p class="text-gray-200 text-xl font-bold">
					<span class="text-yellow-400">.</span>
					{{ $drykiln->drykilnreadings()->latest()->first()->moisture_current }}
					<i class="fas fa-percentage"></i></p>
					@endif
				</div>
				
			</div>
			<div class="flex justify-around items-center py-4">
				<i class="fas fa-thermometer fa-3x text-gray-200 -ml-8"></i>
				<div class="flex items-center">
					@if($drykiln->dry_kiln_config->dry_kiln_status)
					<p class="text-gray-200 text-xl font-bold">
					{{ $drykiln->drykilnreadings()->latest()->first()->moisture_probes_average }}
					<i class="fas fa-percentage"></i></p>
					@endif
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="w-full md:px-4 py-4">
	<div class="flex px-4 justify-between items-center w-full mb-6 py-6 border-l-4 border-turquoise-light rounded-xl overflow-auto bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <p class="md:px-8 text-gray-200">Očitavanja sondi</p>
    <div class="flex space-x-4">
    	@if($drykiln->dry_kiln_config->dry_kiln_status)
    	<button
				class="toggle_modal_create_drykiln_readings font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
				Novi unos
		</button>
		@endif
		<a href="{{ route('drying_proces', $drykiln) }}">
		<button
				class="font-bold transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
				Istorija sušenja
		</button></a>
    </div>
  </div>
</div>
<p class="text-center py-2 text-white text-lg">Očitavanje sondi</p>
  @if($drykiln->dry_kiln_config->dry_kiln_status)
  <div class="w-full mx-auto overflow-auto bg-gray-800">
    
        <div class="flex justify-between items-center border-b border-turquoise-light md:px-4">
          <p class="w-1/7 py-3 tracking-wider {!! !empty($drykiln->dry_kiln_config->probe_1_status) ? 'text-gray-200' : 'text-gray-600' !!} text-sm text-center">
            <span class="hidden md:block lg:block">Sonda 1</span>
            <span class="md:hidden lg:hidden">1<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/7 py-3 tracking-wider {!! !empty($drykiln->dry_kiln_config->probe_2_status) ? 'text-gray-200' : 'text-gray-600' !!} text-sm text-center">
            <span class="hidden md:block lg:block">Sonda 2</span>
            <span class="md:hidden lg:hidden">2<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/7 py-3 tracking-wider {!! !empty($drykiln->dry_kiln_config->probe_3_status) ? 'text-gray-200' : 'text-gray-600' !!} text-sm text-center">
            <span class="hidden md:block lg:block">Sonda 3</span>
            <span class="md:hidden lg:hidden">3<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/7 py-3 tracking-wider {!! !empty($drykiln->dry_kiln_config->probe_4_status) ? 'text-gray-200' : 'text-gray-600' !!} text-sm text-center">
            <span class="hidden md:block lg:block">Sonda 4</span>
            <span class="md:hidden lg:hidden">4<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/7 py-3 tracking-wider {!! !empty($drykiln->dry_kiln_config->probe_5_status) ? 'text-gray-200' : 'text-gray-600' !!} text-sm text-center">
            <span class="hidden md:block lg:block">Sonda 5</span>
            <span class="md:hidden lg:hidden">5<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/7 py-3 tracking-wider {!! !empty($drykiln->dry_kiln_config->probe_6_status) ? 'text-gray-200' : 'text-gray-600' !!} text-sm text-center">
            <span class="hidden md:block lg:block">Sonda 6</span>
            <span class="md:hidden lg:hidden">6<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-200 text-sm text-center">
            <span class="hidden md:block lg:block">Vreme</span>
            <span class="md:hidden lg:hidden"><i class="fa-solid fa-clock text-gray-200"></i></span>
          </p>
        </div>
        @foreach($readings as $reading)
        <div class="flex justify-between items-center border-b border-turquoise-light md:px-4">
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ $reading->moisture_probe_1 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ $reading->moisture_probe_2 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ $reading->moisture_probe_3 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ $reading->moisture_probe_4 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ $reading->moisture_probe_5 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ $reading->moisture_probe_6 ?: '/'}}
          </p>
          <p class="hidden md:block lg:block w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ $reading->created_at->format('d-m-Y H:i') }}
          </p>
          <p class="md:hidden lg:hidden w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center">
            {{ Str::limit($reading->created_at->format('d. F'), 7, $end='') }}
          </p>
        </div>
        @endforeach
  </div>
	@endif
@include('drykiln.modals.create_drykiln_config')
@if($drykiln->dry_kiln_config()->exists())
@include('drykiln.modals.edit_drykiln_config')
@endif
@include('drykiln.modals.create_drykiln_readings')
@endsection