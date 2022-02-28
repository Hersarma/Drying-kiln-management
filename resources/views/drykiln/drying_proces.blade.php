@extends('layouts.app')
@section('content')
 <p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('drykiln.show', $drykiln )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<section class="border-l-4 border-teal-400 rounded-xl overflow-auto px-2 py-2 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
  <div class="md:px-8 md:flex justify-between w-full text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900">
    <div class="px-8 py-8">
      <p class="text-xl font-bold text-gray-200">Istorija sušenja za sušaru {{ $drykiln->name }} </p>
    </div>
    
  </div>
  <div class="w-full mx-auto overflow-auto">
    <form method="post" action="{{ route('delete_checked_drying_proces') }}">
      @csrf
      <table class="table-auto w-full text-left whitespace-normal">
        <thead>
          <tr class="border-b border-teal-400">
            <th class="px-4 py-3 tracking-wider bg-blue_gray-900 md:w-28">
              <input class="check_all form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none" type="checkbox">
              <button type="button" class="trash delete_checked_items hidden focus:outline-none text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg ml-8"></i></button>
            </th>
            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Redni broj
            </th>
            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Sušara stratovana
            </th>
            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Trajanje sušenja
            </th>
            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Prikaži
            </th>
            <th class="hidden md:table-cell px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
              Izbriši
            </th>
          </tr>
        </thead>
        <tbody id="searchDryingProces">
         @foreach($dryingProces as $proces)
         <tr
		  class="group bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
		  <td class="px-4 py-3">
		    <input type="checkbox" name="deleteChecked[]" value="{{ $proces->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
		  </td>
		   <td class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ $loop->iteration }}</td>
		   <td class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ $proces->created_at->format('d-m-Y H:m') }}</td>
		  <td class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ $proces->created_at->diffInDays($proces->updated_at) }} dana</td>
		  <td class="px-4 py-3 text-center"><a href="{{ route('show_drying_proces',$proces )}}"
		  class="text-teal-400 hover:text-teal-700"><i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i></a></td>
		  <td class="hidden md:table-cell px-4 py-3 text-center"><p
		    class="cursor-pointer get_route_id text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i><span class="hidden">{{route('delete_drying_proces', $proces)}}</span></p></td>
		  </tr>
         @endforeach
        </tbody>
      </table>
      @if($dryingProces->isNotEmpty())
      @include('messages.message_warning_delete_checked_items')
      @endif
    </form>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
  </div>
  {{ $dryingProces->links() }}
</section>
@endsection