@extends('layouts.app')
@section('content')
 <p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('drying_proces', $dryingProces->dry_kiln_id )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<section class="border-l-4 border-teal-400 rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="md:px-8 md:flex justify-between w-full text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="px-8 py-8">
      <p class="text-xl font-bold text-gray-200">Očitavanja sondi</p>
      
    </div>
     <div class="px-8 py-8">
      <p class="text-gray-200">Klijenti: {{ Str::of($dryingProces->client)->replaceLast(',', '.')  ?: '/' }}</p>
    </div>
    
  </div>
  <div class="w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-normal">
		<thead>
			<tr class="border-b border-teal-400">
				<th class="text-gray-100 px-2 md:px-4 py-3 tracking-wider text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 1</th>
				<th class="text-gray-100 px-2 md:px-4 py-3 tracking-wider text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 2</th>
				<th class="text-gray-100 px-2 md:px-4 py-3 tracking-wider text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 3</th>
				<th class="text-gray-100 px-2 md:px-4 py-3 tracking-wider text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 4</th>
				<th class="text-gray-100 px-2 md:px-4 py-3 tracking-wider text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 5</th>
				<th class="text-gray-100 px-2 md:px-4 py-3 tracking-wider text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Sonda 6</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Prosek</th>
				<th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">Vreme</th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($dryKilnReadings as $reading)
			<tr class="group cursor-pointer bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_1 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_2 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_3 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_4 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_5 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probe_6 ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->moisture_probes_average ?: '/' }}</td>
				<td class="px-4 py-3 text-left md:text-center text-sm text-gray-200">{{ $reading->created_at->format('d-m-Y H:i') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
  </div>
  {{ $dryKilnReadings->links() }}
</section>
@endsection