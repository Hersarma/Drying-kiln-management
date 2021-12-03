<div class="modal_edit_incoming hidden fixed z-20 inset-0 overflow-y-auto">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity" aria-hidden="true">
			<div class="absolute inset-0 bg-gray-900 opacity-75"></div>
		</div>
		<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
		<div class="inline-block rounded-xl border-l-4 border-turquoise-light bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full md:w-2/3 shadow-2xl">
			<div class="px-4 py-5 sm:px-6">
				<h3 class="text-base text-gray-200 leading-6 font-bold">
				Izmena
				</h3>
			</div>
			<div class="w-full max-w-5xl mx-auto">
				<form method="post" action="{{ route('incoming.update', $incoming) }}" class="py-8 px-8 md:px-0">
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
								<button id="client" type="button" class="bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-8 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg flex justify-between items-center"><span class="set_client">{{ $client->name }}</span><i class="fas fa-angle-down fa-lg"></i></button>
							</div>
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->edit_incoming->first('client_id') }}
							</p>
							<div class="clients h-96 overflow-auto hidden absolute z-50 mt-4 w-full bg-blue_gray-800 rounded-xl border-l-4 border-turquoise-light w-full py-3 px-8 text-gray-200 leading-tight">
								<div class="flex items-center text-gray-600 px-4 md:px-12    py-4 md:py-8">
									<i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
									<input id="search_clients" type="search" name="search_clients" placeholder="Pretraga"
									class="bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none">
									<p id="url_name" class="hidden">{{ Request::path() }}</p>
								</div>
								<ul id="searchClient">
									@include('incoming.search_client')
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
		                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg"
		                  id="transport_company" name="transport_company" value="{{ $incoming->transport_company }}">
		                  <p class="text-red-500 text-sm italic mt-4">
		                    {{ $errors->edit_incoming->first('transport_company') }}
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
		                  <input class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg"
		                  id="invoice_number" name="invoice_number" value="{{ $incoming->invoice_number }}">
		                  <p class="text-red-500 text-sm italic mt-4">
		                    {{ $errors->edit_incoming->first('invoice_number') }}
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
							<textarea class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-turquoise-light focus:shadow-xl shadow-lg" id="notes" name="notes" rows="4">{{ $incoming->notes }}</textarea>
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->edit_incoming->first('notes') }}
							</p>
						</div>
					</div>
					<div class="py-2 overflow-auto">
						<table id="items" class="table-auto w-full text-left whitespace-normal">
				        <thead>
				          <tr class="border-b border-turquoise-light">
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
							  
							  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[{{ $loop->index }}][item_name]" value="{{ $item->item_name }}">
							  </td>
							  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[{{ $loop->index }}][quantity]"value="{{ $item->quantity }}"></td>
							  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[{{ $loop->index }}][cubic_metre]"value="{{ $item->cubic_metre }}"></td>
						  	</tr>
				        	@endforeach
				         
				        </tbody>
				      </table>
				     
					</div>
					<div class="flex justify-between py-4">
						<button type="button"
						class="close_modal_edit_incoming py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
						Otkaži
						</button>
						<button type="submit"
						class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-turquoise-medium hover:bg-turquoise-strong focus:outline-none">
						Sačuvaj
						</button>
					</div>
					<div>
						@if($errors->edit_incoming->any())
						<p class="text-red-500">Polja ne mogu biti prazna</p>
						@endif
					</div>
				</form>
			</div>
			<div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

    var i = 0;
    $("#add").click(function(){
        ++i;
        $("#items").append('<tr class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700"><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items['+i+'][item_name]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items['+i+'][quantity]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items['+i+'][cubic_metre]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><button type="button" class="remove-tr transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-400 hover:bg-red-500 focus:outline-none shadow-xl"><i class="fa fa-minus" aria-hidden="true"></i></button></td></tr>');

    });

    $(document).on('click', '.remove-tr', function(){  

         $(this).parents('tr').remove();

    });  

</script>