@extends('layouts.app')
@section('content')
  <p class="m-2 md:m-5 text-gray-300 text-lg">
    <i onclick="window.location = '{{ route('drykiln.show', $drykiln )}}'" class="fa fa-arrow-circle-left fa-lg md:px-4 md:py-2 cursor-pointer hover:text-white" aria-hidden="true"></i>
    <span class="hidden md:inline-block">Nazad</span>
  </p>
<section class="relative hidden sm:block md:block lg:block w-full overflow-auto py-2 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded shadow-lg">
  <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
  <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
  <div class="md:px-8 md:flex justify-between w-full text-center">
    <div class="px-8 py-8">
      <h1 class="text-xl font-bold text-gray-200">Istorija sušenja za sušaru {{ $drykiln->name }}</h1>
    </div>
  </div>
  <div class="w-full mx-auto overflow-auto">
    <form method="post" action="{{ route('delete_checked_drying_proces') }}">
      @csrf
      <div>
        <div class="flex justify-between items-center px-4 border-b border-gray-700">
          <div class="flex items-center">
             <input class="check_all form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none" type="checkbox">
              <button type="button" class="trash delete_checked_items hidden focus:outline-none text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg ml-8"></i></button>
          </div>
          <p class="w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center">
            Redni broj
          </p>
          <p class="w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center">
            Sušara stratovana 
          </p>
           <p class="w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center">
            Trajanje sušenja
          </p>
          <p class="w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center">
            Prikaži
          </p>
          <p class="w-1/5 py-3 tracking-wider text-gray-100 text-sm text-center">
            Obriši
          </p>
        </div>
        <div class="">
        <div class="hidden sm:block md:block lg:block">
        @foreach($dryingProces as $proces)
        <div class="group flex justify-between items-center px-4">
        <p class="py-3">
        <input type="checkbox" name="deleteChecked[]" value="{{ $proces->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
        </p>
        <p class="w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $loop->iteration }}
        </p>
        <p class="w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $proces->created_at->format('d-m-Y H:m') }}
        </p>
        <p class="w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
        {{ $proces->created_at->diffInDays($proces->updated_at) }} dana
        </p>
        <p onclick="window.location = '{{ route('show_drying_proces',$proces )}}'" class="w-1/5 cursor-pointer py-3 text-center text-sm text-teal-400 group-hover:text-teal-600">
        <i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i>
        </p>
        <p class="w-1/5 cursor-pointer get_route_id text-red-600 hover:text-red-700 text-center">
        <i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
        <span class="hidden">{{route('delete_drying_proces', $proces)}}</span>
        <em class="hidden">{{ $drykiln->name }}</em>
      </p>
      </div>
      @endforeach
    <div class="px-4 py-2">
      {{ $dryingProces->links() }}
    </div>
    </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!--Mobile-->
<section class="sm:hidden md:hidden lg:hidden">
    <div class="w-full my-3 px-4">
        <p class="text-lg text-gray-200 text-center py-3">Istorija sušenja za sušaru</p>
        <p class="text-lg text-gray-200 text-center py-3">{{ $drykiln->name }}</p>
    </div>
    <div class="">
     <div class="sm:hidden md:hidden lg:hidden">
      @foreach($dryingProces as $proces)
      <div onclick="window.location = '{{ route('show_drying_proces',$proces )}}'" class="cursor-pointer border-b border-teal-400 rounded-xl px-2 py-1 my-5 text-sm shadow-lg bg-gray-800">
        <div class="flex justify-between items-center px-2">
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ $proces->created_at->format('d-m-Y') }}
          </p>
        </div>
        <div class="py-2">
          <p class="text-gray-200 py-2">
           {{ $proces->created_at->diffInDays($proces->updated_at) }} dana
          </p>
        </div>
      </div>
      </div>
      @endforeach
      <div class="px-4 py-2">
  {{ $dryingProces->links() }}
</div>
</div>
    </div>
</section>
@endsection