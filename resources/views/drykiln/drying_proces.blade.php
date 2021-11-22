@extends('layouts.app')
@section('content')
<ul>
@foreach($dryingProces as $proces)

	<li>
		<a href="{{ route('show_drying_proces', $proces) }}" class="text-white text-xl px-4 py-4">Prikazi</a>
	</li>
@endforeach
</ul>

{{ $dryingProces->links() }}
@endsection