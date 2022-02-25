@extends('layouts.app')
@section('content')
<div class="container px-2 py-8 mx-auto">
<h1 class="text-3xl font-semibold text-center text-gray-200 capitalize lg:text-4xl dark:text-white">Podešavanja</h1>
<p class="max-w-2xl mx-auto mt-4 text-center text-gray-400 xl:mt-6">
 Konfiguracija imejla, korisnika, notifikacija.
</p> 
<div class="grid grid-cols-1 gap-8 mt-6 md:mt-24 xl:gap-12 md:grid-cols-2 lg:grid-cols-3">
 <div class="relative w-full p-8 space-y-8 text-center rounded-lg bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 shadow-lg">
    <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
    <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fas fa-envelope"></i>
 </h2>
<p class="font-medium text-gray-400">Imejl</p>
<a href="{{ route('mail_config_show') }}">
<button type="button" class="w-2/3 px-4 py-2 mt-10 tracking-wide text-white capitalize transition ease-out duration-500 transform hover:scale-110 bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 rounded-xl focus:outline-none">Podešavanja</button>
</a> 
</div>
<div class="relative w-full p-8 space-y-8 text-center rounded-lg bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 shadow-lg">
    <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
    <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fas fa-user"></i>
 </h2>
<p class="font-medium text-gray-400">Korisnici</p>
<a href="#"><button type="button" class="w-2/3 px-4 py-2 mt-10 tracking-wide text-white capitalize transition ease-out duration-500 transform hover:scale-110 bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 rounded-xl focus:outline-none">Podešavanja
</button></a>
</div>
<div class="relative w-full p-8 space-y-8 text-center rounded-lg bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 shadow-lg">
    <p class="absolute top-0 left-0 px-2 py-2 border-l-2 border-t-2 border-cyan-400"></p>
    <p class="absolute bottom-0 right-0 px-2 py-2 border-r-2 border-b-2 border-cyan-400"></p>
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fa fa-bell"></i>
 </h2>
<p class="font-medium text-gray-400">Notifikacije</p>
<a href="#"><button type="button" class="w-2/3 px-4 py-2 mt-10 tracking-wide text-white capitalize transition ease-out duration-500 transform hover:scale-110 bg-teal-400 hover:bg-teal-500 shadow-lg shadow-teal-400/20 rounded-xl focus:outline-none">Podešavanja
</button></a>
</div>
</div>
</div>
@endsection