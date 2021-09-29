@extends('layouts.app')
@section('content')
<div class="flex justify-center mt-5 md:mt-0">
                                    <button
                                            class="open_modal_create_timber_incoming transition ease-out duration-500 transform hover:scale-110 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-400 hover:bg-teal-500 focus:outline-none shadow-xl">
                                        Ulaz
                                    </button>
                                </div>
@include('timberincoming.modals.create')
@endsection