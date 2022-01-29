@extends('layouts.app')
@section('content')
<div class="container px-6 py-8 mx-auto">
<h1 class="text-3xl font-semibold text-center text-gray-200 capitalize lg:text-4xl dark:text-white">Podešavanja</h1>
<p class="max-w-2xl mx-auto mt-4 text-center text-gray-400 xl:mt-6">
 Konfiguracija imejla, korisnika, notifikacija.
</p> 
<div class="grid grid-cols-1 gap-8 mt-6 md:mt-24 xl:gap-12 md:grid-cols-2 lg:grid-cols-3">
 <div class="w-full p-8 space-y-8 text-center border-l-0 border-r-0 border-t-4 border-b-4 md:border-l-4 md:border-r-4 md:border-t-0 md:border-b-0 border-turquoise-light rounded-lg bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fas fa-envelope"></i>
 </h2>
<p class="font-medium text-gray-400">Imejl</p>
<a href="{{ route('mail_config_show') }}">
<button type="button" class="w-2/3 px-4 py-2 mt-10 tracking-wide text-white capitalize transition ease-out duration-500 transform hover:scale-110 bg-teal-500 rounded-xl focus:outline-none">Podešavanja</button>
</a> 
</div>
<div class="w-full p-8 space-y-8 text-center border-l-0 border-r-0 border-t-4 border-b-4 md:border-l-4 md:border-r-4 md:border-t-0 md:border-b-0 border-turquoise-light rounded-lg bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fas fa-user"></i>
 </h2>
<p class="font-medium text-gray-400">Korisnici</p>
<a href="#"><button type="button" class="w-2/3 px-4 py-2 mt-10 tracking-wide text-white capitalize transition ease-out duration-500 transform hover:scale-110 bg-teal-500 rounded-xl focus:outline-none">Podešavanja
</button></a>
</div>
<div class="w-full p-8 space-y-8 text-center border-l-0 border-r-0 border-t-4 border-b-4 md:border-l-4 md:border-r-4 md:border-t-0 md:border-b-0 border-turquoise-light rounded-lg bg-gradient-to-r from-blue_gray-900 via-blue_gray-800 to-blue_gray-900 shadow-xl">
 <h2 class="text-5xl font-bold text-gray-200 uppercase">
	 <i class="fa fa-bell"></i>
 </h2>
<p class="font-medium text-gray-400">Notifikacije</p>
<a href="#"><button type="button" class="w-2/3 px-4 py-2 mt-10 tracking-wide text-white capitalize transition ease-out duration-500 transform hover:scale-110 bg-teal-500 rounded-xl focus:outline-none">Podešavanja
</button></a>
</div>
</div>
</div>
@endsection