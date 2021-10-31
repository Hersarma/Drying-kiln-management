<div class="modal_create_timber_incoming hidden fixed z-20 inset-0 overflow-y-auto">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity" aria-hidden="true">
			<div class="absolute inset-0 bg-gray-900 opacity-75"></div>
		</div>
		<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
		<div class="inline-block rounded-xl border-l-4 border-turquoise-light bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 overflow-hidden transform transition-all sm:my-8 align-middle w-full md:w-2/3 shadow-2xl">
			<div class="px-4 py-5 sm:px-6">
				<h3 class="text-base text-gray-200 leading-6 font-bold">
				Ulaz gradje
				</h3>
			</div>
			<div class="w-full max-w-5xl mx-auto">
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
							<p class="text-red-500 text-sm italic mt-4">
								{{ $errors->create_timber_incoming->first('client_id') }}
							</p>
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
					<div class="py-2 overflow-auto">
						<table id="items" class="table-auto w-full text-left whitespace-normal">
				        <thead>
				          <tr class="border-b border-turquoise-light">
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
				              Vrsta gradje
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
				              Broj paleta
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
				              Kubikaza
				            </th>
				            <th class="px-2 md:px-4 py-3 tracking-wider text-gray-100 text-sm text-left md:text-center bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 ">
				              Kontrole
				            </th>
				          </tr>
				        </thead>
				        <tbody>
				         <tr
						  class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700">
						  
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[0][type_of_wood]">
						  </td>
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[0][number_of_pallets]"></td>
						  <td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items[0][m3]"></td>
						   <td id="add" class="px-4 py-3 text-left md:text-center text-gray-700"><button type="button"
					        class="transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
					        <i class="fa fa-plus" aria-hidden="true"></i>
					        </button></td>						 
						  </tr>
				        </tbody>
				      </table>
				     
					</div>
					<div class="flex justify-between py-4">
						<button type="button"
						class="close_modal_create_timber_incoming py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">
						Otkaži
						</button>
						<button type="submit"
						class="py-2 w-1/3 transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-turquoise-medium hover:bg-turquoise-strong focus:outline-none">
						Sačuvaj
						</button>
					</div>
					<div>
						@if($errors->create_timber_incoming->any())
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
        $("#items").append('<tr class="bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 border-b border-gray-700"><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items['+i+'][type_of_wood]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items['+i+'][number_of_pallets]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><input class="py-1 text-xl" type="text" name="items['+i+'][m3]"></td><td class="px-4 py-3 text-left md:text-center text-gray-700"><button type="button" class="remove-tr transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-400 hover:bg-red-500 focus:outline-none shadow-xl"><i class="fa fa-minus" aria-hidden="true"></i></button></td></tr>');

    });

    $(document).on('click', '.remove-tr', function(){  

         $(this).parents('tr').remove();

    });  

</script>