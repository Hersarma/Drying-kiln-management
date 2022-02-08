@extends('layouts.app')
@section('content')
<div class="w-full md:w-2/3 mx-auto mt-10 py-6 border-t border-b border-turquoise-light">
	<div class="flex justify-between items-center py-6">
		<div class="px-4">
			<p class="hidden md:block text-xl text-gray-200">{{ Str::limit($mail->subject, 40, ' ...') ?: '/' }}</p>
			<p class="md:hidden text-xl text-gray-200">{{ Str::limit($mail->subject, 20, ' ...') ?: '/' }}</p>
		</div>
		<div class="flex items-center px-4">
			<p class="cursor-pointer text-green-400">
				<i class="fa fa-reply fa-lg transition ease-out duration-500 transform hover:scale-110 px-3">
					
				</i>
			</p>
			<p class="cursor-pointer get_route_id text-red-600 hover:text-red-700">
    			<i class="transition ease-out duration-500 transform hover:scale-110 fas fa-trash fa-lg">
    			</i>
    			<span class="hidden">{{route('mail_soft_delete', $mail)}}</span>
    		</p>
		</div>
	</div>
	<div class="flex justify-between items-center py-5 border-t border-b border-gray-600">
		<div class="px-4">
			<p class="text-gray-200">
				{{ $mail->name ?: '/' }}:
				<span class="text-gray-400 italic  pl-4">{{ $mail->from }}</span>
			</p>
		</div>
		<div class="px-4">
			<p class="text-gray-200">Datum: {{ $mail->created_at->format('d-m-Y') }}.</p>
		</div>
	</div>
	<div class="py-4">
		<p class="text-gray-200 text-lg py-4 px-4">Poruka</p>
		<div class="px-4">
			<p class="text-gray-200 leading-relaxed text-left">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
	</div>
</div>
@endsection