@extends('layouts.app')
@section('content')

@foreach($dryingProces as $proces)
<a href="{{ route('show_drying_proces', $proces) }}" class="text-white text-xl px-4 py-4">Prikazi</a>
@endforeach
{{ $dryingProces->links() }}
@endsection