@extends('layouts.app')
@section('content')
<p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('drykiln.show', $drykiln )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<ul>
@foreach($dryingProces as $proces)

	<li>
		<a href="{{ route('show_drying_proces', $proces) }}" class="text-white text-xl px-4 py-4">Prikazi</a>
	</li>
@endforeach
</ul>

{{ $dryingProces->links() }}
@endsection