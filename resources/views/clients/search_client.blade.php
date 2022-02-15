<div class="hidden sm:block md:block lg:block">
  @foreach($clients as $client)
<div class="flex justify-between items-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700 px-4">
  <p class="py-3">
  <input type="checkbox" name="deleteChecked[]" value="{{ $client->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
</p>
<p onclick="window.location = '{{ route('clients.show',$client )}}'" class="sm:w-1/2 md:w-1/2 lg:w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ ucfirst($client->name) }}
</p>
<p onclick="window.location = '{{ route('clients.show',$client )}}'" class="sm:w-1/2 md:w-1/2 lg:w-1/5 hidden sm:block md:block lg:block cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ ucfirst($client->email) }}
</p>
<p onclick="window.location = '{{ route('clients.show',$client )}}'" class="w-1/5 hidden lg:block cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $client->notes }}
</p>
<p onclick="window.location = '{{ route('clients.show',$client )}}'" class="w-1/5 hidden lg:block cursor-pointer py-3 text-center text-sm text-teal-400 hover:text-teal-600">
  <i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i>
</p>
<p class="w-1/5 hidden lg:block cursor-pointer get_route_id text-red-600 hover:text-red-700 text-center">
  <i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
  <span class="hidden">{{route('clients.destroy', $client)}}</span>
</p>
</div>
@endforeach
<div class="px-4 py-2">
  {{ $clients->links() }}
</div>

</div>


<!--Mobile-->
<div class="sm:hidden md:hidden lg:hidden">
@foreach($clients as $client)
      <div onclick="window.location = '{{ route('clients.show',$client )}}'" class="cursor-pointer border-b border-turquoise-light rounded-xl px-2 py-1 my-5 text-sm shadow-lg bg-gray-800">
        <div class="flex justify-center items-center">
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ ucfirst($client->name) }}
          </p>
        </div>
      </div>
      </div>
      @endforeach
      <div class="px-4 py-2">
  {{ $clients->links() }}
</div>
</div>


  @if($clients->isEmpty())
            <p class="text-gray-200 text-lg text-center py-4">Nema rezultata.</p>
            <div class="flex justify-center mt-5 md:mt-0 overflow-hidden">
              <button
              class="toggle_modal_create_client transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
              Dodaj novog klijenta
            </button>
          </div>
       
      @endif