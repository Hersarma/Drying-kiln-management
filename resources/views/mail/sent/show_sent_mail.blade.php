@extends('layouts.app')
@section('content')
<div class="w-full md:w-2/3 mx-auto mt-10">
	<div class="border-t border-b border-teal-400 py-4">
		<div class="flex justify-between items-center py-6">
		<div class="px-4">
			<p class="hidden md:block text-xl text-gray-200">{{ Str::limit($mail->subject, 40, ' ...') ?: '/' }}</p>
			<p class="md:hidden text-xl text-gray-200">{{ Str::limit($mail->subject, 20, ' ...') ?: '/' }}</p>
		</div>
		<div class="flex items-center px-4">
			<p class="cursor-pointer get_route_id text-red-600 hover:text-red-700">
    			<i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg">
    			</i>
    			<span class="hidden">{{route('mail_delete_sent', $mail)}}</span>
    			<em class="hidden">{{ $mail->recipient }}</em>
    		</p>
		</div>
	</div>
	<div class="flex justify-between items-center py-5 border-t border-b border-gray-600">
		<div class="px-4">
			<p class="text-gray-200">
				{{ $mail->recipient ?: '/' }}:
				
			</p>
		</div>
		<div class="px-4">
			<p class="text-gray-200">Datum: {{ $mail->created_at->format('d-m-Y') }}.</p>
		</div>
	</div>
	<div class="py-2">
		<p class="text-gray-200 text-lg py-4 px-4">Poruka</p>
		<div class="px-4 text-gray-200 text-lg leading-relaxed text-left">
				{{ $mail->message }}
		</div>
	</div>
	</div>
	<div class="mt-10 flex flex-wrap justify-center items-center">
		@foreach($img_attachments as $attachment)
		<div class="m-4 bg-gray-700 px-2 py-2">
			<div class="text-center w-48 overflow-hidden">
				<embed src="/storage/email/sent_attachments/{{ $attachment }}" class="h-24 w-48">
				<p class="py-2 text-gray-200">{{Str::limit(Str::afterLast($attachment, '_'), 15, ' ...') }}</p>
			</div>
			<div class="flex justify-between items-center py-2">
				<a href="{{ route('download_sent_mail_attachment', $attachment) }}">
					<i class="fa-solid fa-download fa-lg text-cyan-300"></i>
                 </a>
				
				<i class="fa fa-eye fa-lg text-cyan-300 cursor-pointer" onclick='window.open("/storage/email/sent_attachments/{{ $attachment }}", "", "width="+ screen.width/1.3 +","+"height="+screen.height/1.3)'></i>
			</div>
		</div>
		@endforeach
		@foreach($file_attachments as $attachment)
		<div class="m-4 bg-gray-700 px-2 py-2">
			<div class="h-32 w-48  text-center">
				<i class="fa-solid fa-file fa-5x text-gray-200"></i>
				<p class="py-2 w-48 overflow-auto text-gray-200">
				{{Str::limit(Str::afterLast($attachment, '_'), 15, ' ...') }}
				</p>
			</div>
			<div class="flex justify-between items-center py-2">
				<a href="{{ route('download_sent_mail_attachment', $attachment) }}">
					<i class="fa-solid fa-download fa-lg text-cyan-300"></i>
                 </a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection