<div class="hidden sm:block md:block lg:block">
  @foreach($sentMail as $mail)
<div class="flex justify-between items-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700 px-4">
  <p class="py-3">
  <input type="checkbox" name="deleteChecked[]" value="{{ $mail->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
</p>
<p onclick="window.location = '{{ route('mail_sent_show',$mail )}}'" class="w-1/2 lg:w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->recipient ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_sent_show',$mail )}}'" class="w-1/5 hidden lg:block cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->subject ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_sent_show',$mail )}}'" class="w-1/2 lg:w-1/5 cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->created_at->format('d-m-Y H:m') }}
</p>
<p onclick="window.location = '{{ route('mail_sent_show',$mail )}}'" class="w-1/5 hidden lg:block cursor-pointer py-3 text-center text-sm text-teal-400 hover:text-teal-600">
  <i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i>
</p>
<p class="w-1/5 hidden lg:block cursor-pointer get_route_id text-red-600 hover:text-red-700 text-center">
  <i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
  <span class="hidden">{{route('mail_delete_sent', $mail)}}</span>
</p>
</div>
@endforeach
<div class="px-4 py-2">
  {{ $sentMail->links() }}
</div>

</div>


<!--Mobile-->
<div class="sm:hidden md:hidden lg:hidden">
@foreach($sentMail as $mail)
      <div onclick="window.location = '{{ route('mail_sent_show',$mail )}}'" class="cursor-pointer border-b border-turquoise-light rounded-xl px-2 py-1 my-5 text-sm shadow-lg bg-gray-800">
        <div class="flex justify-between items-center">
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ $mail->recipient ?: '/' }}
          </p>
        </div>
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ Str::limit($mail->created_at->format('d. F'), 7, $end='') }}
          </p>
        </div>
      </div>
      <div>
        <p class="text-gray-200 py-2">{{ Str::limit($mail->subject, 20, ' ...') ?: '/' }}</p>
      </div>
      </div>
      @endforeach
      <div class="px-4 py-2">
  {{ $sentMail->links() }}
</div>
</div>
@if($sentMail->isEmpty())
  <p class="text-gray-100 text-lg text-center py-4">Nema rezultata.</p>
  
@endif