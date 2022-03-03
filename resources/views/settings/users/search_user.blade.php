<div class="hidden sm:block md:block lg:block">
  @foreach($users as $user)
<div class="group flex justify-between items-center px-4">
  <p class="py-3">
  <input type="checkbox" name="deleteChecked[]" value="{{ $user->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
</p>
<p onclick="window.location = '{{ route('user_show',$user )}}'" class="deleteThisGet sm:w-1/3 md:w-1/3 lg:w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
  {{ ucfirst($user->name) }}
</p>
<p onclick="window.location = '{{ route('user_show',$user )}}'" class="sm:w-1/3 md:w-1/3 lg:w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
  {{ ucfirst($user->last_name) }}
</p>
<p onclick="window.location = '{{ route('user_show',$user )}}'" class="sm:w-1/3 md:w-1/3 lg:w-1/5 hidden sm:block md:block lg:block cursor-pointer py-3 text-center text-sm text-gray-200 group-hover:text-teal-600">
  {{ ucfirst($user->email) }}
</p>
<p onclick="window.location = '{{ route('user_show',$user )}}'" class="w-1/5 hidden lg:block cursor-pointer py-3 text-center text-sm text-teal-400 group-hover:text-teal-600">
  <i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i>
</p>
<p class="w-1/5 hidden lg:block cursor-pointer get_route_id text-red-600 hover:text-red-700 text-center">
  <i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
  <span class="hidden">{{route('user_delete', $user)}}</span>
  <em class="hidden">{{ $user->name }}</em>

</p>
</div>
@endforeach
<div class="px-4 py-2">
  {{ $users->links() }}
</div>

</div>


<!--Mobile-->
<div class="sm:hidden md:hidden lg:hidden">
@foreach($users as $user)
      <div onclick="window.location = '{{ route('user_show',$user )}}'" class="cursor-pointer border-b border-teal-400 rounded-xl px-2 py-1 my-5 text-sm shadow-lg bg-gray-800">
        <div class="flex justify-center items-center">
        <div class="flex justify-center items-center py-4">
          <p class="text-gray-200 px-1">
            {{ ucfirst($user->name) }}
          </p>
          <p class="text-gray-200 px-1">
            {{ ucfirst($user->last_name) }}
          </p>
        </div>
      </div>
      </div>
      @endforeach
      <div class="px-4 py-2">
  {{ $users->links() }}
</div>
</div>


  @if($users->isEmpty())
            <p class="text-gray-200 text-lg text-center py-4">Nema rezultata.</p>
            <div class="flex justify-center mt-5 md:mt-0 overflow-hidden">
              <button type="button" 
              class="toggle_modal_create_user transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-lg shadow-teal-400/20">
              Dodaj novog korisnika
            </button>
          </div>
       
      @endif