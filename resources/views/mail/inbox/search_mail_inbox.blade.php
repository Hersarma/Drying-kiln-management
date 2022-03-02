<div class="hidden sm:block md:block lg:block">
  @foreach($mailInbox as $mail)
  @if($mail->read_at == 0)
  <div class="flex justify-between items-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700 px-4">
  <p class="py-3">
  <input type="checkbox" name="deleteChecked[]" value="{{ $mail->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/4 lg:w-1/6 cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->name ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/4 lg:w-1/6 cursor-pointer py-3 text-left md:text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->from ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/6 hidden lg:block cursor-pointer py-3 text-left md:text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->subject ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/4 lg:w-1/6 cursor-pointer py-3 text-left md:text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->created_at->format('d-m-Y H:m') }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/6 hidden lg:block cursor-pointer py-3 text-left md:text-center text-sm text-teal-400 hover:text-teal-600">
  <i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i>
</p>
<p class="w-1/6 hidden lg:block cursor-pointer get_route_id text-red-600 hover:text-red-700 text-left md:text-center">
  <i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
  <span class="hidden">{{route('mail_soft_delete', $mail)}}</span>
  <em class="hidden">{{ $mail->from }}</em>
</p>
</div>
  @else
  <div class="flex justify-between items-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700 px-4 opacity-50">
  <p class="py-3">
  <input type="checkbox" name="deleteChecked[]" value="{{ $mail->id }}" class="form-checkbox border-2 border-gray-400 appearance-none checked:bg-green-600 checked:border-transparent px-2 py-2 focus:outline-none">
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/4 lg:w-1/6 cursor-pointer py-3 text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->name ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/4 lg:w-1/6 cursor-pointer py-3 text-left md:text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->from ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/6 hidden lg:block cursor-pointer py-3 text-left md:text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->subject ?: '/' }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/4 lg:w-1/6 cursor-pointer py-3 text-left md:text-center text-sm text-gray-200 hover:text-teal-600">
  {{ $mail->created_at->format('d-m-Y H:m') }}
</p>
<p onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="w-1/6 hidden lg:block cursor-pointer py-3 text-left md:text-center text-sm text-teal-400 hover:text-teal-600">
  <i class="transition ease-out duration-500 transform hover:scale-110 far fa-eye fa-lg"></i>
</p>
<p class="w-1/6 hidden lg:block cursor-pointer get_route_id text-red-600 hover:text-red-700 text-left md:text-center">
  <i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg"></i>
  <span class="hidden">{{route('mail_soft_delete', $mail)}}</span>
  <em class="hidden">{{ $mail->from }}</em>
</p>
</div>
  @endif

@endforeach
<div class="px-4 py-2">
  {{ $mailInbox->links() }}
</div>

</div>


<!--Mobile-->
<div class="sm:hidden md:hidden lg:hidden">
@foreach($mailInbox as $mail)
@if($mail->read_at == 0)
      <div onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="cursor-pointer border-b border-teal-400 rounded-xl px-2 py-1 my-5 text-sm shadow-lg bg-gray-800">
        <div class="flex justify-between items-center">
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ $mail->name ?: $mail->from }}
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
@else
<div onclick="window.location = '{{ route('mail_inbox_show',$mail )}}'" class="cursor-pointer border-b border-teal-400 rounded-xl px-2 py-1 my-5 text-sm shadow-lg bg-gray-800 opacity-60">
        <div class="flex justify-between items-center">
        <div class="py-2">
          <p class="text-gray-200 py-2">
            {{ $mail->name ?: $mail->from }}
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
@endif
      @endforeach
      <div class="px-4 py-2">
  {{ $mailInbox->links() }}
</div>
</div>

@if($mailInbox->isEmpty())
  <p class="text-gray-100 text-lg text-center py-4">Nema rezultata.</p>
  
@endif
