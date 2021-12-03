@foreach($outgoing as $item)
<tr
  class="group bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
  <td class="px-4 py-3">
    <input type="checkbox" name="deleteChecked[]" value="{{ $item->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
  </td>
  <td onclick="window.location = '{{ route('clients.show',$item->clients->id )}}'" class="cursor-pointer px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ $item->clients->name ?: '/' }}</td>
   <td class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ $item->notes ?: '/' }}</td>
  <td class="px-4 py-3 text-left md:text-center text-sm text-gray-200 group-hover:text-teal-600">{{ $item->created_at->format('d-m-Y H:m') ?: '/' }}</td>
  <td  class="px-4 py-3 text-center"><a href="{{ route('outgoing.show',$item )}}"
  class="text-teal-400 hover:text-teal-700"><i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i></a></td>
  <td  class="px-4 py-3 text-center"><p
    class="cursor-pointer get_route_id text-red-600 hover:text-red-700"><i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i><span class="hidden">{{route('outgoing.destroy', $item)}}</span></p></td>
  </tr>
  @endforeach