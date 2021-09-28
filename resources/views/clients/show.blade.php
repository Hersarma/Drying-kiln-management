@extends('layouts.app')

@section('content')

    <section class="text-gray-700 body-font">
        <div class="md:px-5 py-5 mx-auto">
            <div class="text-center mb-10">
                <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Osnovne
                    informacije o klijentu</h1>

                <p class="text-xl leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">{{ Ucfirst($client->name) }}</p>
                
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Mesto</p>

                        <p class="title-font font-medium italic md:pr-4">{{ Ucfirst($client->city) }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Zemlja</p>

                        <p class="title-font font-medium italic md:pr-4">{{ Ucfirst($client->state) }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Adresa 1</p>

                        <p class="title-font font-medium italic md:pr-4">{{ Ucfirst($client->address_1) }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">PIB </p>

                        <p class="title-font font-medium italic md:pr-4">{{ $client->pib }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Adresa 2</p>

                        <p class="title-font font-medium italic md:pr-4">{{ Ucfirst($client->address_2) }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Matični broj</p>

                        <p class="title-font font-medium italic md:pr-4">{{ $client->mb }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Broj telefona </p>

                        <p class="title-font font-medium italic md:pr-4">{{ $client->contact }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Web stranica</p>
                        <a class="text-green-500 underline" href="https://{{ $client->website }}"
                           target="_blank">{{ $client->website }}</a>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">E-mail adresa</p>

                        <p class="title-font font-medium italic md:pr-4">{{ $client->email }}</p>

                    </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-white border border-teal-100 rounded flex p-4 h-full justify-between">
                        <p class="title-font font-medium">Beleške</p>

                        <p class="title-font font-medium italic md:pr-4">{{ Ucfirst($client->notes) }}</p>

                    </div>
                </div>

            </div>
            <div class="flex mx-auto">
                <button type="button" class="open_modal_edit_client transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-teal-400 border-0 py-2 px-4 focus:outline-none hover:bg-teal-500 rounded text-base shadow-xl"><i
                            class="px-2 fas fa-edit"></i>Izmeni</button>
                <a href="{{ route('clients-delete',$client )}}"
                   class="transition ease-out duration-500 transform hover:scale-110 mx-auto mt-10 text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded text-base shadow-xl"><i
                            class="px-2 fas fa-trash"></i>Obrisi</a>

            </div>

        </div>
    </section>
    @include('clients.modals.edit')
@endsection