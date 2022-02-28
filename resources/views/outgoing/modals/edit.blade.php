<div class="modal_edit_outgoing hidden fixed z-20 inset-0 overflow-y-auto">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity" aria-hidden="true">
			<div class="absolute inset-0 bg-gray-900 opacity-75"></div>
		</div>
		<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
		<div class="inline-block rounded-xl border-l-4 border-teal-400 bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full sm:w-3/4 md:2/3 shadow-2xl">
			<div class="px-4 py-5 sm:px-6">
				<h3 class="text-base text-gray-200 leading-6 font-bold">
				Izmeni izlaz
				</h3>
			</div>
			<div class="w-full max-w-5xl mx-auto">
				<form method="post" action="{{ route('outgoing.update', $outgoing) }}" class="py-8 px-8 md:px-0">
					@csrf
					@method('PATCH')
					<input id="client_id" class="hidden" name="client_id" value="{{ $client->id }}">
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
						<div class="md:w-1/3">
							<label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
								Klijent
							</label>
						</div>
						<div class="relative md:w-2/3">
							<div>
								<button type="button" class="client bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-8 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20 flex justify-between items-center"><span class="set_client">{{ $client->name }}</span><i class="fas fa-angle-down fa-lg"></i></button>
							</div>
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->edit_outgoing->first('client_id') }}
							</p>
							<div class="clients h-96 overflow-auto hidden absolute z-50 mt-4 w-full bg-blue_gray-800 rounded-xl border-l-4 border-teal-400 py-3 px-8 text-gray-200 leading-tight">
								<div class="flex justify-center items-center text-gray-600 px-4 md:px-12 py-4 md:py-8">
									<i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
									<input type="search" name="search_clients" placeholder="Pretraga"
									class="search_clients w-1/2 bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
									<p id="url_name" class="hidden">{{ Request::path() }}</p>
								</div>
								<ul class="searchClient">
									@include('outgoing.search_client')
								</ul>
							</div>
						</div>
					</div>
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                		<div class="md:w-1/3">
                  			<label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    		Prevoznik
                  			</label>
                		</div>
		                <div class="md:w-2/3">
		                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
		                  id="transport_company" name="transport_company" value="{{ $outgoing->transport_company }}">
		                  <p class="text-red-500 text-sm italic mt-4">
		                    {{ $errors->edit_outgoing->first('transport_company') }}
		                  </p>
		                </div>
		            </div>
		            <div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
                		<div class="md:w-1/3">
                  			<label class="block font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                    		Broj fakture/otpremnice
                  			</label>
                		</div>
		                <div class="md:w-2/3">
		                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20"
		                  id="invoice_number" name="invoice_number" value="{{ $outgoing->invoice_number }}">
		                  <p class="text-red-500 text-sm italic mt-4">
		                    {{ $errors->edit_outgoing->first('invoice_number') }}
		                  </p>
		                </div>
		            </div>
					<div class="md:flex md:items-center mb-6 text-gray-200 text-opacity-80 focus-within:text-opacity-100">
						<div class="md:w-1/3">
							<label class="block  font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
								Beleške
							</label>
						</div>
						<div class="md:w-2/3">
							<textarea class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="notes" name="notes" rows="4">{{ $outgoing->notes }}</textarea>
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->edit_outgoing->first('notes') }}
							</p>
						</div>
					</div>
					<div class="py-2 overflow-auto">
						<table id="items" class="table-auto w-full text-left whitespace-normal">
				        <thead>
				          <tr class="border-b border-teal-400">
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
				              Artikal
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
				              Količina
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
				              Kubikaža
				            </th>
				          </tr>
				        </thead>
				        <tbody>
				        	@foreach($items as $item)
							<tr
							  class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
							   <input class="hidden" type="hidden" name="items[{{ $loop->index }}][id]" value="{{ $item->id }}">
							   @if($errors->edit_outgoing->any())
							   <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl border border-red-500" type="text" name="items[{{ $loop->index }}][item_name]" value="{{ $item->item_name }}">
							   	<p class="text-red-500 mt-2">Obavezno polje</p>
							  </td>
							  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl border border-red-500" type="text" name="items[{{ $loop->index }}][quantity]"value="{{ $item->quantity }}">
							  	<p class="text-red-500 mt-2">Obavezno polje</p>
							  </td>
							  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="comma py-1 text-xl border border-red-500" type="text" name="items[{{ $loop->index }}][cubic_metre]"value="{{ $item->cubic_metre }}">
							  	<p class="text-red-500 mt-2">Obavezno polje</p>
							  </td>
							   @else
							   <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[{{ $loop->index }}][item_name]" value="{{ $item->item_name }}">
							  </td>
							  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[{{ $loop->index }}][quantity]"value="{{ $item->quantity }}"></td>
							  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="comma py-1 text-xl" type="text" name="items[{{ $loop->index }}][cubic_metre]"value="{{ $item->cubic_metre }}"></td>
							   @endif
						  	</tr>
				        	@endforeach
				         
				        </tbody>
				      </table>
				     
					</div>
					<div class="flex justify-between py-4">
						<button type="button"
						class="toggle_modal_edit_outgoing py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
						Otkaži
						</button>
						<button type="submit"
						class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">
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
