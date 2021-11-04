@extends('layouts.app')
@section('content')
<p class="text-blue-500">{{ $client->name }}</p>
@foreach($items as $timber)
<p class="text-red-500">{{ $timber->type_of_wood }}</p>
<p class="text-red-500">{{ $timber->number_of_pallets }}</p>
<p class="text-red-500">{{ $timber->m3 }}</p>
@endforeach
<button  class="px-4 py-3 text-center"><p
    class="cursor-pointer get_route_id text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i><span class="hidden">{{route('timberincoming.destroy', $timberincoming)}}</span></p></button>
@include('timberincoming.modals.edit')
@endsection