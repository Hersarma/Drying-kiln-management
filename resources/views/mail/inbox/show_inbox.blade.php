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
				<span class="text-gray-300 italic pl-4">{{ $mail->from }}</span>
			</p>
		</div>
		<div class="px-4">
			<p class="text-gray-200">Datum: {{ $mail->created_at->format('d-m-Y') }}.</p>
		</div>
	</div>
	<div class="py-2">
		<p class="text-gray-200 text-lg py-4 px-4">Poruka</p>
		<div class="px-4 text-gray-200 text-lg leading-relaxed text-left">
				{!! $mail->text !!}
		</div>
	</div>
</div>
@endsection