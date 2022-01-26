@extends('layouts.app')
@section('content')
<div class="w-4/5 mx-auto mt-5">
	<form method="POST" action="#" enctype="multipart/form-data">
		@csrf
		<div class="shadow-xl rounded-xl bg-gray-800 border-l-4 border-turquoise-light sm:overflow-hidden">
			<div class="px-4 py-5 space-y-6 sm:p-6">
				<div class="grid grid-cols-3 gap-6">
					<div class="col-span-3 sm:col-span-2">
						<label for="for" class="block text-sm font-medium text-gray-200">
							Kome
						</label>
						<div class="mt-1 flex rounded-md">
							<input type="text" name="recipient" id="recipient"
							class="w-full md:w-1/2 border-b border-teal-500 py-2 focus:outline-none bg-transparent text-gray-100 text-lg">
						</div>
					</div>
				</div>
				<div class="grid grid-cols-3 gap-6">
					<div class="col-span-3 sm:col-span-2">
						<label for="for" class="block text-sm font-medium text-gray-200">
							Naslov
						</label>
						<div class="mt-1 flex rounded-md">
							<input type="text" name="subject" id="subject"
							class="w-full md:w-1/2 border-b border-teal-500 py-2 focus:outline-none bg-transparent text-gray-100 text-lg">
							
						</div>
					</div>
				</div>
				<div>
					<label for="message" class="block text-sm font-medium text-gray-200">
						Poruka
					</label>
					<div class="w-4/5 py-4">
						<textarea id="message" name="message" rows="6"
						class="w-full border-b border-teal-500 focus:outline-none bg-transparent text-gray-100 text-lg"></textarea>
						
					</div>
				</div>
				<div>
					<div class="w-full mt-2 flex justify-between px-6 border-b border-teal-500">
						<div class="space-y-1 text-center">
							<div class="text-base transition ease-out duration-500 transform hover:scale-110">
								<label for="file"
									class="w-full py-3 px-4 cursor-pointer border border-transparent leading-5 font-medium rounded-md text-gray-200 bg-turquoise-medium focus:outline-none shadow-xl">
									<i class="fa fa-paperclip fa-lg px-2 text-black" aria-hidden="true"></i>
									Izaberi fajl
								</label>
								<input id="file" name="file[]" type="file" multiple="multiple"
								class="sr-only">
							</div>
							<p class="text-xs text-gray-400 py-4">
								PNG, JPG, GIF do 2MB
							</p>
						</div>
						<div id="file_name" class="">
							
						</div>
					</div>
				</div>
			</div>
			<div class="px-4 py-2 text-right sm:px-6">
				<button id="animate" type="submit"
				class="inline-flex justify-center items-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-gray-200 transition ease-out duration-500 transform hover:scale-110 bg-turquoise-medium focus:outline-none shadow-xl">
				<i class="fa fa-paper-plane fa-lg px-2" aria-hidden="true"></i>
				Posalji
				</button>
			</div>
		</div>
	</form>
</div>
@endsection