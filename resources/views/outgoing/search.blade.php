<div class="hidden sm:block md:block lg:block">
  @foreach($outgoing as $item)
<div class="group flex justify-between items-center px-4">
  <p class="py-3">
  <input type="checkbox" name="deleteChecked[]" value="{{ $item->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
</p>
<p onclick="window.location = '{{ route('clients.show',$item->clients->id )}}'" class="w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
  {{ ucfirst($item->clients->name ?: '/') }}
</p>
<p class="w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
  {{ $item->notes ?: '/' }}
</p>
<p class="w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
  {{ $item->created_at->format('d-m-Y') }}
</p>
<p onclick="window.location = '{{ route('outgoing.show',$item )}}'" class="w-1/5 cursor-pointer py-3 text-center text-sm text-teal-400 group-hover:text-teal-600">
  <i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i>
</p>
<p class="w-1/5 cursor-pointer get_route_id text-red-600 hover:text-red-700 text-center">
  <i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
  <span class="hidden">{{route('outgoing.destroy', $item)}}</span>
  <em class="hidden">{{ $item->clients->name }}</em>
</p>
</div>
@endforeach
<div class="px-4 py-2">
  {{ $outgoing->links() }}
</div>

</div>


<!--Mobile-->
<div class="sm:hidden md:hidden lg:hidden">
@foreach($outgoing as $item)
      <div onclick="window.location = '{{ route('outgoing.show',$item )}}'" class="cursor-pointer border-b border-teal-400 rounded-xl px-2 py-1 my-5 text-sm shadow-lg bg-gray-800">
        <div class="flex justify-between items-center px-2">
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ ucfirst($item->clients->name) }}
          </p>
        </div>
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ $item->created_at->format('d-m-Y') }}
          </p>
        </div>
      </div>
      </div>
      @endforeach
      <div class="px-4 py-2">
  {{ $outgoing->links() }}
</div>
</div>


  @if($outgoing->isEmpty())
            <p class="text-gray-200 text-lg text-center py-4">Nema rezultata.</p>
            <div class="flex justify-center mt-5 md:mt-0 overflow-hidden">
              <button
              class="toggle_modal_create_outgoing transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
              Dodaj novi ulaz
            </button>
          </div>
       
      @endif

