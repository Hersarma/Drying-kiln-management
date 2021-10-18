@foreach($clients as $client)
<tr
  class="group cursor-pointer bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
  <td class="px-4 py-3">
    <input type="checkbox" name="deleteChecked[]" value="{{ $client->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
  </td>
  <td onclick="window.location = '{{ route('clients.show',$client )}}'" class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ ucfirst($client->name) }}</td>
  <td onclick="window.location = '{{ route('clients.show',$client )}}'" class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ ucfirst($client->email) }}</td>
  <td onclick="window.location = '{{ route('clients.show',$client )}}'" class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ ucfirst($client->notes) }}</td>
  <td  class="px-4 py-3 text-right"><a href="{{ route('clients.show',$client )}}"
  class="text-teal-400 hover:text-teal-700"><i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i></a></td>
  <td class="px-4 py-3 text-center"><p
    class="get_route_id text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i><span class="hidden">{{route('clients.destroy', $client)}}</span></p></td>
  </tr>
  @endforeach