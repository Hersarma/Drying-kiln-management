<div class="modal_create_timber_incoming hidden fixed z-20 inset-0 overflow-y-auto">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity" aria-hidden="true">
			<div class="absolute inset-0 bg-gray-900 opacity-75"></div>
		</div>
		<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
		<div class="inline-block rounded-xl border-l-4 border-turquoise-light bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full md:w-1/2 shadow-2xl">
			<div class="px-4 py-5 sm:px-6">
				<h3 class="text-base text-gray-200 leading-6 font-bold">
				Ulaz gradje
				</h3>
			</div>
			<div class="w-full max-w-2xl mx-auto">
				<form method="post" action="{{ route('timberincoming.store') }}" class="py-8 px-8 md:px-0">
					@csrf
					<input id="client_id" class="hidden" name="client_id" value="">
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
						<div class="md:w-1/3">
							<label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
								Klijent
							</label>
						</div>
						<div class="relative md:w-2/3">
							<div>
								<button id="client" type="button" class="bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-8 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg flex justify-between items-center"><span class="set_client">Izaberi klijenta</span><i class="fas fa-angle-down fa-lg"></i></button>
							</div>
							<div class="clients h-96 overflow-auto hidden absolute z-50 mt-4 w-full bg-blue_gray-800 rounded-xl border-l-4 border-turquoise-light w-full py-3 px-8 text-gray-200 leading-tight">
								<div class="flex items-center text-gray-600 px-4 md:px-12    py-4 md:py-8">
									<i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
									<input id="search_clients" type="search" name="search_clients" placeholder="Pretraga"
									class="bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
									<p id="url_name" class="hidden">{{ Request::path() }}</p>
								</div>
								<ul id="searchClient">
									@include('timberincoming.search_client')
								</ul>
							</div>
						</div>
					</div>
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
						<div class="md:w-1/3">
							<label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
								Vrsta gradje
							</label>
						</div>
						<div class="md:w-2/3">
							<input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg"
							id="type_of_wood" name="type_of_wood">
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->create_timber_incoming->first('type_of_wood') }}
							</p>
						</div>
					</div>
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
						<div class="md:w-1/3">
							<label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
								Broj paleta
							</label>
						</div>
						<div class="md:w-2/3">
							<input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg"
							id="number_of_pallets" name="number_of_pallets">
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->create_timber_incoming->first('number_of_pallets') }}
							</p>
						</div>
					</div>
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
						<div class="md:w-1/3">
							<label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
								Kubikaza
							</label>
						</div>
						<div class="md:w-2/3">
							<input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg"
							id="m3" name="m3">
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->create_timber_incoming->first('m3') }}
							</p>
						</div>
					</div>
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
						<div class="md:w-1/3">
							<label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
								Beleske
							</label>
						</div>
						<div class="md:w-2/3">
							<textarea class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg" id="notes" name="notes" rows="4"></textarea>
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->create_timber_incoming->first('notes') }}
							</p>
						</div>
					</div>
					<div class="flex justify-between">
						<button type="button"
						class="close_modal_create_timber_incoming py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
						Otkaži
						</button>
						<button type="submit"
						class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-turquoise-medium hover:bg-turquoise-strong focus:outline-none">
						Sačuvaj
						</button>
					</div>
				</form>
			</div>
			<div>
			</div>
		</div>
	</div>
</div>