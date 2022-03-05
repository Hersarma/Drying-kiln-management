@extends('layouts.app')
@section('content')
 <p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('drying_proces', $dryingProces->dry_kiln_id )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>

<section class="relative w-full overflow-auto py-2 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded shadow-lg">
  <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
  <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
    <div class="px-4 py-4">
      <p class="text-sm md:text-xl font-bold py-2 px-2 text-gray-200">Očitavanja sondi</p>
      <p class="text-sm md:text-xl font-bold py-2 px-2 text-gray-200">Klijenti: {{ Str::of($dryingProces->client)->replaceLast(',', '.')  ?: '/' }}</p>
    </div>
  <div class="w-full mx-auto overflow-auto">
      <div>
        <div class="flex justify-between items-center md:px-4 border-b border-gray-700">
          <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
            <span class="hidden md:block lg:block">Sonda 1</span>
            <span class="md:hidden lg:hidden">1<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
             <span class="hidden md:block lg:block">Sonda 2</span>
            <span class="md:hidden lg:hidden">2<i class="fas fa-thermometer"></i></span>
          </p>
           <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
           	<span class="hidden md:block lg:block">Sonda 3</span>
            <span class="md:hidden lg:hidden">3<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
  					<span class="hidden md:block lg:block">Sonda 4</span>
            <span class="md:hidden lg:hidden">4<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
 						<span class="hidden md:block lg:block">Sonda 5</span>
            <span class="md:hidden lg:hidden">5<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
           	<span class="hidden md:block lg:block">Sonda 6</span>
            <span class="md:hidden lg:hidden">6<i class="fas fa-thermometer"></i></span>
          </p>
          <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
            Prosek
          </p>
          <p class="w-1/8 py-3 tracking-wider text-gray-100 text-sm text-center">
            <span class="hidden md:block lg:block">Vreme</span>
            <span class="md:hidden lg:hidden"><i class="fa-solid fa-clock text-gray-200"></i></span>
          </p>
        </div>
        
        
        @foreach($dryKilnReadings as $readings)
        <div class="group flex justify-between items-center md:px-4">
        <p class="w-1/8 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->moisture_probe_1 ?: '/' }}
        </p>
        <p class="w-1/8 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->moisture_probe_2 ?: '/' }}
        </p>
        <p class="w-1/8 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->moisture_probe_3 ?: '/' }}
        </p>
        <p class="w-1/8 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->moisture_probe_4 ?: '/' }}
        </p>
        <p class="w-1/8 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->moisture_probe_5 ?: '/' }}
        </p>
        <p class="w-1/8 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->moisture_probe_6 ?: '/' }}
        </p>
        <p class="w-1/8 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->moisture_probes_average ?: '/' }}
        </p>
        <p class="w-1/8 hidden md:block lg:block cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $readings->created_at->format('d-m-Y H:i') }}
        </p>
        <p class="w-1/8 md:hidden lg:hidden cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ Str::limit($readings->created_at->format('d. F'), 7, $end='') }}
        </p>
      </div>
      @endforeach
    <div class="px-4 py-2">
      {{ $dryKilnReadings->links() }}
    </div>
    
    
    </div>
  </div>
</section>
@endsection