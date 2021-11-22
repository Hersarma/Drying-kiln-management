@extends('layouts.app')
@section('content')

<ul>
@foreach($dryKilnReadings as $reading)

	<li class="text-white text-xl px-4 py-4">
		{{ $reading->created_at }}
	</li>
@endforeach
</ul>

{{ $dryKilnReadings->links() }}
@endsection