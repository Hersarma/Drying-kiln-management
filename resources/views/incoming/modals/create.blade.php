<div class="modal_create_incoming hidden fixed z-20 inset-0 overflow-y-auto">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity" aria-hidden="true">
			<div class="absolute inset-0 bg-gray-900 opacity-75"></div>
		</div>
		<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
		<div class="relative inline-block bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded overflow-hidden transform transition-all sm:my-8 align-middle w-full sm:w-3/4 md:2/3 shadow-2xl">
      <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-teal-400"></p>
      <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-teal-400"></p>
			<div class="px-4 py-5 sm:px-6">
				<h3 class="text-base text-gray-200 leading-6 font-bold">
				Ulaz
				</h3>
			</div>
			<div class="w-full max-w-5xl mx-auto">
				<form method="post" action="{{ route('incoming.store') }}" class="py-8 px-8 md:px-0">
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
								<button type="button" class="client bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-8 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20 flex justify-between items-center"><span class="set_client">Izaberi klijenta</span><i class="fas fa-angle-down fa-lg"></i></button>
							</div>
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->create_incoming->first('client_id') }}
							</p>
							<div class="clients h-96 overflow-auto hidden absolute z-50 mt-4 w-full bg-blue_gray-800 rounded-xl border-l-4 border-teal-400 py-3 px-8 text-gray-200 leading-tight">
								@if($clients->count())
								<div class="flex justify-center items-center text-gray-600 px-4 md:px-12 py-4 md:py-8">
									<i class="fa fa-search fa-lg px-4 text-gray-400" aria-hidden="true"></i>
									<input type="search" name="search_clients" placeholder="Pretraga"
									class="search_clients bg-transparent text-gray-100 border-b border-gray-200 focus:outline-none w-1/2">
									<p id="url_name" class="hidden">{{ Request::path() }}</p>
								</div>
								<ul class="searchClient">
									@include('incoming.search_client')

								</ul>
								<p class="show_client_link hidden"><a href="{{ route('clients.index') }}"><button type="button" class="transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none">Dodaj novog klijenta</button></a></p>
								@else
								<div class="mt-10">
									<p class="mb-10 text-lg py-4">Baza klijenata je prazna</p>
									<a class="" href="{{ route('clients.index') }}"><button type="button" class="transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 focus:outline-none">Dodaj novog klijenta</button></a>
								</div>
								@endif
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
		                  id="transport_company" name="transport_company">
		                  <p class="text-red-500 text-sm italic mt-4">
		                    {{ $errors->create_incoming->first('transport_company') }}
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
		                  id="invoice_number" name="invoice_number">
		                  <p class="text-red-500 text-sm italic mt-4">
		                    {{ $errors->create_incoming->first('invoice_number') }}
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
							<textarea class="appearance-none bg-gradient-to-r from-blue_gray-800 via-blue_gray-700 to-blue_gray-800 rounded-xl border-l-4 border-gray-400 w-full py-3 px-4 text-gray-200 leading-tight focus:outline-none focus:border-teal-400 focus:shadow-xl focus:shadow-teal-400/20" id="notes" name="notes" rows="4"></textarea>
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->create_incoming->first('notes') }}
							</p>
						</div>
					</div>
					<div class="py-2 overflow-auto">
						<table id="items" class="table-auto w-full text-left whitespace-normal">
				        <thead>
				          <tr class="border-b border-teal-400">
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center ">
				              Artikal
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center ">
				              Kolicina
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center ">
				              Kubikaža
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center ">
				              Kontrole
				            </th>
				          </tr>
				        </thead>
				        <tbody>
				         <tr
						  class="border-b border-gray-700">
						  @if($errors->create_incoming_items->any())
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl border border-red-500 focus:outline-none" type="text" name="items[0][item_name]">
						  	<p class="text-red-500 mt-2">Obavezno polje</p>
						  </td>
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl border border-red-500 focus:outline-none" type="text" name="items[0][quantity]">
						  <p class="text-red-500 mt-2">Obavezno polje</p>
						  </td>
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="comma py-1 text-xl border border-red-500 focus:outline-none" type="text" name="items[0][cubic_metre]">
						  <p class="text-red-500 mt-2">Obavezno polje</p>
						  </td>
						  @else
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl focus:outline-none" type="text" name="items[0][item_name]">
						  </td>
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl focus:outline-none" type="text" name="items[0][quantity]">
						  </td>
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="comma py-1 text-xl focus:outline-none" type="text" name="items[0][cubic_metre]">
						  </td>
						  @endif
						   <td id="add" class="px-4 py-3 text-left md:text-center text-gray-700"><button type="button"
					        class="transition ease-out duration-500 transform hover:scale-110 py-1 px-2 border border-teal-400 text-sm leading-5 font-medium rounded-md text-white bg-transparent hover:bg-teal-500 focus:outline-none shadow-xl">
					        <i class="fa fa-plus" aria-hidden="true"></i>
					        </button>
					       </td>						 
						  </tr>
				        </tbody>
				      </table>
				     
					</div>
					<div class="flex justify-between py-4">
						<button type="button"
						class="toggle_modal_create_incoming py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
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
<script type="text/javascript">

    var i = 0;
    $("#add").click(function(){
        ++i;
        $("#items").append('<tr class="border-b border-gray-700"><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl focus:outline-none" type="text" name="items['+i+'][item_name]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl focus:outline-none" type="text" name="items['+i+'][quantity]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="comma py-1 text-xl focus:outline-none" type="text" name="items['+i+'][cubic_metre]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><button type="button" class="remove-tr transition ease-out duration-500 transform hover:scale-110 py-1 px-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-400 hover:bg-red-500 focus:outline-none shadow-xl"><i class="fa fa-minus" aria-hidden="true"></i></button></td></tr>');

    });

    $(document).on('click', '.remove-tr', function(){  

         $(this).parents('tr').remove();

    });  

</script>